@extends('home')
@section('contenido')
<div class="container">
<form action="{{route('save_cliente')}}" method="post" enctype=""  class="">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Nombre">Nombre</label>
          <input type="text" name="Nombre" class="form-control" id="nombre" required autofocus>
        </div>
        <div class="form-group col-md-6">
          <label for="Apellido">Apellido</label>
          <input type="text" name="Apellido" class="form-control" id="Apellido" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Direccion">Direccion</label>
          <input type="text" name="Direccion" class="form-control" id="Direccion" required>
        </div>
        <div class="form-group col-md-6">
          <label for="Ubicacion">Ubicacion</label>
          <input type="text" name="Ubicacion" class="form-control" id="Ubicacion" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Celular">Celular</label>
          <input type="text" name="Celular" class="form-control" id="Celular" required autofocus>
        </div>
        <div class="form-group col-md-6">
          <label for="Celular2">Celular de Referencia</label>
          <input type="text" name="Celular2" class="form-control" id="Celular2" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
        <label for="Correo">Correo</label>
          <input type="email" name="Correo" class="form-control" id="Correo" placeholder="Email" required autofocus>
        </div>
        <div class="form-group col-md-6">
          <label for="Contraseña">Contraseña</label>
          <input type="password" name="Contraseña" class="form-control" id="Contraseña" placeholder="Contraseña" required>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Acepto los terminos
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" value="Aceptar">Reg</button>
</form>
</div>
@endsection