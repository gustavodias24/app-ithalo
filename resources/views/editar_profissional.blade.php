<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Edição</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Edição de Usuário</h2>
        <form action="/atualizar-profissional/{{ $prof->id }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="nome">Nome</label>
                <input value="{{ $prof->nome }}"name="nome" type="text" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="{{ $prof->email }}" name="email" type="email" class="form-control" id="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input value="{{ $prof->senha }}" name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
                <label for="contato">Contato</label>
                <input value="{{ $prof->contato }}" name="contato" type="text" class="form-control" id="contato" placeholder="Digite seu contato">
            </div>
            <div class="form-group">
                <label for="especialidade">Especialidade</label>
                <input value="{{ $prof->especialidade }}" name="especialidade" type="text" class="form-control" id="especialidade" placeholder="Digite sua especialidade">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="/profissionais" type="button" class="btn btn-warning">Voltar</a>
        </form>
        
        
        
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
