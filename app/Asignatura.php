<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    /**
     * 
     * 
     * @var string
     */
    protected $table = 'asignaturas';

    /**
     * 
     * 
     * @var array
     */
    protected $fillable = [
        
    ];
    public function carreras() {
        return $this->belongsTo('App\Carrera', 'carrera_id', 'id');
    }
    public function grupo_laboratorio() {
        return $this->belongsTo('App\Grupo_laboratorio', 'carrera_id', 'id');
    }
}
