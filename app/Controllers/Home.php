<?php
 namespace App\Controllers;


class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}
	public function Menu()
	{
		echo view('menu');
	}

	//--------------------------------------------------------------------

}
