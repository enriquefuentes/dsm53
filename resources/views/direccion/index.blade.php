@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Direcciones</div>

                <div class="card-body">
     <table class="table table-hover table-dark">
  <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">direccion</th>
        <th scope="col">abreviatura</th>
        <th scope="col">estatus</th>
    </tr>
  </thead>
  <tbody>
    @foreach($direcciones as $direccion)
    <tr>
       
        <td>{{ $direccion->id }}</td>
        <td>{{ $direccion->direccion }}</td>
        <td>{{ $direccion->abreviatura }}</td>
        <td>{{ $direccion->estatus }}</td>
        
    </tr>

    
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
