<?php
/**
 * search form
 */
?>
    <div class="mb-5">
    <form id="buscar" name="buscar" role="search" method="get" class="form search-form" action="/index.php">
    <div class="input-group">
	<input class="form-control" type="search" name="buscar" placeholder="<?php echo esc_attr( 'Buscar…', 'presentation' ); ?>" tabindex="1" accesskey="E" title="buscar:" autofocus     name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>">

    <span class="input-group-btn">
	<button class="btn btn-secondary"  id="search-submit" type="submit" accesskey="B" tabindex="2" title="buscar"><i class="fa fa-search"></i></button>
    </span>

	</form>
	</div>
