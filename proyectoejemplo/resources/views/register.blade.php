<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- CSS para barra de navagación-->
        <meta charset="utf-8">
        <title>Courses</title>
        <link rel="stylesheet" href="{{ asset('.css/welcome.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <!--Fin CSS barra navegación-->
    </head>
    <body style="background-color: azure">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">NombreApp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/course">Cursos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/cami_nv/">Gummy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Obtener premium</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <form action="{{route('CourseStore')}}" method="POST" style="padding-top:30px">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre</label>
                    <input class="form-control" type="text" placeholder="nombre" name="nombre" value="" required minlength="3">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">descripcion</label>
                    <input class="form-control" type="text" placeholder="descripcion" name="descripcion" value="" required minlength="3">
                </div>
                
                <div class="form-group">
                    <label for="formGroupExampleInput">Nivel</label>
                    <input class="form-control" type="int" placeholder="nivel" name="nivel" value="" required minlength="1">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </body>
</html>




