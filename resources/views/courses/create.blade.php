<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>
<body>

    <br>
    <a href="{{ route('course.index')}}">Listar</a><br>
    <a href="{{ route('course.show')}}">Visualizar</a><br>
    <a href="{{ route('course.edit')}}">Editar</a><br>
     <!-- <a href="{{ route('course.destroy')}}">Apagar</a>  -->

    <h2>Cadastrar Cursos</h2>

     <form action="{{ route('course.store') }}" method="POST">
     @csrf
     @method('POST')
     
        <LAbel>Nome: </LAbel>
        <input type="text" name="name" id="name" placeholder="Nome do Curso" value="{{ old('name') }}" require><br><br>
        <button type="submit">Cadastrar</button>

     </form>
</body>
</html>
