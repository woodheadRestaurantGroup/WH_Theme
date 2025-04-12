<?
/**
 * Retrieve menu links and display
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 */

foreach(get_field('menus') as $menu):?>

    <a class="button" href="<?=$menu['download_file']['url']?>" target="_blank" rel="nofollow"><?=$menu['menu_title']?></a>

<? endforeach; ?>