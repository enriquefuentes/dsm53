<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
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
            'perfil_id', 'nombre', 'estatus'
    ];
    public function perfiles(){
    return $this->hasOne('App\Perfil', 'perfil_id', 'id');
    }
    public function toArray($request)
    {
            return[
                    'id' => $this->id,
                    'name' => $this->name,
                    'email' => $this->email,
                    'created_at' => $this->created_at,
                    'updated_at' => $this->updated_at,
            ];
    }
}
