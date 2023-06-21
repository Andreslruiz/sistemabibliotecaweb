@extends('layouts.app')

@section('content')
<div class="container">
    <!doctype html>
                    <html lang="en">
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                        <link rel="stylesheet" type="text/css" href="Assets/CSS/estilos.css">
                        <title>Biblioteca Web</title>
                    </head>
                    <body>
                        <div class="container text-center p-2">
                            <h1>
                                <img src="https://images.vexels.com/media/users/3/271649/isolated/preview/3a1938ea55f27c31d53b585fcebdcd5e-icono-de-dibujos-animados-de-libro-abierto.png" width="120" height="40" class="d-inline-block align-top" alt="">
                                Gestion - Biblioteca Web
                            </h1>
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <img src="https://www.iudigital.edu.co/Style%20Library/images/logo-escudo.png" width="120" height="40" class="d-inline-block align-top" alt="">
                                <a class="navbar-brand p-3" href="index.php">Inicio</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                            
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Acciones
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('libros.create') }}">Registrar Libro</a>
                                        <a class="dropdown-item" href="{{ route('autors.create') }}">Registrar Autor</a>
                                        <a class="dropdown-item" href="{{ route('editorials.create') }}">Registrar Editorial</a>
                                    </div>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('libros.index') }}">Libros</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('autors.index') }}">Autores</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('editorials.index') }}">Editoriales</a>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                </form>
                                </div>
                            </nav>

                            <div id="centralImage" style="background: url(https://s1.1zoom.me/b5050/499/Many_Book_Library_468620_1600x1200.jpg)" class="jumbotron bg-cover text-white">
                                <div class="container py-5 text-center">
                                    <h1 class="display-4 font-weight-bold">Gestion Biblioteca Web</h1>
                                    <p class="font-italic mb-0">Leer es soñar con los ojos abiertos.</p>
                                    <a href="#" role="button" class="btn btn-primary px-5">Ver Disponibles</a>
                                </div>
                            </div>

                            <footer class="bg-light text-center text-lg-start">
                        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                            © 2023 Desarrollo de aplicaciones Web - 2Do Semestre Eps. Programación Aplicada
                            <a class="text-dark" href="https://www.iudigital.edu.co">IUDigital De Antioquia</a>
                        </div><div class="text-center p-0" style="background-color: rgba(0, 0, 0, 0.2);">
                            <a class="text-dark" href="https://www.iudigital.edu.co">IUDigital De Antioquia</a>
                        </div>
                        </footer>
                        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                        </div>
                    </body>
                    </html>
</div>
@endsection
