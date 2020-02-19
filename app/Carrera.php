<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    /**
     * 
     * 
     * @var string
     */
    protected $table = 'carreras';

    /**
     * 
     * 
     *@var array
     */  
    protected $fillable = [
        'direccion_id', 'carrera', 'abreviatura', 'estatus'
    ];

    public function direccion() {
        return $this->belongsTo('App\Direccion', 'direccion_id', 'id');
    }

    public function asignaturas() {
        return $this->hasMany('App\Asignatura', 'carrera_id', 'id');
    }

}
