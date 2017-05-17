<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title(' ', false,'');?></title>

  <?php wp_head();?>

  <link href="<?php echo get_template_directory_uri();?>/assets/stylesheets/screen.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/unsemantic-grid-responsive-tablet.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/fakeLoader/fakeLoader.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
  <header>
    <div class="grid-100 grid-parent hide-on-tablet hide-on-desktop">
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <?php
          $menu = wp_get_nav_menu_items('Menu Principal');
         
          foreach($menu as $m){
              if($m->menu_item_parent!=0) continue;
              echo "<a href='".$m->subtitle."'>$m->title</a>";
          }

          ?>
      </div>
      <div class="menu-mobile" onclick="openNav()">
        &#9776;
      </div>
    </div>
    <div class="grid-100 grid-parent bg-rojo-header">
      <?php if ( is_active_sidebar( 'redes-header' ) ) : dynamic_sidebar( 'redes-header' ); endif; ?>
    </div>
    <div class="grid-100 grid-parent bg-gris-header">
      <div class="grid-50 grid-parent tablet-grid-50 mobile-grid-100">
        <div class="logo-header">
          <?php if ( is_active_sidebar( 'logo-header' ) ) : dynamic_sidebar( 'logo-header' ); endif; ?>
        </div>
      </div>
      <div class="grid-50 grid-parent tablet-grid-50 hide-on-mobile">
        <nav>
          <ul>
            <?php
            $menu = wp_get_nav_menu_items('Menu Principal');
            global $the_id;
            
            foreach($menu as $m){
                if($m->menu_item_parent!=0) continue;
                echo "<li ".$curr."><a href='".$m->subtitle."'>$m->title</a></li>";
            }

            ?>
          </ul>
        </nav>
      </div>
    </div>
  </header>
               