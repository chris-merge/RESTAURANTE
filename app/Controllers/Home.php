<?php
 namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BL_menu;

class Home extends Controller
{
	
	public function index()
	{
		return view('index');
	}
	/*vista de reservaciones*/
	public function reservaciones()
	{
		echo view('reservaciones');
	}
	/* aqui se va comenzar el backend*/
	/* validadcion del login */
	public function Validadcion()
	{
		$session =\Config\Services::session();
		$name_user=$_POST['NAME'];
		$pass=$_POST['PASS'];
		$Bl_menu = new Bl_menu();
		if($Bl_menu->Logins($name_user,$pass)>0)
		{
			# code...
		$menu['menu']=$Bl_menu->Lista_menu();
		return  view('menu',$menu);
		}
		else
		{
			
			echo view('index');
			echo "<script>alert('SUS DATOS NO SON VALIDOS ')</script>";
		}
	}
	//metodo listado del menu

}
