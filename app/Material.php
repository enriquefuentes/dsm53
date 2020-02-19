<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    /**
     * 
     * 
     * @var string
     */
    protected $table = 'materiales';

    /**
     * 
     * 
     *@var array
     */  
    protected $fillable = [
        'unidad_medida_id', 'material', 'abreviatura', 'tipo', 'estatus'
    ];

    public function Detalle_formato_laboratorio() {
        return $this->hasOne('App\Detalle_formato_laboratorio', 'material_id', 'id');
    }

}
