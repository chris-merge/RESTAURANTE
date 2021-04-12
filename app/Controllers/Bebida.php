<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BL_menu;
use App\Models\BL_User;
use App\Models\BL_Bebida;

class MENU_CONTROLLER extends Controller
{
	
	public function list_menus(){
		
		$BL_Bebida=  new BL_Bebida();
		$bebida['bebida']=$BL_Bebida->Lis_Bebida();
		return view($bebida);
		
	
	
	}
}


?>