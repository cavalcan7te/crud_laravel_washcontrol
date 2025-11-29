<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Funcionário</title>
</head>
<body>

<h1>Cadastrar Funcionário</h1>

<form action="{{ route('employees.store') }}" method="POST">
    @csrf

    <label>Nome:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="phone" required><br><br>

    <label>Cargo:</label><br>
    <input type="text" name="role" required><br><br>

    <button type="submit">Salvar</button>
</form>

<br>
<a href="{{ route('employees.index') }}">Voltar</a>

</body>
</html>
