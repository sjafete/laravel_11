@extends('layouts.app')

@section('styles')
    <style>
        .cardbox_form, h1 {
            margin: 10px;
            padding: 5px;
        }
        .cardbox_form input {
            margin-bottom: 10px;
            width: 50%;
        }
    </style>
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="card">
        <h1>Cadastrar</h1>
        <h1>Formulario de Cadastro de Colaboradores</h1>

        <form action="#" method="POST">
            <div class="cardbox_form">
                <label for="nome">Nome:</label>
                <br>
                <input type="text" name="nome" id="nome">
                <br>
                <label for="email">E-mail:</label>
                <br>
                <input type="email" name="email" id="email">
                <br>
                <label for="telefone">Telefone:</label>
                <br>
                <input type="text" name="nome" id="nome">
                <br>
                <label for="endereco">Endereço:</label>
                <br>
                <input type="text" name="endereco" id="endereco">
                <br>
                <label for="cargo">Cargo:</label>
                <br>
                <input type="text" name="cargo" id="cargo">
                <br>
                <label for="municipio">Municipio:</label>
                <br>
                <input type="text" name="municipio" id="municipio">
                <br>
                <label for="numero">Numero:</label>
                <br>
                <input type="text" name="numero" id="numero"><br>
                <br>
                <input type="submit" value="Enviar">
                <br>
            </div>
    </div>
    </form>
@endsection
