<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>
<body>
    <h2>Detalhes do Cursos</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('course.index')}}">Listar</a><br>
    <a href="{{ route('course.create')}}">Cadastrar</a><br>
    <a href="{{ route('course.edit')}}">Editar</a><br>
     <!-- <a href="{{ route('course.destroy')}}">Apagar</a>  -->
</body>
</html>