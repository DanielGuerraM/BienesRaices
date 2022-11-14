<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor">
    <h2>Nosotros</h2>
    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                25 años de experiencia
            </blockquote>

            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus pariatur necessitatibus illo, unde corrupti adipisci obcaecati nesciunt omnis excepturi amet odit voluptatum tenetur rerum, facilis aut, error numquam mollitia suscipit!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi quam in voluptate officia non exercitationem quidem facilis nostrum, magni aliquam eligendi minima necessitatibus modi neque eius enim voluptates cum aliquid.
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi quam in voluptate officia non exercitationem quidem facilis nostrum, magni aliquam eligendi minima necessitatibus modi neque eius enim voluptates cum aliquid.
            </p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h2>Mas sobre Nosotros</h2>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores tempora, earum minus quam consequatur, perspiciatis dolore rerum dolorem excepturi unde quia sint vitae magni omnis.
            </p>
        </div>

        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores tempora, earum minus quam consequatur, perspiciatis dolore rerum dolorem excepturi unde quia sint vitae magni omnis.
            </p>
        </div>

        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores tempora, earum minus quam consequatur, perspiciatis dolore rerum dolorem excepturi unde quia sint vitae magni omnis.
            </p>
        </div>
    </div>
</section>

<?php
incluirTemplate('footer');
?>