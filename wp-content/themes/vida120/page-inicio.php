<?php get_header();?>

  <section id="inicio" class="swiper-container swiper-container-videos-home" >
    <div class="grid-100 grid-parent videos swiper-wrapper">
      <?php
      $args = array(
      'orderby' => 're-order',
      //'posts_per_page' => 2,
      'post_type' => 'videos_inicio',
      );
      $videos_home = new WP_Query($args);   
      $n = 1;
      while ( $videos_home->have_posts() ) : $videos_home->the_post();
        if( get_field('ocultar')==2 ):
        ?>
          <a href="<?php echo get_field("link_video");?>" class="grid-50 grid-parent tablet-grid-50 mobile-grid-100 vid-<?php echo $n;?> swipebox swiper-slide" rel="gallery-<?php echo $n;?>" >
            <img src="<?php echo get_template_directory_uri();?>/assets/svg/icon-play.svg" class="play">
            <img src="<?php echo get_field("imagen_fondo");?>">
          </a>
        <?php
        $n++;
        endif;
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>      
  </section>
  <section>
    <div class="grid-100 grid-parent" id="recipes">
      <div class="grid-40 grid-parent tablet-grid-40">
        <div class="grid-100 grid-parent bg-gris">
          <div class="logo-120-recipes">
            <img src="<?php echo get_field("logo_120_recipes");?>">
          </div>
        </div>
        <div class="grid-100 grid-parent recetas">
          <?php
          $args = array(
          'orderby' => 're-order',
          'posts_per_page' => -1,
          'post_type' => 'recipes',
          );
          $recipes = new WP_Query($args);   
          while ( $recipes->have_posts() ) : $recipes->the_post();
          ?>
          <div class="grid-33 grid-parent tablet-grid-33 mobile-grid-33 relativo">
            <a href="<?php the_permalink();?>" class="hover-receta venobox_custom" data-type="iframe">
              <?php the_title();?>
            </a>
            <img src="<?php echo get_field("imagen_listado");?>">
          </div>
          <?php
          endwhile;
          wp_reset_postdata();
          ?> 
        </div>
      </div>
      <div class="grid-60 grid-parent tablet-grid-60" id="our-wines">
        <div class="swiper-container swiper-container1">
          <div class="grid-100 grid-parent titulo-our-wines">
            <?php echo get_field("titulo_our_wines");?>
          </div>        
          <div class="swiper-wrapper">
            
            <?php
            $args = array(
            'orderby' => 're-order',
            'posts_per_page' => -1,
            'post_type' => 'our_wines',
            );
            $our_wines = new WP_Query($args);    
            while ( $our_wines->have_posts() ) : $our_wines->the_post();
            ?>
            <div class="swiper-slide bg-our-wines">
              <div class="grid-40 tablet-grid-40 mobile-grid-30 vino-relativo">
                <img src="<?php echo get_field("imagen_botella");?>">
              </div>  
              <div class="grid-60 tablet-grid-60 mobile-grid-70 info-vino">
                <h3><?php the_title();?></h3>
                <h4>SOMMELIER'S COMMENT</h4>
                <?php echo get_field("sommeliers_comment");?>
                <h4>WINEMAKER</h4>
                <p><?php echo get_field("sommelier");?></p>
                <h4>PAIRING</h4>
                <p><?php echo get_field("pairing");?></p>
                <h4>IDEAL TEMPRATURE</h4>
                <p><?php echo get_field("ideal_temperature");?></p>
              </div>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?> 
            
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
          <div class="swiper-button-next swiper-button-white"></div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="grid-100 grid-parent moments" id="moments">
      <div class="grid-50 grid-parent tablet-grid-50 mobile-grid-100">
        <div class="grid-100 grid-parent">
          <div class="logo-120-moments bg-gris">
            <img src="<?php echo get_field("logo_120_moments");?>">
          </div>
        </div>
        <div class="texto-120-moments">
          <p><?php echo get_field("120_moments_bajada");?></p>
        </div>
        <div class="swiper-container swiper-container2">
          <div class="swiper-wrapper videos-120-moments">
          
              <?php
              $args = array(
              'orderby' => 're-order',
              'posts_per_page' => 10,
              'post_type' => '120_moments',
              );
              $videos_home = new WP_Query($args);
              $nn = 4;   
              while ( $videos_home->have_posts() ) : $videos_home->the_post();
                if( get_field('ocultar')==2 ):
              ?>
              <a href="<?php echo get_field("link_video");?>" class="swiper-slide swipebox" rel="gallery-<?php echo $nn;?>">
                <img src="<?php echo get_template_directory_uri();?>/assets/svg/icon-play.svg" class="play">
                <img src="<?php echo get_field("imagen_fondo");?>">
              </a>
              <?php
                endif;
                $nn++;
              endwhile;
              wp_reset_postdata();
              ?>
            
          </div>
          <div class="swiper-button-prev swiper-button-white"></div>
          <div class="swiper-button-next swiper-button-white"></div>
        </div>
      </div>
      <div class="grid-50 grid-parent tablet-grid-50 mobile-grid-100 info" style="background:url(<?php echo get_field("imagen_publicidad");?>) center no-repeat; background-size: cover;
   background-position: 50% 2%;">
        <a href="<?php echo get_field("publicidad_enlace");?>" target="_blank" class="btn-info">
          <?php echo get_field("publicidad_titulo_enlace");?> 
        </a>
      </div>
    </div>
  </section>
  <section>
    <div class="grid-100 grid-parent hide-on-mobile banner">
      <?php if( get_field("enlace_publicidad_2")!="" ): ?>
      <a href="<?php echo get_field("enlace_publicidad_2");?>" target="_blank">
        <img src="<?php echo get_field("imagen_publicidad_2");?>">
      </a>
    <?php endif; ?>
    </div>
  </section>
  <?php if( get_field("ocultar_events")==2 ){ ?>
  <section id="events">
    <div class="grid-100 grid-parent bg-eventos">
      <h3><?php echo get_field("titulo_events");?> <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-events.png"></h3>
      <div class="grid-container" id="tabs">
        <div class="grid-100 grid-parent tabs">
          <ul>
            <?php 
            $terms = get_categories( 
                  array(
                    'hide_empty' => false,
                    'parent' => 38,
                    'order_by' => 're-order'
                  )
            );
            foreach($terms  as $term){ 
              ++$tab;
            ?>
            <li><a href="#tabs-<?php echo $tab;?>"><?php echo $term->name;?></a></li>
            <?php 
            }
            ?> 
          </ul>
        </div>
        <?php 
        $terms = get_categories( 
          array(
            'hide_empty' => false,
            'parent' => 38,
            'order_by' => 're-order'
          )
        );
        $tab = 0;
        $c = 3;
        foreach($terms  as $term){ 
        ++$tab;
        $c++;
        ?>
        <div id="tabs-<?php echo $tab;?>">
          <div class="swiper-container swiper-container-tab<?php echo $tab?>">
            <div class="swiper-wrapper">
                              
              <?php
              $args = array(
                'orderby' => 're-order',
                'posts_per_page' => -1,
                'cat' => $term->term_id,
                'post_type' => 'calendar',
              );
              $calenrar = new WP_Query($args);   

              $meses = array("","Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");

              $cont = 1;
              while ( $calenrar->have_posts() ) : $calenrar->the_post();

              $cont++;

              $fecha_inicio = get_field("fecha_inicio");
              $fecha_fin = get_field("fecha_fin");

              list($fini,$horaini) = explode(" ",$fecha_inicio);              
              list($fend,$horaend) = explode(" ",$fecha_fin);

              list($diaini,$mesini,$anoini) = explode("/",$fini);
              list($diaend,$mesend,$anoend) = explode("/",$fend);

              if($fini==$fend){
                $ini = $diaini." ".$meses[intval($mesini)];
                $end = $horaini. " a ".$horaend;
              } else {
                $ini = $diaini." ".$meses[intval($mesini)];
                $end = $diaend." ".$meses[intval($mesend)];
              }


              ?> 
              <div class="swiper-slide">
                <div class="grid-33 tablet-grid-33 mobile-grid-100 bg-rojo-evento">
                  <div class="grid-100 grid-parent">
                    <div class="caja-fecha">
                      <?php echo $ini;?><br>
                      -<br>
                      <?php echo $end;?>
                    </div>
                    <div class="titulo-evento">
                      <h3><span class="linea-titulo"><?php the_title();?></span></h3>
                      <?php the_content();?>
                    </div>
                  </div>
                </div>
                </div>
              <?php
              endwhile;
              wp_reset_postdata();
              ?>  
              
            </div>
            <div class="swiper-button-prev swiper-button-white"></div>
            <div class="swiper-button-next swiper-button-white"></div>
          </div>
        </div>
        <?php 
        }
        ?>
      </div>
    </div>
  </section>
  <?php } ?>
    
<?php get_footer(); ?>