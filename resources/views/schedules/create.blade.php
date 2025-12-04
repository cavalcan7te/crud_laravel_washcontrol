<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Agendamento</title>
</head>
<body>

    <h1>Criar Agendamento</h1>

    <form action="{{ route('schedules.store') }}" method="POST">
        @csrf

        <label>Cliente:</label><br>
        <select name="customer_id" required>
            <option value="">Selecione</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>
        <br><br>

        <label>Veículo:</label><br>
        <select name="vehicle_id" required>
            <option value="">Selecione</option>
            @foreach($vehicles as $vehicle)
                <option value="{{ $vehicle->id }}">{{ $vehicle->plate }} - {{ $vehicle->brand }}</option>
            @endforeach
        </select>
        <br><br>

        <label>Funcionário:</label><br>
        <select name="employee_id" required>
            <option value="">Selecione</option>
            @foreach($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
        </select>
        <br><br>

        <label>Serviço:</label><br>
        <input type="text" name="service" required><br><br>

        <label>Data e Hora:</label><br>
        <input type="datetime-local" name="scheduled_at" required><br><br>

        <label>Preço (opcional):</label><br>
        <input type="number" step="0.01" name="price"><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="pendente">Pendente</option>
            <option value="concluído">Concluído</option>
            <option value="cancelado">Cancelado</option>
        </select>
        <br><br>

        <label>Observações:</label><br>
        <textarea name="notes"></textarea>
        <br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('schedules.index') }}">Voltar</a>

</body>
</html>
