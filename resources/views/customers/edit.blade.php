<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>

<h1>Editar Cliente</h1>

<form action="{{ route('customers.update', $customer->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome:</label><br>
    <input type="text" name="name" value="{{ $customer->name }}" required><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="phone" value="{{ $customer->phone }}" required><br><br>

    <button type="submit">Salvar Alterações</button>
</form>

<br>
<a href="{{ route('customers.index') }}">Voltar</a>

</body>
</html>
