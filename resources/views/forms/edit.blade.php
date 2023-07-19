@extends('layouts.main')

@section('title', 'Edição e Visualização')

@section('content')
  <div class="col-md-12" id="container">
        <h1 class="title">Visualize e Edite o cadastro:</h1>
        <div id="create-conteiner" class="col-md-6 offset-md-1">
            <form action="/update/ {{ $register->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ $register->name }}"
                      value="{{ $register->name }}">
                </div>
                <div class="form-group">
                    <label for="email">E-Mail:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="{{ $register->email }}"
                      value="{{ $register->email }}">
                </div>
                <div class="form-group">
                    <label for="contact">Contato:</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="{{ $register->contact }}"
                      value="{{ $register->contact }}">
                </div>
                <input type="submit" class="btn btn-info" value="Editar">
            </form>
        </div>
@endsection