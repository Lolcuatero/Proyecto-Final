@extends('front') @section('content')
<div class="page-wrapper">
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-lens bg-c-blue card1-icon"></i>
          <div class="d-inline">
            <h4>{{$titulo}}</h4>
            <span>{{$proyecto->nombre}}</span>
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
</div>

@foreach($tareas as $tarea)
<div class="card">
  <div class="card-header">
    <div class="media">
      <div class="media-body media-middle">
        <div class="company-name">
          <p>Titulo: {{$tarea->nombre}}</p>
          <span class="text-muted f-14">Fecha: {{$tarea->fecha}}</span>
        </div>
        <div class="job-badge">
          <label class="label bg-primary"> {{$tarea->prioridad}}</label>
        </div>
      </div>
    </div>
  </div>
  <div class="card-block">
    <label for="">Descripcion</label>
    <p class="text-muted">{{$tarea->descripcion}}</p>
    <div class="job-lable">
      <label class="label badge-primary">Estado: {{$tarea->estado}}</label>
    </div>
    <div class="job-meta-data"><i class="icofont icofont-safety"></i>{{$tarea->categoria}}</div>
  </div>
</div>
@endforeach


<div class="modal fade" id="ventana1" align="center">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div>
        <div class="modal-header">
          <h4 class="modal-title"><b>Creacion de tarea</b></h4>
        </div>
        <div class="modal-body">
          <FORM action="/Tarea/{{$proyecto->id}}" method="POST">
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user2" style="color:#111;"><b>Nombre de la tarea:</b></label>
                  <input class="form-control" type="text" name="nombre" placeholder="Nombre" id="user2">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user" style="color:#111;"><b>Fecha entrega:</b></label>
                  <input class="form-control" type="date" name="fecha" placeholder="Fecha" id="user">
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
                  <label for="presupuesto" style="color:#111;"><b>Prioridad:</b> </label>
                  <select name="prioridad" id="" class="form-control">
                    <option value="Normal">Normal</option>
                    <option value="Necesaria">Necesaria</option>
                    <option value="Muy importante">Muy importante</option>
                    <option value="Urgente">Urgente</option>
                  </select>
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
                <center>
                  <button type="submit" class="btn btn-primary btn-lg btn-block"><b>Crear Tarea</b> </button>
                </center>
              </div>
            </div>
          </FORM>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ventana2" align="center">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div>
        <div class="modal-header">
          <h4 class="modal-title"><b>Proceso de finalizacion</b></h4>
        </div>
        <div class="modal-body">
          <FORM action="/Finalizar/Proyecto/{{$proyecto->id}}" method="POST">
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="Descripcion" style="color:#111;"><b>Comentario para el usuario:</b> </label>
                  <textarea rows="15" cols="50" class="form-control" placeholder="Comentario" name="comentario" id="Descripcion"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4>Evaluacion del usuario</h4>
                <span>Siendo 5 un trabajo excelente y nada un trabajo malo</span>
                <div class="col-md-offset-2">
                  <div class="stars stars-example-fontawesome">
                    <select id="example-fontawesome" name="evaluacion" autocomplete="off">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                  </select>
                  </div>
                </div>
              </div>
            </div>

  <div class="row">
    <div class="form-group col-md-12">
      <center>
        <button type="submit" class="btn btn-primary btn-lg btn-block"><b>Crear Tarea</b> </button>
      </center>
    </div>
  </div>
  </FORM>
</div>
</div>
</div>
</div>
</div>

@endsection