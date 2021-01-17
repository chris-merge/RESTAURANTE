<?php 
namespace App\Models;
use CodeIgniter\Model;
	class main_model extends Model
	{
		//lista de usurios
		public function Validar_user($USER,$PASS)
		{
		$BD= \Config\Database::connect();
		$conexion= db_connect();
		$sql=$conexion->table('usuario');
		$sql->where('name',$USER);
		$sql->where('pass',$PASS);
		if ($sql->countAllResults()>0) {
			# code...
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		//FIN DEL IF 
		}
		//metodo de obtener datos del usuario
		public function DatosUser($USER)
		{
			$base= \Config\Database::connect();
			$sql=$base->query("SELECT * FROM `usuario` WHERE `name` LIKE '".$USER."'");
			$results=$sql->getResult();
			return $results;
		}
//fin de obenter datos

	}


 ?>