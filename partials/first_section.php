<?
/**
 * First section (includes navigation and first section content)
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 */

 // Get navigation items
 $menu_links = get_field('menu_links', 'option');
?>

<!-- NAVIGATION TRIGGER FOR MOBILE -->
<div class="navControl">
    <a id="navLink">MENU</a>
</div>

<!-- NAVIGATION -->
<nav id="navMenu">
    <?php if (isset($menu_links) && is_array($menu_links)) : ?>
        <?php foreach ($menu_links as $link) : ?>
            <a class="navLink <?= $link['is_internal'] == 'internal' ? 'internal' : 'external' ?>" href="<?= $link['href_value']; ?>"><?= $link['name']; ?></a>
        <?php endforeach; ?>
    <?php endif; ?>
    <a class="navLink" href="https://woodheadrestaurantgroup.co.uk/" target="_blank">OUR GROUP</a>
</nav>

<!-- START SECTION: ABOUT -->
<article class="first">
    <?
        get_template_part( 'partials/block_image' );
        get_template_part( 'partials/block_content' );
    ?>
</article>
<!-- END SECTION: ABOUT -->