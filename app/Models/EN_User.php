<?php 
namespace App\Models;
use CodeIgniter\Model;


class EN_User extends Model
{
	public  $id_user= int;
	public  $firt_name=string;
	public  $last_name=string;
	public  $name_user=string;
	public  $pass=string;
	/**
	 contructor vacio
	 */
	public EN_User(){

	}
	//constructor con porametro para extraer datos espesificos
	public EN_User(int $pId, string $pNname_user, string $pPass){
		$id_user= $pId;
		$name_user=$pNname_user;
		$pass=$pPass;
	}
	/**
	 contructor con todo el arreglo 
	 */
	 public EN_User(int $pId, string $pNname_user, string $pPass, string $pFirst_name, string $pLast_name){
	 	$id_user=$pId;
	 	$name_user=$pNname_user;
	 	$pass=$pPass;
	 	$firt_name=$pFirst_name;
	 	$last_name=$pLast_name;
	 }
}
 ?>