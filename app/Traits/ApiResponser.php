<?php

namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

trait apiResponser
{
    protected function successResponse($data, $code)
  {
    return  response()->json($data,$code);  
  }

  /** Metodo para retornar una respuesta de error que 
  * tendra el mensaje y el codigo */
  protected function errorResponse($message, $code)
  {
    return response()->json(['error'=>$message,'code'=>$code],$code);
  }

  /** Mostrara la lista completas de usuarios  si la r
  * respuesta no tiene un codigo por defecto mandamos un 200*/
  protected function showAll(Collection $collection, $code = 200){
    return $this->successResponse($collection, $code);
  }

  /** Mostrara solo un registro y este resive una instancia */
  protected function showOne(Model $instance, $code = 200){
    return $this->successResponse($instance, $code);
  }

  /* Mensaje de guardar desde la api */
  protected function showMessage($message, $code = 200){
    return $this->successResponse(['data'=> $message], $code);
  }

  /* Mensaje de actualizar desde la api */
  protected function showUpdate($message, $code = 200){
    return $this->successResponse(['data'=> $message], $code);
  }

  /* Mensaje de eliminar desde la api */
  protected function showDelete($message, $code = 200){
    return $this->successResponse(['data'=> $message], $code);
  }

}