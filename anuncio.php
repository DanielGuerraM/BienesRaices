<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <h2>Gran mansión frente al bosque</h2>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen propiedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$ 6.650.000.000</p>

        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                <p>2</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono dormitorios">
                <p>4</p>
            </li>
        </ul>

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