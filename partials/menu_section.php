<?
/**
 * Variation on standard section to display a list of menus below content
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 */
?>

<!-- START SECTION: <? the_title() ?> -->
<article id="<?=$post->post_name?>">
    <?
        get_template_part( 'partials/block_image' );
        get_template_part( 'partials/block_content_menu' );
    ?>
</article>
<!-- END SECTION: <? the_title() ?> -->