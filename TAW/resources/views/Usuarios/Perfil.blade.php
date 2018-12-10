@extends('front') @section('content')
<div class="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="cover-profile">
        <div class="profile-bg-img">
          <img class="profile-bg-img img-fluid" src="{{asset('/default/assets/images/user-profile/bg-img1.jpg')}}" alt="bg-img">
          <div class="card-block user-info">
            <div class="col-md-12">
              <div class="media-left">
                <a href="#" class="profile-image">
                   <img class="user-img img-radius" src="{{Storage::url($datos->foto)}}" alt="user-img" width="100" height="100">
                </a>
              </div>
              <div class="media-body row">
                <div class="col-lg-12">
                  <div class="user-title">
                    <h2>{{$datos->name}}</h2>
                    <span class="text-white">{{$datos->localidad}}</span>
                  </div>
                </div>
                <div>
                  <div class="pull-right cover-btn">
                    <a href="#ventana3" data-toggle="modal" class="btn btn-sm btn-primary waves-effect waves-light f-right"><i class="icofont icofont-edit"></i>Foto</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-header card">
    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Datos</a>
        <div class="slide"></div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#review" role="tab">Comentarios</a>
        <div class="slide"></div>
      </li>
    </ul>
  </div>
  <div class="main-body user-profile">
    <div class="page-wrapper">
      <div class="page-body">
        <!--profile cover end-->
        <div class="row">
          <div class="col-lg-12">
            <!-- tab content start -->
            <div class="tab-content">
              <!-- tab panel personal start -->
              <div class="tab-pane active" id="personal" role="tabpanel">
                <!-- personal card start -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-header-text">Datos Personales</h5>
                    <a href="#ventana1" data-toggle="modal" class="btn btn-sm btn-primary waves-effect waves-light f-right"><i class="icofont icofont-edit"></i></a>
                  </div>
                  <div class="card-block">
                    <div class="view-info">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="general-info">
                            <div class="row">
                              <div class="col-lg-12 col-xl-6">
                                <div class="table-responsive">
                                  <table class="table m-0">
                                    <tbody>
                                      <tr>
                                        <th scope="row">Nombre</th>
                                        <td>{{$datos->name}}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Genero</th>
                                        <td>{{$datos->genero}}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Localidad</th>
                                        <td>{{$datos->localidad}}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <!-- end of table col-lg-6 -->
                              <div class="col-lg-12 col-xl-6">
                                <div class="table-responsive">
                                  <table class="table">
                                    <tbody>
                                      <tr>
                                        <th scope="row">Correo</th>
                                        <td><a href="#!">{{$datos->email}}</a></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Telefono</th>
                                        <td>{{$datos->telefono}}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Twitter</th>
                                        <td>{{$datos->twitter}}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <!-- end of table col-lg-6 -->
                            </div>
                            <!-- end of row -->
                          </div>
                          <!-- end of general info -->
                        </div>
                        <!-- end of col-lg-12 -->
                      </div>
                      <!-- end of row -->
                    </div>
                    <!-- end of view-info -->
                    <!-- end of edit-info -->
                  </div>
                  <!-- end of card-block -->
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-header-text">Descripcion personal</h5>
                         <a href="#ventana2" data-toggle="modal" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                            <i class="icofont icofont-edit"></i>
                                        </a>
                      </div>
                      <div class="card-block user-desc">
                        <div class="view-desc">
                          <p>{{$datos->descripcion}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- personal card end-->
              </div>
              <!-- tab pane personal end -->
              <!-- tab pane info start -->
             
              <!-- tab pane info end -->
              <!-- tab pane contact start -->
              <div class="tab-pane" id="contacts" role="tabpanel">
                <div class="row">
                  <div class="col-xl-3">
                    <!-- user contact card left side start -->
                    <div class="card">
                      <div class="card-header contact-user">
                        <img class="img-radius img-40" src="assets/images/avatar-4.jpg" alt="contact-user">
                        <h5 class="m-l-10">John Doe</h5>
                      </div>
                      <div class="card-block">
                        <ul class="list-group list-contacts">
                          <li class="list-group-item active"><a href="#">All Contacts</a></li>
                          <li class="list-group-item"><a href="#">Recent Contacts</a></li>
                          <li class="list-group-item"><a href="#">Favourite Contacts</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-9">
                    <div class="row">
                      <div class="col-sm-12">
                        <!-- contact data table card start -->
                        <div class="card">
                          <div class="card-header">
                            <h5 class="card-header-text">Contacts</h5>
                          </div>
                          <div class="card-block contact-details">
                            <div class="data_table_main table-responsive dt-responsive">
                              <table id="simpletable" class="table  table-striped table-bordered nowrap">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobileno.</th>
                                    <th>Favourite</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Garrett Winters</td>
                                    <td>abc123@gmail.com</td>
                                    <td>9989988988</td>
                                    <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                    <td class="dropdown">
                                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                      <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobileno.</th>
                                    <th>Favourite</th>
                                    <th>Action</th>
                                  </tr>
                                </tfoot>
                              </table>
                            </div>
                          </div>
                        </div>
                        <!-- contact data table card end -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- tab pane contact end -->
              <div class="tab-pane" id="review" role="tabpanel">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-header-text">Comentarios</h5>
                  </div>
                  @foreach($val as $vals)
                  <div class="card-block">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                              <img class="media-object img-radius comment-img" src="{{Storage::url(App\User::find(App\Evaluaciones::find($vals->user_id)->user_id)->foto)}}" alt="Generic placeholder image">
                          </a>
                        </div>
                        
                        <div class="media-body">
                          <h6 class="media-heading">{{App\User::find(App\Evaluaciones::find($vals->user_id)->user_id)->name}}</h6>
                          <div class="stars-example-css review-star">
                            <label for="">Puntacion:</label>
                          <?php for ($i = 1; $i <= $vals->puntuacion; $i++) {?>
                            
                              <i class="icofont icofont-star"></i>
                            
                          <?php } ?>
                            </div>
                          <p class="m-b-0">Comentario: {{$vals->comentario}}</p>
                          <hr>
                          <!-- Nested media object -->
                        </div>
                        
                          </div>
                    @endforeach
                        </div>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
            <!-- tab content end -->
          </div>
        </div>
      </div>
      <!-- Page-body end -->
    </div>
  </div>
</div>



<div class="modal fade" id="ventana1" align="center">
  <div class="modal-dialog">
    <div class="modal-content">
      <div>
        <div class="modal-header">
          <h4 class="modal-title">Editar Datos</h4>
        </div>
        <div class="modal-body">
          <FORM action="/Usuario/{{$datos->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="form-group">
              <label for="user" style="color:#111;">Nombre:</label>
              <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="{{$datos->name}}">
            </div>

            <div class="form-group">
              <label for="contrasena" style="color:#111;">Genero:</label>
              <input type="radio" name="genero" value="Hombre" checked>Hombre
              <input type="radio" name="genero" value="Mujer">Mujer
            </div>
            
            <div class="form-group">
              <label for="localidad" style="color:#111;">Localidad:</label>
              <input class="form-control" type="text" name="localidad" placeholder="Localidad" id="localidad" value="{{$datos->localidad}}">
            </div>
            
            <div class="form-group">
              <label for="correo" style="color:#111;">Correo:</label>
              <input class="form-control" type="email" name="correo" placeholder="Correo" id="correo" value="{{$datos->email}}">
            </div>
            
            <div class="form-group">
              <label for="twitter" style="color:#111;">Twitter:</label>
              <input class="form-control" type="text" name="twitter" placeholder="twitter" id="twitter" value="{{$datos->twitter}}">
            </div>
            
            <div class="form-group">
              <label for="telefono" style="color:#111;">Telefono:</label>
              <input class="form-control" type="number" name="telefono" placeholder="Correo" id="telefono" value="{{$datos->telefono}}">
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <button type="submit" class="btn">Enviar</button>
              </div>
            </div>
          </FORM>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ventana2" align="center">
  <div class="modal-dialog">
    <div class="modal-content">
      <div>
        <div class="modal-header">
          <h4 class="modal-title">Descripcion personal</h4>
        </div>
        <div class="modal-body">
          <FORM action="/Usuario/{{$datos->id}}" enctype="multipart/form-data" method="POST" >
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="form-group">
              <label for="Descripcion" style="color:#111;">Descripcion:</label>
                <textarea rows="15" cols="50" class="form-control" placeholder="Descripcion" name="descripcion" id="Descripcion" required></textarea>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <input class="btn btn-info form-control inpbtm" type="submit" value="Editar">
              </div>
            </div>
          </FORM>
        </div>
      </div>
    </div>
  </div>
  
</div>
  

  
<div class="modal fade " id="ventana3" align="center">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div>
        <div class="modal-header">
          <h4 class="modal-title">Cambiar foto</h4>
        </div>
        <div class="modal-body">
          <FORM action="/CambiarFoto/{{$datos->id}}" enctype="multipart/form-data" method="POST" >
            <h4>Solo se pueden imagenes PNG</h4>
            {{csrf_field()}}
            
            <div class="col-md-12"> 
                <img class="user-img img-radius" src="{{Storage::url($datos->foto)}}" alt="user-img" width="100" height="100">
            </div>
            <br>
            <div class="form-group"> 
              <input type="file" name="foto" class="form-control" required>
            </div>
            
            <div class="row">
              <div class="form-group col-md-12">
                <input class="btn btn-info form-control inpbtm" type="submit" value="Editar">
              </div>
            </div>
          </FORM>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection