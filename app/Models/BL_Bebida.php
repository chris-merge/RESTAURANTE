<?php 
namespace App\Models;
use App\Models\DAL_Acces;
use CodeIgniter\Model;

/**
 * 
 */
class BL_Bebida extends Model
{
	
	public function Lis_Bebida()
	{
	  $DAL= new DAL_Acces();
	  return $DAL->Lista_Bebida();
	}
}

 ?>