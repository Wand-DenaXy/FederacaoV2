<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Clube</h1>
    <form action="/editarClube/{{$clube->id}}" method="post">
        @csrf
        @method('PUT')
        <label for="nome" class="form-label">Nome do Clube</label>
        <input type="text" name="nome" value="{{$clube->nome}}">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" value="{{$clube->email}}">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" name="telefone" value="{{$clube->telefone}}">
        <label for="localidade" class="form-label">Localidade</label>
        <input type="text" name="localidade" value="{{$clube->localidade}}">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>