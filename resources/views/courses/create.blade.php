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

    <h2>Cadastrar Cursos</h2>

     <form action="{{ route('course.store') }}" method="POST">
     @csrf <!-- Para que a aplicação não aceite dados de formulários externo.  -->
     @method('POST') <!-- Indica que estar utilizando o methodo post  -->
     
        <LAbel>Nome: </LAbel><!-- o atributo NAME E ID recebe o nome da coluna no banco de dados-->
        <input type="text" name="name" id="name" placeholder="Nome do Curso" value="{{ old('name') }}" require><br><br>
        <button type="submit">Cadastrar</button>

     </form>
</body>
</html>
