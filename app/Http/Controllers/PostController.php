<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validando la data
        $this->validate($request , array(
                'titulo' => 'required|max:255',
                'cuerpo' => 'required'            
            ));

        // Almacenamos los datos
        $post = new Post;
        $post->titulo = $request->titulo;
        $post->cuerpo = $request->cuerpo;

        $post->save();

        Session::flash('exito' , 'La entrada fue exitosamente guardada!');


        // Redireccionamos a otra vista
        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validar la data
        $this->validate($request , array(
                'titulo' => 'required|max:255',
                'cuerpo' => 'required'            
            ));
        // guardar la informaçión en la BD
        $post = Post::find($id);
        $post->titulo = $request->input('titulo');
        $post->cuerpo = $request->input('cuerpo');
        $post->save();
        // setear el mensaje FLASH de exito
        Session::flash('exito', 'Esta entrada fue exitósamente actualizada.');
        // redirigir con data hacia posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //ubicar el objeto
        $post = Post::find($id);
        $post->delete();
        //setear el mensaje FLASH de exito
        Session::flash('exito', 'La entrada fue exitósamente eliminada.');
        // redirigir hacia posts.index
        return  redirect()->route('posts.index');
    }
}
