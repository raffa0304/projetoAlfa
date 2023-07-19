@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')
 <div class="col-md-12" id="container">
        <h1 class="title">Realize o seu cadastro:</h1>
        <div id="create-conteiner" class="col-md-6 offset-md-1">
            <form action="/registers" method="POST">
                @csrf
                <div class="form-group">
                    <label for="modelo">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o Nome..">
                </div>
                <div class="form-group">
                    <label for="marca">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o E-Mail..">
                </div>
                <div class="form-group">
                    <label for="versao">Contato:</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Digite o Contato..">
                </div>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </form>
        </div>
    </div>
 
@endsection