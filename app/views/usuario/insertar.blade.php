@extends('layout')
@section('cuerpo')
	<form action="/APPDIRECTORIOTELEFONICO/public/usuario/insertar" method="post">
		<label for="txtNombre">Nombre</label>
		<br>
		<input type="text" name="txtNombre" id="txtNombre" size="50">
		<br>
		<label for="txtApellido">Apellido</label>
		<br>
		<input type="text" name="txtApellido" id="txtApellido" size="50">
		<br>
		<label for="txtNombreUsuario">Nombre de Usuario</label>
		<br>
		<input type="text" name="txtNombreUsuario" id="txtNombreUsuario" size="50">
		<br>
		<label for="txtContrasenia">Contraseña</label>
		<br>
		<input type="password" name="txtContrasenia" id="txtContrasenia" size="50">
		<br>
		<label for="txtConfirmarConstrasenia">Confirmar contraseña</label>
		<br>
		<input type="password" name="txtConfirmarConstrasenia" id="txtConfirmarConstrasenia" size="50">
		<br>
		<br>
		<input type="submit" value="Registrar usuario">

	</form>
@stop