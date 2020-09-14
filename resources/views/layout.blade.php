<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Contatos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="{{ asset('css/default.css') }}" rel="stylesheet">
</head>
<body>
<div class="topnav">
    <div class="container">
        <a href="/list">Lista</a>
        <a href="/list/create">Adicionar</a>
        <div class="topnav-right">
    <h2>@yield('header')</h2>
        </div>
    </div>    
</div>

<div class="container">
    @yield('content')
</div>
    <!--
    <div class="container">
        <div class="jumbotron">
            <h1>@yield('header')</h1>
        </div>

    </div>
-->
</body>
