<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Cliente</title>
</head>
<body>

<h1>Cadastrar Cliente</h1>

<form action="{{ route('customers.store') }}" method="POST">
    @csrf

    <label>Nome:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="phone" required><br><br>

    <button type="submit">Salvar</button>
</form>

<br>
<a href="{{ route('customers.index') }}">Voltar</a>

</body>
</html>
