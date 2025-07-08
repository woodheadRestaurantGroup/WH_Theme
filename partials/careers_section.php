<?
/**
 * Variation on standard section to display a list of career opportunities below content
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 */
?>

<!-- START SECTION: <? the_title() ?> -->
<article id="<?=$post->post_name?>">
    <?
        get_template_part( 'partials/block_content_careers' );
    ?>
</article>
<!-- END SECTION: <? the_title() ?> -->