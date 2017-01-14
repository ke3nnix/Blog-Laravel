<?php

namespace App\Http\Controllers;

Class PaginasController extends Controller {

	public function  getInicio()
	{
		return view('paginas.welcome');
	}

	public function getAcercaDe()
	{

		return view('paginas/acerca-de');
	}

	public function getContacto()
	{
		$full = "Kenny" . " " . "Horna";
		return view('paginas/contacto')->with("nomCompleto", $full);
	}

}