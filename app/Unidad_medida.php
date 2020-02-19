<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad_medida extends Model
{
    /**
     * 
     * 
     * @var string
     */
    protected $table = 'unidades_medida';

    /**
     * 
     * 
     *@var array
     */  
    protected $fillable = [
        'unidad_medida', 'abreviatura', 'estatus'
    ];

    public function Detalle_formato_laboratorio() {
        return $this->belongsTo('App\Detalle_formato_laboratorio', 'unidad_medida_id', 'id');
    }

}

