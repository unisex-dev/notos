<?php
function wpbsearchform( $form ) {

    $form = ' <form action="#" id="search-form" method="get" role="search" action="' . home_url( '/' ) . '">
              <input type="text" class="form-control" placeholder="Search..." autocomplete="on" name="seach" value="' . get_search_query() . '" name="s" id="s>
              <button type="submit" title="Search" id="search-submit" value="'. esc_attr__('Search') .'>
               <i class="fa fa-search"></i>
                  </button>
                </form>'; 

    return $form;

}

add_shortcode('wpbsearch', 'wpbsearchform');
// Fin Funcion
?>