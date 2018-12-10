<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
//Ruta para el login
Auth::routes();
//Rutas para dezplasarce por el sitio web
  //Rutas empresa
  Route::get('/UsuarioEmpresa', 'Usuarios@UsuarioEmpresa');
  //Ruta para guardar proyecto
  Route::get('/UsuarioTrabajador/Guardados','Usuarios@ProyectosGuardaros');
  //Ruta para los proyectos activos
  Route::get('/UsuarioTrabajador/Activos','Usuarios@ProyectosActivos');
  //Ruta para ver los proyectos finalizados
  Route::get('/UsuarioTrabajador/Finalizados','Usuarios@ProyectosFinalizados');
  //Ruta para mostrar los interezados
  Route::get('/Interezados/{id}','Proyecto@interezados');
  //Ruta para aceptar a un usuario a un proyecto
  Route::get('/AceptarPropuesta/{id}/{idPropuesta}','Usuarios@AceptarPropuesta');
  //Ruta para ver las actividades realizadas y a realizar en el proyecto
  Route::get('/ActividadesProyecto/{id}', 'Proyecto@Actividades');
  //Ruta para crear tareas del proyecto
  Route::post('/Tarea/{id}','Proyecto@Tarea');
  //Ruta para finalizar una tarea
  Route::get('/Finalizar/Tarea/{id}','Proyecto@FinalizarTarea');
  //Ruta para finalizar un proyecto
  Route::post('/Finalizar/Proyecto/{id}','Proyecto@FinalizarProyecto');

  //Rutas trabajadores
  Route::get('/UsuarioTrabajador', 'UsuarioTrabajador@inicio');
  //Ruta para ver las solicitudes enviadas
  Route::get('/PropuestasEnviadas','UsuarioTrabajador@Enviadas');
  //Ruta para mostrar los proyectos en donde eres el encargado y han sido finalizados
  Route::get('/ProyectosActivos','UsuarioTrabajador@ProyectosActivos');
  //Ruta para mostrar los proyectos finalizados por ti
  Route::get('/ProyectosFinalizados','UsuarioTrabajador@Finalizados');
  //Routa para ver las tareas de los proyectos 
  Route::get('/ActividadesProyectoTrabajador/{id}','UsuarioTrabajador@Tareas');
  //Rutas para ambos tipos de trabajador
  Route::get('/Perfil', 'Usuarios@Perfil');
  //Ruta para cambiar foto de perfil
  Route::post('/CambiarFoto/{id}','Usuarios@CambiarFoto');
  //Ruta para ver perfil de usuario
  Route::get('/Interezados/PerfilUsuario/{id}','Usuarios@UsuarioPerfil');
  
  Route::get('/Propuesta/{id}', 'HomeController@propuesta');
  Route::post('/Propuesta/Enviar/{id}','HomeController@enviarPropuesta');
  Route::get('/Muro','HomeController@Muro');
  Route::get('/home', 'HomeController@index')->name('home');
//

//Rutas para acciones de proyectos
Route::resource('Proyectos','Proyecto');
//Guardar Proyecto



//Ruta para acciones del usuario
Route::resource('Usuario','Usuarios');

//[GET-HEAD]-Index    */Alumno  //Indice **
//[POST]-store        */Alumno  //Alamacenar los datos**
//[GET-HEAD]-create   */Alumno/create //Vista para almacenar los datos**
//[GET-HEAD]-show     */Alumno/{id}   //Mostrar un dato en espesifico**
//[DELTE]-destroy     */Alumno/{id}   //Destruir un dato **
//[PUT-PATCH]-update  */Alumno/{id}   //Editar un registro
//[GET-HEAD]-edit     */Alumno/{id}/edit  //Vista para la obtencion de los datos a editar
//Route::resource('Alumno','AlumController');

//Route::patch('/Materia/{id}','Usuarios@Terminada');
//Route::post('/Materia/{id}','Usuarios@store');

