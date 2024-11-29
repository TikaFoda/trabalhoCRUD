<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
</head>
<body>
    <h1>Editar Pessoa</h1>

    <form action="{{ route('pessoas.update', $pessoa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $pessoa->nome }}" required>
        <br>

        <label for="fone">Telefone:</label>
        <input type="text" id="fone" name="fone" value="{{ $pessoa->fone }}" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $pessoa->email }}" required>
        <br>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('pessoas.index') }}">Cancelar</a>
</body>
</html>
