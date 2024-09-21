<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cuadro de Firma digital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animation.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

</head>

<body>






    <div class="wrapper-section">

        <?php while (have_posts()):
            the_post(); ?>
            <div class="wrapper-text absolute slide-in-blurred-top top-10 z-index-3">

                <?php // the_title('<h1 class="tracking-in-contract-bck animation color-third " >', '</h1>'); ?>
                <h2><? php// the_content(); ?></h2>



            </div>
            <?php if (comments_open() || get_comments_number()) {
                comments_template();
            } ?>

        <?php endwhile; ?>

        <?php foreach (get_cfc_meta('portrait') as $key => $value) {

            $clase = get_cfc_field('portrait', 'clase', false, $key);
            $imgPng = get_cfc_field('portrait', 'imagen-png', false, $key);
            $tituloPng = get_cfc_field('portrait', 'titulo', false, $key);
            $imgJpg = get_cfc_field('portrait', 'imagen-background', false, $key);
            $video = get_cfc_field('portrait', 'video', false, $key);

            if (!empty($video)) { ?>
                <section data-duration="7" class="z-index-4">
                    <div class="wrapper-img">
                        <video autoplay loop muted src="<?php the_cfc_field('portrait', 'video', false, $key); ?>"></video>
                    </div>
                </section>
                <?php
            } elseif (!empty($imgPng)) {
                ?>
                <section data-duration="7" class="">
                    <div class="wrapper-img">
                        <img src="<?php the_cfc_field('portrait', 'imagen-png', false, $key); ?>" alt=""
                            class="absolute z-index-4">
                        <img src="<?php the_cfc_field('portrait', 'imagen-background', false, $key); ?>" alt=""
                            class="z-index-2">
                    </div>
                </section>
                <?php
            } else {
                ?>
                <section data-duration="7" class="z-index-4">
                    <div class="wrapper-img">
                        <img src="<?php the_cfc_field('portrait', 'imagen-background', false, $key); ?>" alt="">
                    </div>
                </section>
                <?php
            }

        } ?>


    </div>
    <script>
        // Función para hacer scroll a una sección
        function scrollToSection(section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }

        // Obtener todas las secciones
        const sections = document.querySelectorAll('section');
        let currentIndexAutoScroll = 0;

        // Función para hacer scroll automáticamente
        function autoScroll() {
            const currentSection = sections[currentIndexAutoScroll];
            const duration = currentSection.getAttribute('data-duration') * 1000;

            scrollToSection(currentSection);

            currentIndexAutoScroll = (currentIndexAutoScroll + 1) % sections.length;

            setTimeout(autoScroll, duration);
        }

        // Iniciar el scroll automático al cargar la página
        window.onload = autoScroll;


        // Selecciona el elemento con la clase .wrapper-text
        const wrapperText = document.querySelector('.wrapper-text');

        // Función para alternar las clases
        function toggleClasses() {
            if (wrapperText.classList.contains('slide-in-blurred-top')) {
                // Si tiene la clase de entrada, se la quita y agrega la de salida
                wrapperText.classList.remove('slide-in-blurred-top');
                wrapperText.classList.add('slide-out-blurred-top');
            } else if (wrapperText.classList.contains('slide-out-blurred-top')) {
                // Si tiene la clase de salida, se la quita y agrega la de entrada
                wrapperText.classList.remove('slide-out-blurred-top');
                wrapperText.classList.add('slide-in-blurred-top');
            }
        }

        // Alternar cada 4 segundos (4000 milisegundos)
        setInterval(toggleClasses, 6000);


        // Función para recargar la página después de 5 minutos
        setTimeout(function () {
            location.reload();  // Recarga la página
        }, 300000);  // 300000 milisegundos = 5 minutos
    </script>

</body>

</html>