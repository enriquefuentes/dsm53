<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class EmpleadosModel1 extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_empleado';
    protected $id_producto;
    protected $nombre;
    protected $app;
    protected $apm;
    protected $fn;
}
