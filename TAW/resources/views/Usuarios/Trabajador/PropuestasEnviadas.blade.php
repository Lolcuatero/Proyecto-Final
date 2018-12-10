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
  </div>
</div>

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h5 class="card-header-text">Propuestas</h5>
    </div>
    
    <div class="card-block accordion-block">
      <div id="accordion" role="tablist" aria-multiselectable="true">
        @foreach($propuestas as $propuesta)
        <div class="accordion-panel">
          <div class="accordion-heading" role="tab" id="headingOne">
              <div class="dropdown-secondary dropdown f-right">
                <span class="f-left m-r-5 text-inverse"><strong class="label label-primary">{{$propuesta->estado}}</strong> </span>
              </div>
              <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#{{$propuesta->id}}" aria-expanded="true" aria-controls="collapseOne">
               {{
                App\Proyectos::find($propuesta->proyecto_id)->nombre
                }}  
              </a>
              
            
          </div>
          <div id="{{$propuesta->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="accordion-content accordion-desc">
              <p>
                {{$propuesta->propuesta}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    
  </div>
</div>
@endsection