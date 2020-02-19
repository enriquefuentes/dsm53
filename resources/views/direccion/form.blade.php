@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear direccion</div>

                <div class="card-body">
        @if ($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
    <form action="{{ url('direcciones') }}" method="post">
        @csrf
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" class="form-control" name ="direccion" id="direccion" aria-describedby="direccionHelp">
    <small id="direccionHelp" class="form-text text-muted">Escribe el nombre de la direccion</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

  <div class="form-group">
    <label for="direccion"><br>Abreviatura</label>
    <input type="text" class="form-control" name ="abreviatura" id="abreviatura" aria-describedby="abreviaturaHelp">
    <small id="abreviaturaHelp" class="form-text text-muted">Escribe la abreviatura</small>
  </div>
  <div class="form-group">
  <label for="estatus">Estatus</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estatus" id="estatus" value="Activo">
                <label class="form-check-label" for="estatus">Activo</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estatus" id="estatus2" value="Inactivo">
                <label class="form-check-label" for="estatus2">Inactivo</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

