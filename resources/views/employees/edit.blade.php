<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Funcionário</title>
</head>
<body>

<h1>Editar Funcionário</h1>

<form action="{{ route('employees.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome:</label><br>
    <input type="text" name="name" value="{{ $employee->name }}" required><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="phone" value="{{ $employee->phone }}" required><br><br>

    <label>Cargo:</label><br>
    <input type="text" name="role" value="{{ $employee->role }}" required><br><br>

    <button type="submit">Atualizar</button>
</form>

<br>
<a href="{{ route('employees.index') }}">Voltar</a>

</body>
</html>
