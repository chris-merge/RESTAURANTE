<?php  namespace App\Controllers\APIS;
/* esto es para uar la api rest de coldelgniter 4 */
use CodeIgniter\RESTful\ResourceController;

class usuario extends ResourceController
{
	protected $modelName = 'App\Models\Photos';
    protected $format    = 'json';
    public function index()
	{
	 return  echo "hola";
	}
}
 ?>