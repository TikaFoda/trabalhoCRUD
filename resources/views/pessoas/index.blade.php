<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
</head>
<body>
    <h1>Lista de Pessoas</h1>
    <a href="{{ route('pessoas.create') }}">
        <button type="button">Criar Novo Cadastro</button>
    </a>

    @if ($pessoas->isEmpty())
        <p>Não há pessoas cadastradas.</p>
    @else
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pessoas as $pessoa)
                    <tr>
                        <td>{{ $pessoa->nome }}</td>
                        <td>{{ $pessoa->fone }}</td>
                        <td>{{ $pessoa->email }}</td>
                        <td>
                        <a href="{{ route('pessoas.edit', $pessoa->id) }}">
                                <button type="button">Editar</button>
                        </a>
                            <form action="{{ route('pessoas.destroy', $pessoa->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza que deseja deletar esta pessoa?')">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
