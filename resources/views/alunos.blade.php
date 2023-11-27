<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alunos</title>
</head>
<body>
    <h1>Lista de Alunos</h1>
    <ul>
        @foreach($alunos as $aluno)
            <li>{{ $aluno->nome }}</li>
        @endforeach
    </ul>
</body>
</html>