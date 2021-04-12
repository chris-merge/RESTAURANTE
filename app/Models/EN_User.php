<?php 
namespace App\Models;
use CodeIgniter\Model;


class EN_User extends Model
{
	private   $id_user;
	private  $firt_name;
	private  $last_name;
	private  $name_user;
	private  $pass;
	/**private
	 contructor vacio
	 */
	public function  EN_User(){

	}
	//constructor con porametro para extraer datos espesificos//
	public function _construct1(string $pName_user, string $pPass){
		$name_user=$pNname_user;
		$pass=$pPass;
	}
	/**
	 contructor con todo el arreglo 
	 */
	 public function _construct2(int $pId, string $pNname_user, string $pPass, string $pFirst_name, string $pLast_name){
	 	$id_user=$pId;
	 	$name_user=$pNname_user;
	 	$pass=$pPass;
	 	$firt_name=$pFirst_name;
	 	$last_name=$pLast_name;
	 }
}
 ?>