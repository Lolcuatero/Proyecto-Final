@extends('front') @section('content')
<div class="page-wrapper">
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-lens bg-c-blue card1-icon"></i>
          <div class="d-inline">
            <h4>Enviar propuesta para proyecto {{$proyecto->nombre}}</h4>
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

  <div class="row">
    <!-- Left column start -->
    <div class="col-lg-12 col-xl-12">
      <!-- Job description card start -->
      <div class="card">
        <div class="card-header">
          <h5>{{$proyecto->nombre}}</h5>
          <span class="text-muted f-14 m-b-10">14 February, 2017</span>
        </div>
        <div class="card-block">
          <h4 class="sub-title">Descripcion</h4>
          <p>{{$proyecto->descripcion}}</p>
          <h4 class="sub-title">Categorias :</h4>
          <p>{{$proyecto->categoria}}</p>
          <h4 class="sub-title">Requerimientos :</h4>
          <ul class="job-details-list">
            <li>Undergraduate Industrial Design/Graphic Design degree and 6-8 years relevant experience or Graduate degree in a related field, plus 4-6 years relevant experience</li>
            <li>Strong skillset in digital design with an emphasis on Windows, mobile (iOS/Android), and web User Interfaces</li>
            <li>Ability to distill complex problems into intuitive, clean, user friendly designs</li>
            <li>Expert in User Experience concepts, Information Architecture, and software brand strategy</li>
            <li>Experience with creating detailed workflow specifications and behaviors for development teams</li>
            <li>Can process and integrate research studies, reports, trends, data, and information into plans, deliverables, and recommendations</li>
          </ul>
          <h4 class="sub-title">Envianos tu propuesta</h4>
          
        </div>
        <div class="card-footer">
          <div class="row">
          
            <div class="col-md-12">
              <form action="/Propuesta/Enviar/{{$proyecto->id}}" method="POST">
              {{csrf_field()}}
                <textarea name="propuesta" id="" cols="30" rows="10" class="form-control"></textarea>
                <button type="submit" class="btn btn-primary waves-effect btn-sm waves-light m-r-10 m-t-10 m-b-10">Enviar Propuesta</button>
          </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Job description card end -->
      <!-- Company profile card end -->
      <!-- Similar Jobs card start -
    </div>
  </div>
</div>
<!-- Page body start -->
</div>
</div>

</div>

@endsection