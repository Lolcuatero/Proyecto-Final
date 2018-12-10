@extends('front') @section('content')
<div class="page-wrapper">
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-lens bg-c-blue card1-icon"></i>
          <div class="d-inline">
            <h4>Inicio</h4>
            <span>PAGINA PARA LA REALIZACION DE PROYECTOS</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="page-header-breadcrumb">
          <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
              <a href="/Alumnos/1">
                <i class="icofont icofont-home"></i>
              </a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row simple-cards users-card">
  @foreach($usuarios as $usuario)
  <div class="col-md-12 col-xl-4">
    <div class="card user-card">
      <div class="card-header-img">
        <img class="img-fluid img-radius" src="{{Storage::url($usuario->foto)}}" alt="card-img">
        <h4>{{$usuario->name}}</h4>
        <h5>{{$usuario->email}}</h5>
        <h6>{{$usuario->localidad}}</h6>
      </div>

      <p>{{$usuario->descripcion}}</p>
      <div>
        <a href="/Interezados/PerfilUsuario/{{$usuario->id}}" class="btn btn-success waves-effect waves-light"><i class="icofont icofont-user m-r-5"></i>Ver Perfil</a>
      </div>
    </div>
  </div>
  @endforeach
  
</div>

@endsection