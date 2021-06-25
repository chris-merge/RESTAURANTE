<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BL_menu;
use App\Models\BL_User;
use App\Models\BL_Bebida;

class Reservaciones extends Controller
{
	
	public function Reservacion(){
		
	}


	//lista del menu a mostrar
	public function Lista_Menu_Reservar()
	{
		$Bl_menu = new Bl_menu();
		$DATA['menu']=$Bl_menu->Lista_menu();
		return view('Reservacion',$DATA);
	}
	//
}


?>