<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bercometal
 */

// Filtrando por ID
if (in_category(9)) {
	include get_template_directory() . '/single-empresa.php';
    //include(TEMPLATEPATH . '/single1.php');
} elseif (in_category(7)) {
	include get_template_directory() . '/single-particulares.php';
    //include(TEMPLATEPATH . '/single2.php');
} elseif (in_category(8)) {
	include get_template_directory() . '/single-solatube.php';
    //include(TEMPLATEPATH . '/single-default.php');
}
else {
	include get_template_directory() . '/single.php';
    //include(TEMPLATEPATH . '/single-default.php');
}
 
// Filtrando por slug
/*if (in_category('noticias')) {
    include(TEMPLATEPATH . '/single-noticias.php');
} elseif (in_category('eventos')) {
    include(TEMPLATEPATH . '/single-eventos.php');
} else { // Sino, cargo otro single por defecto
    include(TEMPLATEPATH . '/single-default.php');*/
?>

