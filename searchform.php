<?php
/**
 * default search form
 */
?>
    <div class="mb-5">
      <form role="search" method="get" class="form search-form" action="/index.php">
   <div class="input-group">
   <input class="form-control" type="search" placeholder="<?php echo esc_attr( 'Buscar…', 'presentation' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
   <span class="input-group-btn">
   <button class="btn btn-secondary" type="submit" id="search-submit"><i class="fa fa-search"></i></button>
   </span>
   </form>
   </div>

    