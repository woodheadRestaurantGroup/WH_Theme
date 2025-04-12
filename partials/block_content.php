<?
/**
 * Retrive and display content along with special content types
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 */

?>

<section class="content">
    
    <figure class="bodyText">

        <h1><? if ( $post->post_name != "about" ) : the_title(); endif; ?></h1>
        <?the_content()?>

    </figure>

</section>