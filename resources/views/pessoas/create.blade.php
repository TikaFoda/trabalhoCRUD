<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
</head>
<body>
    <a href="{{ route('pessoas.index') }}">
        <button type="button">Voltar</button>
    </a>
    <br>
    <h1>Cadastrar Nova Pessoa</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('pessoas.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required>
        @error('nome')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <br>

        <label for="fone">Telefone:</label>
        <input type="text" name="fone" id="fone" value="{{ old('fone') }}" required>
        @error('fone')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        @error('email')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
