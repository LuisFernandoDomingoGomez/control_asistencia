<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    
    static $rules = [
      'numero' => 'required',
      'nombre' => 'required',
      'departamento' => 'required',
      'tiempo_requerido' => 'required',
      'tiempo_real' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','nombre','departamento','tiempo_requerido','tiempo_real','retardo','retardo_minutos','salida_temprano','salida_temprano_minutos','tiempo_extra_normal','tiempo_extra_especial','asistencias','v','f','p','bono_nota','bono_extra','bono','deduccion_tarde','deduccion_salida','deduccion_otro','real','observacion'];



}
