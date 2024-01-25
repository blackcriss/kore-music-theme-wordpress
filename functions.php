<?php 

//Platzi
function assets(){
  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', '', '5.1.0', 'all');
  wp_register_style('boston', get_template_directory_uri().'/fuentes/Boston-ExtraLightIt_0.ttf', '', '1.0', 'all');
  wp_register_style('endura', get_template_directory_uri().'/fuentes/EnduraRough-Regular_0.ttf', '', '1.0', 'all');
  wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap', 'boston', 'endura'), '1.0', 'all');

  //wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', '', '1.0', true);
}
add_action('wp_enqueue_scripts', 'assets');

//Fin Platzi


function temaKM_register_my_menus() {
  register_nav_menus(
    array(
      'superior' => __( 'Menú Superior' )
     )
   );
 }
add_action( 'init', 'temaKM_register_my_menus' );

//aqui creo mi menú
/*if(function_exists('register_nav_menus')){
    register_nav_menus (array('superior' => 'Menú Principal superior'));
}*/

//aqui creo una clase para <a>
add_filter('nav_menu_link_attributes', 'clase_menu_invento', 10, 3);

function clase_menu_invento($atts, $item, $args){
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}




function temaKM_setup(){
  //agregando imagenes destacadas
  if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
  }
  add_theme_support('title-tag');

}
add_action( 'after_setup_theme', 'temaKM_setup' );

?>
