<?php
 namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BL_menu;
use App\Models\BL_User;
use App\Models\BL_Bebida;
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
		$BL_User= new BL_User();
		$BL_Bebida=  new BL_Bebida();
		
		if($BL_User->Logins($name_user,$pass)>0)
		{
			# code...
		$menu['menu']=$Bl_menu->Lista_menu();
		$menu['bebida']=$BL_Bebida->Lis_Bebida();


		return  view('menu', $menu);
		}
		else
		{
			
			echo view('index');
			echo "<script>alert('SUS DATOS NO SON VALIDOS ')</script>";
		}
	}
	//metodo listado del menu
	 function list_menus(){
		$BL_Bebida=  new BL_Bebida();
		$bebida['bebida']=$BL_Bebida->Lis_Bebida();
		return $bebida;

	}
}
