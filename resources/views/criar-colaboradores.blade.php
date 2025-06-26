@extends('layouts.app')

@section('content')
    <h1>Cadastrar</h1>
    <h1>Formulario de Cadastro de Colaboradores</h1>

    <form action="#" method="POST">
<div class="card-box">
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
    </form>
@endsection
