<?php
 namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BL_User;
class Registro_UserNew extends Controller
{
	
	public function RegistroUser()
	{
		return view('RegistroUser');
	}
	
}
?>