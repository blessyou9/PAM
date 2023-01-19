<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PAM</title>
 <!--Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    </head>
    <body>
        <nav class = "navbar navbar-expand-lg navbar-dar bg-dark">
            <div class="container-fluid">
                <a class="nav-link {{ request()->routeIs('Nhome') ?'text-warning ':'' }} "href='/'>Home</a>
                <a class="nav-link {{ request()->routeIs('categoria') ?'text-warning ':'' }} "href='{{ route('categoria') }}'>Categoria</a>
                <a class="nav-link {{ request()->routeIs('productos') ?'text-warning ':'' }} "href='{{ route('productos') }}'>Productos</a>     
                <a class="nav-link {{ request()->routeIs('colaboradores') ?'text-warning ':'' }} "href='{{ route('colaboradores') }}'>Colaboradores</a> 
            </div>
        </nav>    
        <!--Contenido de la pagina-->
        @yield('contenido')

        <footer>ISC Milton Bautista Ortega {{date('Y')}}</footer>
    </body>
</html>