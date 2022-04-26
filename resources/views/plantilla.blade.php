<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
        <h1>Casals de la Generalitat de Catalunya</h1>
        @yield('content')
        <h1>Carrer Almogavers 34, 08034 Barcelona</h1>
    </body>
</html>
