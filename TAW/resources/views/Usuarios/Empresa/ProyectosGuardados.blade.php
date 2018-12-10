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
      <!-- Search Box card start -->
      
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
                
                <p class="task-due"><a href="/Interezados/{{$proyecto->id}}"><b> Interezados :</b></a> <strong class="label label-success">
                  {{
                    App\Propuestas::all()->where('proyecto_id',$proyecto->id)->count()
                  }}
                  </strong></p>
              </div>
              <div class="task-board m-0">
                <form action="/Proyectos/{{$proyecto->id}}" method="POST">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <button type="submit" class="btn btn-danger btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i> Borrar Proyecto</button>
                 </form>
                <!-- end of dropdown-secondary -->
                <!-- end of seconadary -->
              </div>
              <!-- end of pull-right class -->
            </div>
            <!-- end of card-footer -->
          </div>
        </div>
        @endforeach
      </div>


<div class="modal fade" id="ventana1" align="center">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div>
        <div class="modal-header">
          <h4 class="modal-title"><b>Creacion de proyecto</b></h4>
        </div>
        <div class="modal-body">
          <FORM action="/GuardarProyecto/" method="POST">
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user2" style="color:#111;"><b>Nombre:</b></label>
                  <input class="form-control" type="text" name="nombre" placeholder="Nombre" id="user2">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user" style="color:#111;"><b>Localidad:</b></label>
                  <input class="form-control" type="text" name="localidad" placeholder="Localidad" id="user">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="Descripcion" style="color:#111;"><b>Descripcion:</b> </label>
              <textarea rows="15" cols="50" class="form-control" placeholder="Descripcion" name="descripcion" id="Descripcion"></textarea>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="presupuesto" style="color:#111;"><b>Presupuesto:</b> </label>
                  <input class="form-control" type="number" name="presupuesto" placeholder="Presupuesto" id="presupuesto">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="categoria" style="color:#111;"><b>Categoria:</b> </label>
                  <input class="form-control" type="text" name="categoria" placeholder="Categoria" id="categoria">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-lg btn-block"><b>Crear Proyecto</b> </button>
              </div>
            </div>
          </FORM>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection