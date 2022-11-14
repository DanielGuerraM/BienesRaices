<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raices</title>
    <link rel="stylesheet" href="/bienesraices_inicio/build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img src="build/img/logo.svg" alt="Imagen logotipo">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="Icono-menu-responsibe">
                </div>

                <div class="derecha">
                    <img src="build/img/dark-mode.svg" alt="Boton DarkMode" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>
            <?php if ($inicio) { ?>
                <h1>Venta de Casas y Departamentos Excluivos de Lujo</h1>
            <?php } ?>

        </div>
    </header>