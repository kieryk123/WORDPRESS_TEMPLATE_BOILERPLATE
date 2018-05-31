<?php get_header(); ?>

<?php
$args = array(
	'post_type'   => 'bilety',
	'post_status' => 'publish',
	'order' => 'DESC',
 );

$tickets = new WP_Query( $args );
if( $tickets->have_posts() ) :
?>

<?php
while( $tickets->have_posts() ) :
$tickets->the_post();
?>

<!-- HTML HERE -->

<?php
endwhile;
wp_reset_postdata();
?>

<?php
else :
esc_html_e( 'Brak biletów.', 'text-domain' );
endif;
?>

<?php get_footer(); ?>
