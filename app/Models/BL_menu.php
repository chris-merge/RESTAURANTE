<?php 
namespace App\Models;
use App\Models\DAL_Acces;
use App\Models\EN_User;
use CodeIgniter\Model;

class BL_menu extends Model
{
	
public function Lista_menu()
{
	$DAL= new DAL_Acces();
	return $DAL->Lista_Menu();
}
//validar 
public function Logins()
{
	$DAL= new DAL_Acces();
	$pUser= new EN_User();
	return $DAL->Login($pUser->name_user, $pUser->pass);
}
}

 ?>