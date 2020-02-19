<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia_feriado extends Model
{
    /**
     * 
     * 
     * @var string
     */
    protected $table = 'dias_feriados';

    /**
     * 
     * 
     *@var array
     */  
    protected $fillable = [
        'id'
    ];

}
