<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operacions sobre tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            //Operacions sobre tabla asistencias
            'ver-asistencia',
            'importar-archivo-asistencia',
            'crear-asistencia',
            'editar-asistencia',
            'borrar-asistencia',
            'generar-informes-asistencia',

            //Operacions sobre tabla reportes
            'ver-reporte',
            'crear-reporte',
            'editar-reporte',
            'borrar-reporte',
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
