@extends('home')
@section('contenido')
<div class="container">
<form action="" method="post" enctype="">
    {{ csrf_field() }}
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Nombre">{{'Nombre'}}</label>
          <input type="text" name="Nombre" class="form-control" id="Nombre" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
          <label for="Apellido">Apellido</label>
          <input type="text" name="Apellido" class="form-control" id="Apellido" placeholder="Apellido">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" value="Aceptar">Sign in</button>
</form>
</div>
@endsection