<?php 
class UsuarioController extends BaseController
{
	public function actionInsertar()
	{
		if ($_POST) 
		{
			$validator = Validator::make
			(
					[
						'nombre' => Input::get('txtNombre'),
						'apellido' => Input::get('txtApellido'),
						'nombreUsuario' => Input::get('txtNombreUsuario'),
						'contrasenia' => Input::get('txtContrasenia')
					], 
					[
						'nombre' => 'required',
						'apellido' => 'required',
						'nombreUsuario' => 'required|unique:TUsuario',
						'contrasenia' => 'required'
					]
			);

			if($validator->fails())
			{
				if ($validator->messages()->first('nombre')!='') {
					return View::make('usuario/insertar',['mensajeGlobal'=>'Complete el nombre']);
				}

				if ($validator->messages()->first('apellido')!='') {
					return View::make('usuario/insertar',['mensajeGlobal'=>'Complete el apellido']);
				}

				if ($validator->messages()->first('nombreUsuario')!='') {
					return View::make('usuario/insertar',['mensajeGlobal'=>'Falta completar el campo "Nombre usuario" o ya existe dicho usuario']);
				}

				if ($validator->messages()->first('constrasenia')!='') {
					return View::make('usuario/insertar',['mensajeGlobal'=>'Complete la constraseña']);
				}

			}

			if(Input::get('txtContrasenia')!=Input::get('txtConfirmarContrasenia'))
			{
				return View::make('usuario/insertar',['mensajeGlobal' => 'Las contraseñas no coinciden']);
			}


			$tUsuario = new TUsuario;	

			$tUsuario->nombre = Input::get('txtNombre');
		    $tUsuario->apellido = Input::get('txtApellido');
		    $tUsuario->nombreUsuario = Input::get('txtNombreUsuario');
		    $tUsuario->contrasenia = Crypt::encrypt(Input::get('txtContrasenia'));
		    
		    $tUsuario->save();

		    return Redirect::to('usuario/insertar');
		}

		return View::make('usuario/insertar');
	}

	public function actionVerPorCodigoUsuario()
	{
		return View::make('usuario/verporcodigousuario');
	}
}




 ?>