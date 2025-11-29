<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Serviço</title>
</head>
<body>

    <h1>Editar Serviço</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label><br>
        <input 
            type="text" 
            name="name" 
            value="{{ $service->name }}" 
            required
        ><br><br>

        <label>Descrição:</label><br>
        <textarea 
            name="description" 
            rows="4" 
            required
        >{{ $service->description }}</textarea><br><br>

        <label>Preço (R$):</label><br>
        <input 
            type="number" 
            step="0.01" 
            name="price" 
            value="{{ $service->price }}" 
            required
        ><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('services.index') }}">Voltar</a>

</body>
</html>
