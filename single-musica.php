<?php get_header(); ?>

    <!-- Card -->
    <div class="container mt-5">
        <div class="row">
            <!-- Articulo -->
            <div class="col-12 col-md-12 col-lg-10 my-5">
            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="card bg-dark">
                    <div class="row g-0">
                      <div class="col-md-12 col-lg-6">
                      <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('', array( 'class' => 'img-fluid' ));
                        } ?>
                      </div>
                      <div class="col-md-12 col-lg-6">
                        <div class="card-body">
                          <h1 class="card-title text-uppercase"><?php the_title(); ?></h1>
                          <p class="card-text"><small class="text-muted"><?php the_field( 'artistas' ); ?></small></p>
                          <p class="card-text"><?php the_content(); ?></p>                        
                        </div>
                      </div>
                    </div>
                  </div>
            <?php endwhile; endif; ?>
            </div>
            <!-- Fin articulo -->
            <!-- aside -->
            <div class="col-12 col-md-12 col-lg-2 my-5">
                <h6 class="text-center">STREAM/DESCARGAR</h6>
                <div class="d-flex align-items-center flex-column">
                  <a class="col-12 mb-1 p-2 bg-light text-center" href="<?php the_field( 'beatport' ); ?>" target="_blank">
                      <div>
                          <img src="<?php bloginfo('template_url'); ?>/images/ep/Beatport_MainLogo.svg" alt=""
                          class="img-fluid" height="87" width="100">
                      </div>
                  </a>
                  <a class="col-12 mb-1 p-2 bg-light text-center" href="<?php the_field( 'apple_music' ); ?>" target="_blank">
                      <div>
                          <img src="<?php bloginfo('template_url'); ?>/images/ep/applemusic1.svg" alt=""
                          class="img-fluid" height="87" width="100">
                      </div>
                  </a>
                  <a class="col-12 mb-1 p-2 bg-light text-center" href="<?php the_field( 'spotify' ); ?>" target="_blank">
                      <div>
                          <img src="<?php bloginfo('template_url'); ?>/images/ep/spotify.svg" alt=""
                          class="img-fluid" height="87" width="100">
                      </div>
                  </a>
                  <a class="col-12 mb-1 p-2 bg-light text-center" href="<?php the_field( 'youtube' ); ?>" target="_blank">
                      <div>
                          <img src="<?php bloginfo('template_url'); ?>/images/ep/youtube.png" alt=""
                          class="img-fluid" height="87" width="100">
                      </div>
                  </a>
                  <a class="col-12 mb-1 p-2 bg-light text-center" href="<?php the_field( 'amazon_music' ); ?>" target="_blank">
                      <div>
                          <img src="<?php bloginfo('template_url'); ?>/images/ep/amazonmusic.svg" alt=""
                          class="img-fluid" height="87" width="100">
                      </div>
                  </a>
                  <a class="col-12 mb-1 p-2 bg-light text-center" href="<?php the_field( 'tidal' ); ?>" target="_blank">
                      <div>
                          <img src="<?php bloginfo('template_url'); ?>/images/ep/tidal.png" alt=""
                          class="img-fluid" height="87" width="100">
                      </div>
                  </a>
                  <a class="col-12 mb-1 p-2 bg-light text-center" href="<?php the_field( 'youtube_music' ); ?>" target="_blank">
                      <div>
                          <img src="<?php bloginfo('template_url'); ?>/images/ep/youtubemusic.svg" alt=""
                          class="img-fluid" height="87" width="100">
                      </div>
                  </a>
                  <a class="col-12 mb-1 p-2 bg-light text-center" href="<?php the_field( 'deezer' ); ?>" target="_blank">
                      <div>
                          <img src="<?php bloginfo('template_url'); ?>/images/ep/deezer.png" alt=""
                          class="img-fluid" height="87" width="100">
                      </div>
                  </a>
                  <a class="col-12 mb-1 p-2 bg-light text-center" href="<?php the_field( 'traxsource' ); ?>" target="_blank">
                      <div>
                          <img src="<?php bloginfo('template_url'); ?>/images/ep/traxsource.svg" alt=""
                          class="img-fluid" height="87" width="100">
                      </div>
                  </a>
                </div>
            </div>
            <!-- Fin aside -->
        </div>

        <!-- Reproductor Beatport -->

        <!-- Fin reporductor Beatport -->
    </div>
    <!-- Fin card -->
        </div>
      </div>  
    <!-- Fin contenido catalogo -->

    <?php get_footer(); ?>