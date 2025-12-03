<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos</title>
</head>
<body>
    <h1>LISTA DE VEÍCULOS</h1>

    <a href="{{ route('vehicles.create') }}">Cadastrar novo veículo</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0" width="100%">
        <thead style="background: #f0f0f0;">
            <tr>
                <th>ID</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Cor</th>
                <th>Tipo</th>
                <th>Dono</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->plate }}</td>
                    <td>{{ $vehicle->brand }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>{{ $vehicle->year }}</td>
                    <td>{{ $vehicle->color }}</td>
                    <td>{{ $vehicle->type }}</td>

                    <td>
                        {{ $vehicle->customer->name ?? 'Sem dono' }}
                    </td>

                    <td>
                        <a href="{{ route('vehicles.edit', $vehicle->id) }}">Editar</a>

                        <form action="{{ route('vehicles.destroy', $vehicle->id) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                onclick="return confirm('Tem certeza que deseja excluir?')">
                                Apagar
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
