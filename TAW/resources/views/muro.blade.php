@extends('front') @section('content')
<div class="page-wrapper">
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-lens bg-c-blue card1-icon"></i>
          <div class="d-inline">
            <h4>Muro</h4>
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
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="row">
  @foreach($proyectos as $proyecto)
  <div class="col-sm-6">
    <div class="card card-border-default">
      <div class="card-header">
        <h4 class="card-title">{{$proyecto->nombre}}</h4>
        <span class="label label-default f-right">{{$proyecto->created_at}} </span>
      </div>
      <div class="card-block">
        <div class="row">
          <div class="col-md-12">
            <h5>Descripcion</h5>
            <p class="task-detail">{{$proyecto->descripcion}}</p>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                <h5>Presupuesto</h5>
                <p class="task-detail">${{$proyecto->presupuesto}}</p>
                </div>
                <div class="col-md-6">
                  <h5>Categoria</h5>
                  <p class="task-detail">{{$proyecto->categoria}}</p>
                </div>
              </div>
            </div>
            
            <p class="task-due"><strong> Tiempo Estimado : </strong><strong class="label label-danger">{{$proyecto->tiempoEstimado}}</strong></p>
          </div>
          <!-- end of col-sm-8 -->
        </div>
        <!-- end of row -->
        
      </div>
      <a class="btn btn-success"  href="/Propuesta/{{$proyecto->id}}">Enviar Propuesta</a>
      
          <!-- end of seconadary -->
        </div>
        <!-- end of pull-right class -->
      </div>
  @endforeach
    </div>

@endsection