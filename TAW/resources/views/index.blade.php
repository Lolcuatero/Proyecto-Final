<h1>Pagina Principal</h1>

<form action="/Alumno" method="POST">
  {{csrf_field()}}
<input type="text" name="nombre">Nombre
 <input type="text" name="apellido">Apellido
<input type="submit">
</form>


<table >
  <tr>
    <th>Nombre</th>
    <th>Apellido</th> 
    <th>Perfiles</th>
  </tr>
  @foreach($datos as $dato)
  <tr>
    <td>{{$dato->nombre}}</td>
    <td>{{$dato->apellido}}</td> 
    <td><a href="/Alumno/{{$dato->id}}">Perfil Usuario</a></td>
  </tr>
  @endforeach
</table>
