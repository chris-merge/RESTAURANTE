<?php
namespace App\Models;
use CodeIgniter\Model;
 class UserModel extends Model{
     /*decalaraacion de la primera tabla que es usuario */
     protected $table = 'usuario';
     protected $primaryKEY= 'id_user';
     protected $returnType = 'array';
     protected $allowedFields=['name_user','pass'];
    /*validadcion de reglas   alpha_numeric_space  */
    protected $validationRules= {
        'name_user'=>'require|alpha_space|min_length[6]|max_length[50]',
        'pass'=>'require|valid_password|min_length[6]|max_length[12]'

    };
    protected $skipValidation=false;
 }
?>