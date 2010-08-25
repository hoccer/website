<?php $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<div>
	<input type="search" placeholder="Search" value="' . get_search_query() . '" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
	</div>
	</form>';
  echo $form;
?>
