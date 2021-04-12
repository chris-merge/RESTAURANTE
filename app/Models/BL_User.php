<?php 
namespace App\Models;
use App\Models\DAL_Acces;
use CodeIgniter\Model;
class BL_User extends Model
{
//validar 
public function Logins($NAME,$PASS)
{
	 $DAL= new DAL_Acces();
	return $DAL->Login($NAME,$PASS);
}

}
 ?>