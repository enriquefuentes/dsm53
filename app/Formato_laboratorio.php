<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formato_laboratorio extends Model
{   
    /**
     * 
     * 
     *@var string
     */
    protected $table = 'formatos_laboratorio';

    /**
     * 
     * 
     *@var array
     */  
    protected $fillable = [
            'grupo_laboratorio_id', 'grupo_laboratorio_id', 'docente_id', 'fecha_formato', 'archivo_formato'
    ];

    public function detalle_formatos_laboratorio(){
        return $this->hasMany('App\Detalle_formato_laboratorio', 'direccion_id', 'id');
    }
}
