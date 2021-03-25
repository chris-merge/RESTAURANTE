<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

  class usuario extends ResourceController
{
    protected $modelName = 'App\Models\Photos';
    protected $format    = 'json';

    public function index()
    {
        return echo "HOLA";
    }

    // ...
}