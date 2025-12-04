<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Agendamento</title>
</head>
<body>

    <h1>Editar Agendamento</h1>

    <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Cliente:</label><br>
        <select name="customer_id" required>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}" 
                    {{ $schedule->customer_id == $customer->id ? 'selected' : '' }}>
                    {{ $customer->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label>Veículo:</label><br>
        <select name="vehicle_id" required>
            @foreach($vehicles as $vehicle)
                <option value="{{ $vehicle->id }}" 
                    {{ $schedule->vehicle_id == $vehicle->id ? 'selected' : '' }}>
                    {{ $vehicle->plate }} - {{ $vehicle->brand }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label>Funcionário:</label><br>
        <select name="employee_id" required>
            @foreach($employees as $employee)
                <option value="{{ $employee->id }}" 
                    {{ $schedule->employee_id == $employee->id ? 'selected' : '' }}>
                    {{ $employee->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label>Serviço:</label><br>
        <input type="text" name="service" value="{{ $schedule->service }}" required><br><br>

        <label>Data e Hora:</label><br>
        <input type="datetime-local" name="scheduled_at"
            value="{{ date('Y-m-d\TH:i', strtotime($schedule->scheduled_at)) }}"
            required>
        <br><br>

        <label>Preço:</label><br>
        <input type="number" step="0.01" name="price" value="{{ $schedule->price }}"><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="pendente" {{ $schedule->status == 'pendente' ? 'selected' : '' }}>Pendente</option>
            <option value="concluído" {{ $schedule->status == 'concluído' ? 'selected' : '' }}>Concluído</option>
            <option value="cancelado" {{ $schedule->status == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
        </select>
        <br><br>

        <label>Observações:</label><br>
        <textarea name="notes">{{ $schedule->notes }}</textarea>
        <br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('schedules.index') }}">Voltar</a>

</body>
</html>
