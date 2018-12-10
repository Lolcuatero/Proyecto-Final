<h1>Editar datos</h1>
<form method="POST" action="/Alumno/{{$datos->id}}">
  {{csrf_field()}}
  {{method_field('PATCH')}}
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" id="nombre" value="{{$datos->nombre}}">
<label for="apellido">Apellido</label>
<input type="text" name="apellido" id="apellido" value="{{$datos->apellido}}">
<input type="submit">
</form>