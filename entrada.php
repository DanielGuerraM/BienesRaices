<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <h2>Guía para la decoración de tu hogar</h2>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen propiedad">
    </picture>

    <p class="informacion-meta">Escrito el: <span>6/11/2022</span> por: <span>Admin</span></p>

    <div class="resumen-propiedad">

        <p>Phasellus ultricies sagittis ante, luctus consectetur turpis luctus et. Maecenas aliquam
            bibendum interdum. In eget volutpat ante, sit amet elementum ex. Vestibulum vulputate
            efficitur varius. Pellentesque diam neque, vestibulum a sodales vulputate, convallis non
            tortor. Praesent ligula justo, scelerisque sed eros consectetur, aliquam condimentum
            orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
            himenaeos. Mauris malesuada tellus sed urna pulvinar, eget laoreet urna finibus.
            Pellentesque interdum nisi nisi, et placerat mauris pharetra vel. Etiam quam mi, porta
            in dolor non, aliquam sagittis nunc. Nulla sed justo tellus. Sed bibendum arcu eget
            nibh malesuada molestie. Suspendisse viverra mauris non sagittis sodales.
        </p>
        <p>
            Phasellus consectetur urna ac diam ullamcorper tempor. Aliquam aliquam, nulla sit amet
            pulvinar accumsan, orci nunc lobortis leo, feugiat molestie enim urna vel quam. Etiam ac
            mauris non tellus ullamcorper tincidunt at ac erat. Cras luctus elit ac eros sagittis, ac
            finibus risus efficitur. Donec tincidunt, felis vel porta porta, ante tortor tempus elit,
            in pretium sem risus et odio. Integer semper vehicula enim non molestie. Nullam sed
            pellentesque ipsum, eget finibus risus.
        </p>
    </div>
</main>


<?php
incluirTemplate('footer');
?>