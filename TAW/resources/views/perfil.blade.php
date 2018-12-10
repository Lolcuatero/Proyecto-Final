<h1>Perfil Usuario</h1>

<h3>Nombre del alumno : {{$datos->nombre}}</h3>
<h3>Apellido del alumno: {{$datos->apellido}}</h3>

<a href="/Alumno/{{$datos->id}}/edit">Editar</a>
<form action="/Alumno/{{$datos->id}}" method="POST">
  {{csrf_field()}}
  {{method_field('DELETE')}}
<input type="submit" value="Borrar">
</form>
<a href="/Alumno">Incio</a>

<br>

<h1>Materias</h1>
  @foreach($materias as $materia)
  <div>
    <form action="/Materia/{{$materia->id}}" method="POST">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <label for="terminada" ></label>
      <input type="checkbox" name="terminada" OnChange="this.form.submit()" <?php if($materia->terminada== "1"){ echo  "checked"; }else{echo "";}?> >
      {{$materia->nombre}}
    </form>
      
  </div>
  @endforeach
<br>
<h2>Agregar Materia</h2>
<form action="/Materia/{{$datos->id}}" method="POST">
  {{csrf_field()}}
  <label for="nombre">Nombre</label><br>
  <input type="text" name="nombre" id="nombre"><br>
  <label for="maestro">Maestro</label><br>
  <input type="text" name="maestro" id="maestro"><br><br>
<input type="submit" value="Agregar">
</form>