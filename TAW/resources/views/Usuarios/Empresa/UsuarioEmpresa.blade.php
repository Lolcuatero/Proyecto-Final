@extends('front') @section('content')
<div class="page-wrapper">
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont icofont-users-alt-3 bg-c-blue card1-icon"></i>
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
        <div>
          <a href="#ventana1" data-toggle="modal" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                            <i class="icofont icofont-edit"></i>
                                        Crear proyecto</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6">
        <div class="card widget-card-1">
          <div class="card-block-small">
            <a href="/UsuarioTrabajador/Activos">
            <i class="icofont icofont icofont-presentation-alt  bg-c-blue card1-icon"></i>
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
            <a href="/UsuarioTrabajador/Finalizados">
            <i class="icofont icofont icofont-page bg-c-blue card1-icon"></i>
            <span class="text-c-blue f-w-600">Proyectos Finalizados</span>
            <h4>{{$estados['finalizados']}}</h4>
            <div>
              
              
            </div>
              </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="col-md-offset-2">
          <div class="card widget-card-1">
          <div class="card-block-small">
            <a href="/UsuarioTrabajador/Guardados">
            <i class="icofont icofont icofont-link bg-c-blue card1-icon"></i>
            <span class="text-c-blue f-w-600">Proyectos guardados</span>
            <h4>{{$estados['espera']}}</h4>
            <div>
              
            </div>
              </a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ventana1" align="center">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div>
        <div class="modal-header">
          <h4 class="modal-title"><b>Creacion de proyecto</b></h4>
        </div>
        <div class="modal-body">
          <FORM action="/Proyectos" method="POST">
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user2" style="color:#111;"><b>Nombre:</b></label>
                  <input class="form-control" type="text" name="nombre" placeholder="Nombre" id="user2" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user" style="color:#111;"><b>Tiempo estimado:</b></label>
                  <input class="form-control" type="date" name="estimado" placeholder="" id="user" required>
                </div>
              </div>
            </div>            
            <div class="form-group">
              <label for="Descripcion" style="color:#111;"><b>Descripcion:</b> </label>
                <textarea rows="15" cols="50" class="form-control" placeholder="Descripcion" name="descripcion" id="Descripcion" required></textarea>
            </div>
            
             <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="presupuesto" style="color:#111;"><b>Presupuesto:</b> </label>
                  <input class="form-control" type="number" name="presupuesto" placeholder="Presupuesto" id="presupuesto" required >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="categoria" style="color:#111;"><b>Categoria:</b> </label>
                  <input class="form-control" type="text" name="categoria" placeholder="Categoria" id="categoria" required>
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