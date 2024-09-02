
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();

            the_title('<h1>', '</h1>');
            //the_content();

        endwhile; // End of the loop.
        ?>

        <?php foreach( get_cfc_meta( 'portrait' ) as $key => $value ){ ?>
            Clase: <?php the_cfc_field( 'portrait','clase', false, $key ); ?>
            <br>
            Imagen PNG: <?php the_cfc_field( 'portrait','imagen-png', false, $key ); ?>
            <br>
            Titulo PNG: <?php the_cfc_field( 'portrait','titulo', false, $key ); ?>
            <br>
            Imagen background: <?php the_cfc_field( 'portrait','imagen-background', false, $key ); ?>
            <br>
            Video: <?php the_cfc_field( 'portrait','video', false, $key ); ?>
            <br>
        <?php }  ?>

    </main><!-- #main -->
</div><!-- #primary -->

