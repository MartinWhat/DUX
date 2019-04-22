<?php 
get_header(); 


// GET ID
global $wp_query;
$cat_id = get_query_var('cat');

$cat_root_id = _get_cat_root_id($cat_id);


// GET STYLE
$meta_style = _get_tax_meta($cat_root_id, 'style');

$loop_style = 'default';
if( !empty($meta_style) && in_array($meta_style, array('default', 'product')) ){
	$loop_style = $meta_style;
}


// paging
$pagedtext = '';
if( $paged && $paged > 1 ){
	$pagedtext = ' <small>第'.$paged.'页</small>';
}

?>

<?php include 'loop-'.$loop_style.'.php'; ?>

<?php get_footer(); ?>