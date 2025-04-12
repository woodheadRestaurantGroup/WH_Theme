<?
/**
 * Retrieve posts and associated images then call up relevant section blocks
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 */

$loop = new WP_QUERY(array('post_type' => 'page', 'posts_per_page' => -1));

if ( $loop->have_posts() ) : 
	while ( $loop->have_posts() ):
		$loop->the_post();
		$template = get_post_meta($post->ID, '_wp_page_template', true);

		if ( $template != 'page-templates/single.php' ) :
			if ( $template == 'page-templates/about.php' ) :
				// INCLUDES NAV
				get_template_part( 'partials/first_section' );
			elseif ( $template == 'page-templates/menu.php' ) :
				// MENU SECTION
				get_template_part( 'partials/menu_section' );
			else :
				// GENERIC SECTION
				get_template_part( 'partials/block_section' );
			endif;
        endif;

    endwhile;

endif;

wp_reset_query();
?>
