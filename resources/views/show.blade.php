<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Nome: {{$cliente->name}}</li>
        <li>Email: {{$cliente->email}}</li>
        <li>Telefone: {{$cliente->phone}}</li>
        <li>CPF: {{$cliente->id->number}}</li>
    </ul>
</body>
</html>s