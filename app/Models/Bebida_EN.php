<?php 
namespace App\Models;
use CodeIgniter\Model;
public class Bebida_EN extends Model
{
	public int Id_bebida ;
	public string nombre;
	public string tipo;
	public double precio;

	//contructor vacio
	public Bebida_EN()
	{

	}
	//contructor con parametros
	public Bebida_EN(int pId_bebida,string pNombre, string pTipo, double pPrecio){
		Id_bebida= pId_bebida;
		nombre=pNombre;
		tipo=pTipo;
		precio=pPrecio;
	}
}


 ?>