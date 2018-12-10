@extends('front') @section('content')
<div class="page-wrapper">
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-lens bg-c-blue card1-icon"></i>
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
    <br>
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
  </div>
</div>

<div class="page-body invoice-list-page">
  
      <div class="row">
        @foreach($proyectos as $proyecto)
        <div class="col-sm-6">
          <div class="card card-border-primary">
            <div class="card-header">
              <h5>{{$proyecto->nombre}}</h5>
              <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
              <div class="dropdown-secondary dropdown f-right">
                <span class="f-left m-r-5 text-inverse">Estado : <strong class="label label-primary">{{$proyecto->estado}}</strong> </span>
              </div>
            </div>
            <div class="card-block">
              <div class="row">
                
                <div class="col-md-12">
                  <span><b>Descripcion</b></span>
                  <p>{{$proyecto->descripcion}}</p>
                </div>
                <div class="col-sm-6">
                  <span><b>Tiempo Estimado : {{$proyecto->tiempoEstimado}}</b></span>
                </div>
                 <div class="col-sm-6">
                  <span><b>Presupuesto : {{$proyecto->presupuesto}}</b></span>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="task-list-table">
                
                <p class="task-due"><a href="/Interezados/{{$proyecto->id}}"><b> Encargado :</b></a> <strong class="label label-success">
                  {{
                    App\User::find($proyecto->encargado)->name
                  }}
                  </strong></p>
              </div>
              <!-- end of pull-right class -->
            </div>
            <!-- end of card-footer -->
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>



@endsection