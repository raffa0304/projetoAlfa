@extends('layouts.main')

@section('title', 'Pessoas cadastradas')


@section('content')
    <div class="col-md-12" id="container">
        <h1 class="title">Pessoas Cadastradas:</h1>
        @foreach($registers as $registers)
            <div class="card col-md-6 divView">
                <p>Nome: <b>{{ $registers->name }}</b></p>
                <table>
                    <tr>
                        <td>
                            <a href="/forms/edit/{{ $registers->id }}" class="btn btn-info">Editar</a>
                            <form action="/{{ $registers->id }}" method="POST" class="formDelete">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn">Apagar</button>
                            </form>
                        </td>
                    </tr>
                </table>                
            </div>
        @endforeach
    </div>
@endsection

