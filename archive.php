<?php get_header(); ?>

<div class="container mt-5">
    <!-- LANZAMIENTOS DESTACADOS -->
    <div class="my-5 pt-5">
      <h2 class="border-bottom border-secondary text-center">LANZAMIENTOS</h2>
    </div>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mb-5">
    <?php 
      $args = array(
        'post_type' => 'musica',
        'post_per_page' => -1,
      );

      $musica = new WP_Query( $args ); 

      if( $musica->have_posts() ) : while ( $musica->have_posts() ) : $musica->the_post(); ?>
      <div class="col">
        <div class="card h-100 bg-dark">
          <a href="<?php the_permalink(); ?>">
            <?php
              if ( has_post_thumbnail() ) {
                  the_post_thumbnail('', array( 'class' => 'img-fluid' ));
              } ?>
            </a>
          <div class="card-body">
            <a class="text-decoration-none text-white fw-bolder" href="<?php the_permalink(); ?>"><h5 class="card-title text-uppercase"><?php the_title(); ?></h5></a>
            <p class="text-muted lh-1"><?php the_field( 'artistas' ); ?></p>
            <p class="text-muted"><?php the_field( 'fecha' ); ?></p> 
          </div>
          <div class="card-footer d-flex justify-content-end">
            <a href="<?php the_field( 'beatport' ); ?>" target="_blank">
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/images/ep/Icons/Beatport.svg" alt=""
                    class="img-fluid me-3" width="15">
                </div>
            </a>
            <a href="<?php the_field( 'spotify' ); ?>" target="_blank">
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/images/ep/Icons/Spotify.png" alt=""
                    class="img-fluid me-3" width="15">
                </div>
            </a>
            <a href="<?php the_field( 'apple_music' ); ?>" target="_blank">
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/images/ep/Icons/applemusic.svg" alt=""
                    class="img-fluid me-3" width="15">
                </div>
            </a>
            <a href="<?php the_field( 'youtube' ); ?>" target="_blank">
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/images/ep/Icons/Youtube.png" alt=""
                    class="img-fluid me-3" width="15">
                </div>
            </a>
            <a href="<?php the_field( 'tidal' ); ?>" target="_blank">
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/images/ep/Icons/Tidal.png" alt=""
                    class="img-fluid me-3" width="15">
                </div>
            </a>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
    <!-- FIN LANZAMIENTOS -->

    <!-- Paginación -->
    <div class="card-body">
        <?php get_template_part('template-parts/content', 'paginacion'); ?>
    </div>
    <!-- Fin paginación -->

</div>


<?php get_footer(); ?>