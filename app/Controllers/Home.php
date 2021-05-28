<?php
 namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BL_menu;
use App\Models\BL_User;
use App\Models\BL_Bebida;
use App\Models\Bl_Promociones;
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
		$BL_Promo= new BL_Promociones();
		if($BL_User->Logins($name_user,$pass)>0)
		{
			# code...
		$DATA['menu']=$Bl_menu->Lista_menu();
		$DATA['bebida']=$BL_Bebida->Lis_Bebida();
		$DATA['promociones']=$BL_Promo->List_Promocion();
		return  view('menu', $DATA);
		}
		else
		{
			
			echo view('index');
			echo "<script>alert('SUS DATOS NO SON VALIDOS ')</script>";
		}
	}
}
