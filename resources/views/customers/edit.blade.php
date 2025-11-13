<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>

    <h1>Editar Cliente</h1>

    <form action="{{ route('customers.update', $customer->id) }}" 
          method="POST"
          style="display: flex; flex-direction: column; gap: 10px; width: 300px;">

        @csrf
        @method('PUT')

        <label>
            Nome:
            <input type="text" name="name" value="{{ $customer->name }}" required>
        </label>

        <label>
            Telefone:
            <input type="text" name="phone" value="{{ $customer->phone }}" required>
        </label>

        <label>
            Placa do veículo:
            <input type="text" name="vehicle_plate" value="{{ $customer->vehicle_plate }}" required>
        </label>

        <button type="submit" style="padding: 8px; background: black; color: white; border: none;">
            Atualizar
        </button>
    </form>

</body>
</html>
