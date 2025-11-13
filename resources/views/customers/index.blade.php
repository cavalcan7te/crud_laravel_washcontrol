<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WashControl</title>
</head>
<body>
    <h1>CLIENTES</h1>
    <table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse: collapse;">
    <thead>
        <tr style="background: #f0f0f0;">
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Placa do Veículo</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
        </tr>
    </thead>

    <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->vehicle_plate }}</td>
                <td>{{ $customer->created_at }}</td>
                <td>{{ $customer->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('customers.create') }}">Criar novo cliente</a>


</body>
</html>