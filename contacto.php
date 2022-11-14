<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor">
    <h2>Contacto</h2>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
    </picture>

    <h2>Llene el formulario de contacto</h2>

    <form action="" class="formulario">
        <fieldset>
            <legend>Informacíon personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Tu nombre" id="nombre">

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu e-mail" id="email">

            <label for="telefono">Telefono</label>
            <input type="number" name="telefono" placeholder="Tu telefono" id="telefono">

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <label for="opciones">Que desea hacer</label>
            <select id="opciones">
                <option value="" disabled selected>--Seleccionar--</option>
                <option value="comprar">Comprar una vivienda</option>
                <option value="vender">Vender una vivienda</option>
            </select>

            <label for="presupuesto">Precio o presupuesto</label>
            <input type="number" name="presupuesto" id="presupuesto">
        </fieldset>

        <fieldset>
            <legend>Información de contacto</legend>

            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input type="radio" value="Telefono" id="contactar-telefono" name="contactar">

                <label for="contactar-email">E-mail</label>
                <input type="radio" value="E-mail" id="contactar-email" name="contactar">

            </div>
            <div>
                <p>Si eligió teléfono, elija la fecha y la hora para ser contactado</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="9:00" max="20:00">
            </div>
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>