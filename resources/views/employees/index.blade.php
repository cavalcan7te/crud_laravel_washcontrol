<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funcionários</title>
</head>
<body>

<nav>
    <a href="{{ route('services.index') }}">Serviços</a>
    <a href="{{ route('schedules.index') }}">Agendar</a>
    <a href="{{ route('vehicles.index') }}">Veículos registrados</a>
    <a href="{{ route('customers.index') }}">Clientes registrados</a>
    <a href="{{ route('employees.index') }}">Funcionários cadastrados</a>

</nav>

<h1>FUNCIONÁRIOS</h1>

<table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse: collapse;">
    <thead>
        <tr style="background:#f0f0f0;">
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Cargo</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->role }}</td>
                <td>{{ $employee->created_at }}</td>
                <td>{{ $employee->updated_at }}</td>

                <td>
                    <a href="{{ route('employees.edit', $employee->id) }}">Editar</a>

                    <form action="{{ route('employees.destroy', $employee->id) }}" 
                          method="POST"
                          style="display:inline;">
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
<a href="{{ route('employees.create') }}">Cadastrar novo funcionário</a>

</body>
</html>
