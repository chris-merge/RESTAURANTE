<?php
 namespace App\Controllers;
 use App\Models\main_model;
 use CodeIngniter\Controller;


class Home extends BaseController
{
	//vista del menu
	public function index()
	{
		return view('index');
	}

	//validadcion
	public function Ingresar()
	{

		$session = \Config\Services::session();
		
		$USER= $_POST['nombre'];
		$PASS=$_POST['pass'];
		$Main_Model= new main_model();
		if($Main_Model->Validar_user($USER,$PASS))
		{
			$session->set('usuario',$USER);
			$datos['usuario']=$Main_Model->DatosUser($USER);
			//$session=(['cookie_lifetime' => 86400,'read_and_close'  => true,]);

			return view('Menu',$datos);
		}
		else
		{
			return view('index');
		}
		//fin del if


	}
	//metodo para cerrar sesion
	public function Salir_Session()
	{
		$session = \Config\Services::session();
		$session->destroy("ci_session");
		echo view('index');
	}
	//fin del metod de cerrar sesionj
	//vista de menu
	public function Menu()
	{
		return view('menu');
	}
	//vista del menu del dia
	public function Menu_Dia()
	{
		session_start();
		return view('menu_dia');
	}
	//fin de vista de menu del dia

	//--------------------------------------------------------------------

}
?>
