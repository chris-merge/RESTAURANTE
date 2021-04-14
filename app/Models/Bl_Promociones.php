<?php 
namespace App\Models;
use App\Models\DAL_Acces;
use CodeIgniter\Model;

 class Bl_Promociones extends Model
{
	
public function List_Promocion()
{
$DAL = new DAL_Acces();
return $DAL->Lista_Promociones();
}
//lista por parametro de id

}

 ?>