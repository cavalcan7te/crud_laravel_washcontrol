<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>

<nav>
    <a href="{{ route('services.index') }}">Serviços</a>
    <a href="{{ route('schedules.index') }}">Agendar</a>
    <a href="{{ route('vehicles.index') }}">Veículos registrados</a>
    <a href="{{ route('customers.index') }}">Clientes registrados</a>
    <a href="{{ route('employees.index') }}">Funcionários cadastrados</a>
       <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-white bg-red-500 px-3 py-1 rounded hover:bg-red-600">
                Logout
            </button>
        </form>

</nav>

<h1>Lista de Clientes</h1>

<table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse: collapse;">
    <thead>
        <tr style="background: #f0f0f0;">
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->created_at }}</td>
                <td>{{ $customer->updated_at }}</td>

                <td>
                    <a href="{{ route('customers.edit', $customer->id) }}">Editar</a>

                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit">
                            Apagar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>

<a href="{{ route('customers.create') }}">Cadastrar novo cliente</a>

</body>
</html>
