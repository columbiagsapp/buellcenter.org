<div class="taxonomy-term-page">

<?php

/*
	$view = views_get_view('listing_by_taxonomy');
	
	$display = $view->execute_display('Page', $tids);


	print $display;
*/


	$output = '';
	$viewName = 'listing_by_taxonomy';
	$display_id = 'page_4';
	$output = views_embed_view($viewName, $display_id, $tids['0']);
	print $output;
?>

</div>