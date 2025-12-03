<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Veículo</title>
</head>
<body>

    <h1>Cadastrar Veículo</h1>

    <form action="{{ route('vehicles.store') }}" method="POST">
        @csrf

        <label>Dono do veículo:</label><br>
        <select name="customer_id">
            <option value="">Selecionar cliente...</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}">
                    {{ $customer->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label>Placa:</label><br>
        <input type="text" name="plate" required><br><br>

        <label>Marca:</label><br>
        <input type="text" name="brand" required><br><br>

        <label>Modelo:</label><br>
        <input type="text" name="model" required><br><br>

        <label>Ano:</label><br>
        <input type="number" name="year"><br><br>

        <label>Cor:</label><br>
        <input type="text" name="color"><br><br>

        <label>Tipo (carro, moto...):</label><br>
        <input type="text" name="type"><br><br>

        <label>Observações:</label><br>
        <textarea name="notes"></textarea><br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('vehicles.index') }}">Voltar</a>

</body>
</html>
