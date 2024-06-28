<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Pacientes</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Listagem de Pacientes</h2>
        <a href="/cadastro-paciente" class="btn btn-primary">Adicionar Paciente</a>
        <a href="/" type="button" class="btn btn-warning">Voltar</a>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Contato</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Documento</th>
                    <th>Endereço</th>
                    <th>Matrícula</th>
                    <th>Curso</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $paciente)
                    <tr>
                        <td>{{ $paciente->nome }}</td>
                        <td>{{ $paciente->email }}</td>
                        <td>{{ $paciente->contato }}</td>
                        <td>{{ $paciente->idade }}</td>
                        <td>{{ $paciente->sexo }}</td>
                        <td>{{ $paciente->documento }}</td>
                        <td>{{ $paciente->endereco }}</td>
                        <td>{{ $paciente->matricula }}</td>
                        <td>{{ $paciente->curso }}</td>
                        <td>
                            <a href="/editar-paciente/{{ $paciente->id }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="/deletar-paciente/{{ $paciente->id }}" method="GET" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
