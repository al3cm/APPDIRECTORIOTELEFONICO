<?php 
class UsuarioController extends BaseController
{
	public function actionInsertar()
	{
		return View::make('usuario/insertar');
	}

		public function actionVerPorCodigoUsuario()
	{
		return View::make('usuario/verporcodigousuario');
	}
}




 ?>