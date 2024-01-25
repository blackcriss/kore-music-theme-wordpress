<?php get_header( ); ?>
    <!-- Contenido -->
    <div class="container my-5">

        <!-- Card -->
    <div class=" mt-5">
      <div class="row g-0">
          <!-- Ultimo lanzamiento -->  
          <?php
          $args = array(
              'post_type' => 'musica',
              'posts_per_page' => 1
          );
 
          $my_query = new WP_Query( $args ); 
          
          if( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>      
          <div class="col-12 my-5">
            <h1 class="mb-5 border-bottom border-secondary">LANZAMIENTO DEL MES</h1>
              <div class="card bg-dark">
                  <div class="row">
                    <div class="col-lg-6">
                      <a href="<?php the_permalink(); ?>">
                      <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('', array( 'class' => 'img-fluid' ));
                        } ?>
                      </a>
                    </div>
                    <div class="col-lg-6 my-auto mx-auto px-lg-5 overflow-hidden">
                      <div class="card-body">
                        <h1 class="card-title text-uppercase"><?php the_title(); ?></h1>
                        <p class="card-text"><small class="text-muted"><?php the_field( 'artistas' ); ?></small></p>
                        <div><?php the_content(); ?></div>
                          <div class="d-flex justify-content-center">
                            <a href="<?php the_field( 'beatport' ); ?>" target="_blank" class="btn btn-success my-4 col-12 col-lg-6 py-4">DESCARGAR</a> 
                          </div>   
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <?php endwhile; endif; ?>
          <!-- Fin ultimo lanzamiento -->
      </div>
    </div>
        <!-- Fin card -->

        <!-- LANZAMIENTOS DESTACADOS -->
        <h2 class="my-5 border-bottom border-secondary">LANZAMIENTOS DESTACADOS</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mb-5">
        <?php 
          $args = array(
            'post_type' => 'musica',
            'posts_per_page' => 6
          );

          $otrosEPS1 = new WP_Query( $args ); 

          if( $otrosEPS1->have_posts() ) : while ( $otrosEPS1->have_posts() ) : $otrosEPS1->the_post(); ?>
          <div class="col">
            <div class="card h-100 bg-dark">
              <!-- <img src="..." class="card-img-top" alt="..."> -->
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
        <!-- FIN LANZAMIENTOS DESTACADOS -->

        <!-- SESSIONS -->
        <H3 class="my-5 fs-2 border-bottom border-secondary">SESSIONS</H3>
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/w64x-QamK0E" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            </div>
          </div>

          <div class="col-lg-4 d-flex flex-column justify-content-between">

              <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/doCQ5Dv9s0Q" 
                  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                  allowfullscreen>
                </iframe>
              </div>

              <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/DlryfgRioT4" 
                  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                  allowfullscreen>
                </iframe>
              </div>

          </div>
        </div>
        <!-- FIN SESSIONS -->

        <!-- PODCASTS -->
        <H3 class="my-5 fs-2 border-bottom border-secondary">PODCASTS</H3>
        <div>
            <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" 
              src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1431699547&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true">
            </iframe>
            <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                <a href="https://soundcloud.com/kore-music" title="Kore Music" target="_blank" style="color: #cccccc; text-decoration: none;">Kore Music</a> · 
                <a href="https://soundcloud.com/kore-music/sets/kore-music-podcasts-2022" title="Kore Music Podcasts 2022" target="_blank" 
                style="color: #cccccc; text-decoration: none;">Kore Music Podcasts 2022</a>
            </div>
        </div>
        <!-- FIN PODCASTS -->

    </div>
    <!-- Fin contenido -->
    
    <?php get_footer(); ?>