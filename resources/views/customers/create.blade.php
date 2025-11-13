<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WashControl</title>
</head>
<body>
    <h1>Cadastre</h1>

    <form action="{{ route('customers.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 10px; width: 300px;">
    @csrf

    <label>
        Nome:
        <input type="text" name="name" required>
    </label>

    <label>
        Telefone:
        <input type="text" name="phone" required>
    </label>

    <label>
        Placa do veículo:
        <input type="text" name="vehicle_plate" required>
    </label>

    <button type="submit" style="padding: 8px; background: black; color: white; border: none;">
        Salvar
    </button>
</form>

</body>
</html>