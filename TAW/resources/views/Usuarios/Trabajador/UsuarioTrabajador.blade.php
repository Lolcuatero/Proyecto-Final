@extends('front') @section('content')
<div class="page-wrapper">
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont icofont-user-male bg-c-blue card1-icon"></i>
          <div class="d-inline">
            <h4>{{$titulo}}</h4>
            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
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
            <li class="breadcrumb-item"><a href="/Alumnos/Avance">Avances</a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6">
        <div class="card widget-card-1">
          <div class="card-block-small">
            <a href="/ProyectosActivos">
            <i class="icofont icofont-presentation-alt bg-c-blue card1-icon"></i>
            <span class="text-c-blue f-w-600">Proyectos en Marcha</span>
            <h4>{{$estados['activos']}}</h4>
            <div>
              
              
            </div>
              </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card widget-card-1">
          <div class="card-block-small">
            <a href="/ProyectosFinalizados">
            <i class="icofont icofont-page bg-c-blue card1-icon"></i>
            <span class="text-c-blue f-w-600">Proyectos Finalizados</span>
            <h4>{{$estados['finalizados']}}</h4>
            <div>
              
            </div>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6">
        <div class="card widget-card-1">
          <a href="/PropuestasEnviadas">
          <div class="card-block-small">
            <i class="icofont icofont-link bg-c-blue card1-icon"></i>
            <span class="text-c-blue f-w-600">Propuestas enviadas</span>
            <h4>{{$propuestas}}</h4>
            <div>
              
              
            </div>
          </div>
            </a>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection