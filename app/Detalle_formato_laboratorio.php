<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_formato_laboratorio extends Model
{
    /**
     * 
     * 
     *@var string
     */
    protected $table = 'detalle_formatos_laboratorio';

    /**
     * 
     * 
     *@var array
     */  
    protected $fillable = [
        'formato_laboratorio_id', 'material_id', 'unidad_medida_id', 'cantidad'
    ];

    public function Material() {
        return $this->belongsTo('App\Material', 'material_id', 'id');
    }
    public function Unidad_medida() {
        return $this->hasMany('App\Unidad_medida', 'material_id', 'id');
    }

}
