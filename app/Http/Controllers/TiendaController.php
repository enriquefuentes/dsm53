<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\EmpleadoModel1;
use App\ProductoModel1;

class TiendaController extends Controller{
	public function datos (){
		$model1=TiendaModel::all();
		$model2=EmpleadoModel::all();
		//$model3=ProductosModel::all();
		$model3=BD::table('tb_producto')->get();

		$query1=\BD::table('tb_empleados')->select(
			'tb_empleados.nombre','tb_empleados.app','tb_empleados.apm',
			'tb_empleados.fn','tb_empleados.clave','tb_tienda.nombre as tienda')
		->join('tb_tienda','tb_tienda.id_tienda','=','tb_empleados.id_tienda')
			//->where('tb_empleados.id_tienda','1')
			->get();
		$query2=DB::select('SELECT ti.nombre AS tienda, em.clave, CONCAT(em.app, " ", em.apm,", ", em.nombre) AS empleado, em.fn
		From tb_empleados AS em, id_tiendad=ti.id_tienda');

		return view("contenido/otro00")
			->with(['model1'=>$model1])
			->with(['model2'=>$model2])	
			->with(['query1'=>$query1])
			->with(['query2'=>$query2]);


	}
}
?>