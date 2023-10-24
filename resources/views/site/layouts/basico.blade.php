<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Super Gestão - @yield('Titulo')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css')}}">
</head>
<body>
    @include('site.layouts._partials.topo')
    @yield('conteudo')
</body>
</html>