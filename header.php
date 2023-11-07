
<?php
    $url=basename($_SERVER["PHP_SELF"]);
    $url=explode(".",$url);
    //var_dump($url[0])
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/<?php echo $url[0] ?>.css">
</head>

<body>

    <!--Contenido de la pagina-->
    <header>
        <nav class="navbar navbar-expand-lg bg-amarillo">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img class ="logo" src="img/logo.png" alt="logo del cine">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link <?php if( $url[0]=="horarios") echo "active"?>" aria-current="page" href="horarios.php">Horarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if( $url[0]=="Acerca") echo "active"?>" aria-current="page" href="Acerca.php">Acerca de Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if( $url[0]=="Catalogo-peliculas") echo "active"?>" aria-current="page" href="Catalogo-peliculas.php">Catalogo de Peliculas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if( $url[0]=="Peliculas") echo "active"?>" aria-current="page" href="Peliculas.php">Peliculas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if( $url[0]=="Resultados") echo "active"?>" aria-current="page" href="Resultados.php">Resultados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if( $url[0]=="Contactenos") echo "active"?>" aria-current="page" href="Contactenos.php">Contactenos</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-buscar" type="submit"> <i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </header>