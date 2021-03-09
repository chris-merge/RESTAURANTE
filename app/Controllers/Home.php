<?php
 namespace App\Controllers;


class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}
	/*vista de menu*/
	public function Menu()
	{
		echo view('menu');
	}
	/*vista de reservaciones*/
	public function reservaciones()
	{
		echo view('reservaciones');
	}
	

	//--------------------------------------------------------------------

}
