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
                
                <div class="post">
                    <h3>Título de la entrada</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede...</p><a href="#" class="btn btn-primary">Leer más</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Título de la entrada</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede...</p><a href="#" class="btn btn-primary">Leer más</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Título de la entrada</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede...</p><a href="#" class="btn btn-primary">Leer más</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Título de la entrada</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede...</p><a href="#" class="btn btn-primary">Leer más</a>
                </div>

            </div>
            <div class="col-md-3 col-md-offset-1">

            <h2>Sidebar</h2>
                
            </div>
        </div>

@endsection