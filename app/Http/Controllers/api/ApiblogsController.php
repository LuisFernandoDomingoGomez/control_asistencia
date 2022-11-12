<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class ApiblogsController extends ApiController
{
    /**
     * Display a listing of the resource.rc
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();

        return $this->showAll($blogs, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogs = Blog::create($request->all());

        return $this->showOne($blogs, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $blogs = Blog::findOrfail($id);

            return $this->showOne($blogs, 200);

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id= Blog::find($id);
        $id->update($request->all());
        //return $id;
        return $this->showUpdate('Autor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $blogs = Blog::findOrfail($id);

            $blogs->delete();

            return $this->successResponse($blogs, 200);

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 404);
        }
    }
}