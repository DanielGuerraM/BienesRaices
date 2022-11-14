<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio = true);
?>

<main class="contenedor">
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
</main>

<section class="seccion contenedor">
    <h2>Casas y apartementos en Venta</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="Imagen anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con exelente vista, acabados rusticos conservadores a un exelente precio</p>
                <p class="precio">$ 2.000.000.000</p>

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

                <a href="anuncio.php" class="boton-amarillo-block">Ver propiedad</a>
            </div> <!-- .contenido-anuncio-->
        </div> <!-- .anuncio -->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="Imagen anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa lujosa en Medellín</h3>
                <p>Moderna y lujosa casa con acabados minimalistas, pisos de marmol y gran vista a la ciudad</p>
                <p class="precio">$ 3.800.000.000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono dormitorios">
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton-amarillo-block">Ver propiedad</a>
            </div> <!-- .contenido-anuncio-->
        </div> <!-- .anuncio -->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="Imagen anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Mansion rustica de lujo</h3>
                <p>Gran mansion con acabados rusticos con piscina, gran espacio y buena iluminacion</p>
                <p class="precio">$ 5.300.000.000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                        <p>4</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                        <p>6</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono dormitorios">
                        <p>6</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton-amarillo-block">Ver propiedad</a>
            </div> <!-- .contenido-anuncio-->
        </div> <!-- .anuncio -->
    </div> <!-- .contenedor-anuncios -->

    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-amarillo">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terrazaen el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>6/11/2022</span> por: <span>Admin</span></p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>6/11/2022</span> por: <span>Admin</span></p>

                    <p>
                        Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas
            </blockquote>
            <p>- Daniel Guerra</p>
        </div>

    </section>
</div>

<?php
incluirTemplate('footer');
?>