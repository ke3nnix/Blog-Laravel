<?php

namespace App\Http\Controllers;

use App\Post;

Class PaginasController extends Controller {

	public function  getInicio()
	{
		$posts = Post::orderBy('id' , 'desc')->take(5)->get();
		return view('paginas.welcome')->withPosts($posts);
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