<?
/**
 * Standard section (applies to all section types barring banner and about template)
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 */
?>

<!-- START SECTION: <? the_title() ?> -->
<article id="<?=$post->post_name?>">
    <?
        get_template_part( 'partials/block_image' );
        get_template_part( 'partials/block_content' );
    ?>
</article>
<!-- END SECTION: <? the_title() ?> -->