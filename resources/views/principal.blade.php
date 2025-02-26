<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Teste (view)</title>
</head>
<body>
    <h1>HELLO WORLD</h1>
    <li>
        <a href="{{ route('index') }}">Principal</a>
    </li>
    <li>
    <a href="{{ route('sobrenos') }}">Sobre Nós</a>
    </li>
    <li>
    <a href="{{ route('contato') }}">Contato</a>
    </li>
</body>
</html>