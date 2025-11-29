<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Serviço</title>
</head>
<body>

    <h1>Cadastrar Novo Serviço</h1>

    <form action="{{ route('services.store') }}" method="POST">
        @csrf

        <label>Nome:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Descrição:</label><br>
        <textarea name="description" rows="4" required></textarea><br><br>

        <label>Preço (R$):</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('services.index') }}">Voltar</a>

</body>
</html>
