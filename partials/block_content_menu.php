<?
/**
 * Retrive and display content along with menu lists
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 */

?>

<section class="content">
    
    <figure class="bodyText">

        <h1><? if ( $post->post_name != "about" ) : the_title(); endif; ?></h1>
        <?
            the_content();

            foreach( get_field('menus') as $menu ): ?>

            <a class="button" href="<?= $menu['download_file']['url'] ?>" rel="nofollow" target="_blank"><?= $menu['menu_title'] ?></a>        
        <? endforeach; ?>



    </figure>

</section>