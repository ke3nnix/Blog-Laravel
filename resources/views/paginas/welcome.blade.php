@extends('main')

@section('titulo', 'Inicio')

@section('contenido')

        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1>Bienvenidos a mi blog!</h1>
                  <p class="lead">Soy Kenny, gracias por visitarme! Este es mi primera web construída con Laravel.</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Entrada popular</a></p>
                </div>
            </div>
        </div> <!-- FIN DE FILA -->

        <div class="row">
            <div class="col-md-8">
                
                @foreach($posts as $post)
                
                    <div class="post">
                        <h3>{{ $post->titulo }}</h3>
                        <p>{{ substr($post->cuerpo, 0, 350) . "..." }}</p><a href="{{url('blog',$post->slug)}}" class="btn btn-primary">Leer más</a>
                    </div>

                @endforeach

            </div>
            <div class="col-md-3 col-md-offset-1">

            <h2>Sidebar</h2>
                
            </div>
        </div>

@endsection