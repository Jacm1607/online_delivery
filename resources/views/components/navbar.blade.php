<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="icono/codigo.svg" width="35" height="35" class="d-inline-block align-top" alt="" loading="lazy">
        Online Delivery
    </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav mr-auto ml-auto text-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">INICIO</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Quienes Somos
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#"> action</a>
      <a class="dropdown-item" href="#"> else </a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Lo que ofrecemos
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="#">opcion de entrega</a>
      <a class="dropdown-item" href="#">oportunidad para tu negocio</a>
      <a class="dropdown-item" href="#">forma de paga</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Billetera Virtual
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="#">Como meter dinero</a>
      <a class="dropdown-item" href="#">Que es una cuenta virtual?</a>
      <a class="dropdown-item" href="#">forma de paga</a>
    </div>
  </li>
    <div class="">
        <a type="button" class="btn btn-outline-light" href="#">Registrate</a>
        <button type="button" class="btn btn-outline-light">Inicia sesion</button>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
         Registro
    </button>

</ul>
</div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4 mb-3 d-flex justify-content-center">
            <div class="card" style="width: 100%; border-radius:25px;">
              <img src="{{asset('img/entraga.jpg')}}" style="border-top-right-radius: 25px; border-top-left-radius: 25px" class="card-img-top" alt="" srcset="">
              <div class="card-body">
              <a href="{{route('form_cliente')}}" class="stretched-link">Cliente</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3 d-flex justify-content-center">
            <div class="card" style="width: 100%; border-radius:25px;">
              <img src="{{asset('img/repartidor.jpg')}}" style="border-top-right-radius: 25px; border-top-left-radius: 25px" class="card-img-top" alt="" srcset="">
              <div class="card-body">
                <a href="#" class="stretched-link">Repartidor</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3 d-flex justify-content-center">
            <div class="card" style="width: 100%; border-radius:25px;">
              <img src="{{asset('img/tienda.png')}}" style="border-top-right-radius: 25px; border-top-left-radius: 25px" class="card-img-top" alt="" srcset="">
              <div class="card-body">
                <a href="#" class="stretched-link">Tienda online</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>