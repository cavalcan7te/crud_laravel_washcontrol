<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
</head>
<body>

<nav>
    <a href="{{ route('services.index') }}">Serviços</a>
    <a href="{{ route('schedules.index') }}">Agendar</a>
    <a href="{{ route('vehicles.index') }}">Veículos registrados</a>
    <a href="{{ route('customers.index') }}">Clientes registrados</a>
    <a href="{{ route('employees.index') }}">Funcionários cadastrados</a>

</nav>

<h1>SERVIÇOS</h1>

<table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse: collapse;">
    <thead>
        <tr style="background: #f0f0f0;">
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td>R$ {{ number_format($service->price, 2, ',', '.') }}</td>
                <td>{{ $service->created_at }}</td>
                <td>{{ $service->updated_at }}</td>
                <td>
                    <a href="{{ route('services.edit', $service->id) }}">
                        Editar
                    </a>

                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
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
<a href="{{ route('services.create') }}">Cadastrar novo serviço</a>

</body>
</html>
