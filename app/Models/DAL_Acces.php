<?php
namespace App\Models;
use CodeIgniter\Model;
class DAL_Acces extends Model
{
    public function Login($NAME,$PASS)
{
$DB=\Config\Database::connect();
$contructor=$DB->table('usuario');
$contructor->where('name_user',$NAME);
$contructor->where('pass', $PASS);
if($contructor->countAllResults()>0)
{
    return true;
}
else 
{
    return false;
}
}
/* obtener usuarui  por  nombre */
public function Obtener_Usuario($NAME)
{
    $DB= \Config\Database::connect();
    $sql=$DB->query("SELECT * FROM `usuario` WHERE `name_user` LIKE '".$NAME."'");
    $results=$sql->getResult();
    return $results;
}
/*lista de menus  */
public function Lista_Menu(){
	$DB=\Config\Database::connect();
	$sql=$DB->query('SELECT * FROM `menu`');
	$results=$sql->getResult();
	return $results;
}
/*lista de menus  */
/**
aqui vamos a hacer la lista de la tabla bebidas
 */

public function Lista_Bebida(){
    $DB= \Config\Database::connect();
    $sql=$DB->query('SELECT * FROM `bebida`');
    $results=$sql->getResult();
    
    return $results;
}
}

?>
