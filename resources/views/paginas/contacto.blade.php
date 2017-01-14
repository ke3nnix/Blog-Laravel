@extends('main')

@section('titulo', 'Contacto')

@section('contenido')
        <div class="row">
            <div class="col-md-12">
                <h1>Contáctame</h1>
                <hr>

                <form>
                  <div class="form-group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                  </div>

                  <div class="form-group">
                    <label name="asunto">Asunto:</label>
                    <input id="asunto" name="asunto" class="form-control">
                  </div>

                  <div class="form-group">
                    <label name="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" class="form-control">Ingresa tu mensaje aquí...</textarea>
                  </div>

                  <input type="submit" value="Enviar mensaje" class="btn btn-success">
                </form>


            </div>
        </div>
@endsection