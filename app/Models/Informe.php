<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    
    static $rules = [
        'name' => 'required',
        'archivo' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['name','archivo'];
}