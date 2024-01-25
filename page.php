<?php get_header(); ?>

    <!-- Contenido -->
        <div class="container my-5">

            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2 class=" pt-5 my-5 text-center"><?php the_title(); ?></h2>
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails', array( 'class' => 'img-fluid' ));
                } 
            ?>
            <div class="mt-5 text-justify">
                <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>

        </div>
    <!-- Fin contenido -->

<?php get_footer(); ?>
