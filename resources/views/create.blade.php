<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Criar Cliente</h1>
    <form action="/clients/store" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="phone" placeholder="Telefone">
        <input type="text" name="id_number" placeholder="CPF">
        <button type="submit">Enviar</button>
</body>
</html>