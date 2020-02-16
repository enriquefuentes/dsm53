<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UsuarioController extends Controller
{






























































public function update($_request, $id){
    $token=Str::random(60);
    $usuario=user::find($id);
    if(null==$usuario){
        return responde()->json([
        'errors'=>['id'=>'recurso no encontrado: ' . $id]
        ], 404);
    }
    $this->setValidator($_request, [
    'email'=>['required', Rule::unique('users')->ignore($usuario->id, 'id')],
    'password'=>'bail|nullablr|min:8',
    'password_confirmation'=>'bail|nullable|required_with:password|same:password|min:8'
    ])->validate();
    if(!empty($request->password)){
        $request->merge([
        'password'=>bcrypt($request->post('password')),
        'api_token'=>hash('sha256', $token)
        ]);
    }
    if($usuario->update($request->except('password_confirmation'))){
        return new UsuarioResource($usuario);
    }
    return response()->json([
    'errors'=>['id'=>'recurso no encontrado' . $id]
    ], 422);
}

public function destroy($id){
    $usuario=user::find($id);
    if(null===$usuario){
        return response()->json([
        'erros'=>['id'=> 'Recurso no encontrado:' .$id]
        ], error404);
    }
    $usuario->delete();
    return response()->json([
    'massage'=>'recurso eliminado: ' .$id],200);
}

}