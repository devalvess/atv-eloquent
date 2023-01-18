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
        <li>Nome: {{$client->name}}</li>
        <li>Email: {{$client->email}}</li>
        <li>Telefone: {{$client->phone}}</li>
        <li>CPF: {{$client->id->number}}</li>
    </ul>
</body>
</html>s