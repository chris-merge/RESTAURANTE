<?php 
namespace App\Models;
use App\Models\DAL_Acces;
use CodeIgniter\Model;
class BL_menu extends Model
{
  
public function Lista_menu()
{
	$DAL= new DAL_Acces();
	return $DAL->Lista_Menu();
}

public function Lista_Menu_Id($id)
{
	$DAL= NEW DAL_Acces();
	return $DAL->List_id_Menu($id);
}
}

 ?>