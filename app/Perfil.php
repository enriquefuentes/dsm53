<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    /**
     * 
     * 
     *@var string
     */
    protected $table = 'perfiles';

    /**
     * 
     * 
     *@var array
     */  
    protected $fillable = [
            'perfil', 'estatus'
    ];

    public function usuarios(){
        return $this->belongsTo('App\Usuario', 'perfil_id', 'id');
    }
}
