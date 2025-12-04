<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WashControl - Agendamentos</title>
</head>
<body>

    <h1>AGENDAMENTOS</h1>

    <table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse: collapse;">
        <thead>
            <tr style="background: #f0f0f0;">
                <th>ID</th>
                <th>Cliente</th>
                <th>Veículo</th>
                <th>Funcionário</th>
                <th>Serviço</th>
                <th>Data/Hora</th>
                <th>Status</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->id }}</td>
                    <td>{{ $schedule->customer->name }}</td>
                    <td>{{ $schedule->vehicle->plate }}</td>
                    <td>{{ $schedule->employee->name }}</td>
                    <td>{{ $schedule->service }}</td>
                    <td>{{ $schedule->scheduled_at }}</td>
                    <td>{{ $schedule->status }}</td>
                    <td>R$ {{ number_format($schedule->price, 2, ',', '.') }}</td>

                    <td>
                        <a href="{{ route('schedules.edit', $schedule->id) }}">
                            Editar
                        </a>

                        <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">
                                Apagar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="{{ route('schedules.create') }}">Criar novo agendamento</a>

</body>
</html>
