<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Veículo</title>
</head>
<body>

    <h1>Editar Veículo</h1>

    <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Dono do veículo:</label><br>
        <select name="customer_id">
            <option value="">Selecionar cliente...</option>

            @foreach($customers as $customer)
                <option value="{{ $customer->id }}"
                    @if($customer->id == $vehicle->customer_id) selected @endif>
                    {{ $customer->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label>Placa:</label><br>
        <input type="text" name="plate" value="{{ $vehicle->plate }}" required><br><br>

        <label>Marca:</label><br>
        <input type="text" name="brand" value="{{ $vehicle->brand }}" required><br><br>

        <label>Modelo:</label><br>
        <input type="text" name="model" value="{{ $vehicle->model }}" required><br><br>

        <label>Ano:</label><br>
        <input type="number" name="year" value="{{ $vehicle->year }}"><br><br>

        <label>Cor:</label><br>
        <input type="text" name="color" value="{{ $vehicle->color }}"><br><br>

        <label>Tipo:</label><br>
        <input type="text" name="type" value="{{ $vehicle->type }}"><br><br>

        <label>Observações:</label><br>
        <textarea name="notes">{{ $vehicle->notes }}</textarea><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('vehicles.index') }}">Voltar</a>

</body>
</html>
