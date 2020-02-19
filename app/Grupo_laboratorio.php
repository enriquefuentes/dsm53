<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo_laboratorio extends Model
{   
    /**
     * 
     * 
     *@var string
     */
    protected $table = 'grupos_laboratorios';

    /**
     * 
     * 
     *@var array
     */  
    protected $fillable = [
            'cuatrimestre_id', 'direccion_id', 'carrera_id', 'asignatura_id ', 'docente_id ', 'dias_asignandos', 'lunes_inicio', 'lunes_fin', 'martes_inicio',  'martes_fin ', 'miercoles_inicio ', 'miercoles_fin', 'jueves_inicio', 'jueves_fin', 'viernes_inicio', 'viernes_fin', 'sabado_inicio', 'sabado_fin', 'estatus'
    ];

    public function asignaturas(){
        return $this->hasMany('App\Asignaturas', 'asignatura_id', 'id');
    }
}

