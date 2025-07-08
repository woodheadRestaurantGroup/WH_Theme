<?
/**
 * Retrive and display content along with career opportunities
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 */

?>

<section class="content">
    
    <figure class="bodyText">
        <?
            the_content();

            if ( get_field('jobs') ): ?>
                <h1>Current Openings</h1>
                <? foreach( get_field('jobs') as $job ): ?>

                    <h2><?= $job['job_title'] ?></h2> 
                    <p><?= $job['job_description'] ?></p>
                    <a class="button" href="<?= $job['job_url'] ?>" rel="nofollow" target="_blank">APPLY NOW</a>
                    <hr class="divider">
                <? endforeach; ?>
            <? endif; ?>

    </figure>

</section>