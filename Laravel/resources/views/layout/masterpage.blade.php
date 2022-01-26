<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gure Tabadul-@yield('Titulo')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paprika&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- Librerias -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/navbar-top.css">
    <!-- Links CSS | JS -->
    <link rel="stylesheet" href="css/EstilosModificado.css">
</head>
<body background=img/fondo_GureTabadul.jpg style="background-size:100%; background-image: cover;background-repeat: no-repeat">
    @include('layout.estilos')
    @include('layout.nav')
    @yield('contenido')
</body>
</html>