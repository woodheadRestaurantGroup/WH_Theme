<?php
/**
 * The template for displaying the header
 *
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 */

 // Get ACF Theme Options
 $google_analytics_account = get_field('google_analytics_account', 'option');
 $mailmunch_site_id = get_field('mailmunch_site_id', 'option');
 $cookie_yes_id = get_field('cookie_yes_id', 'option');
 $meta_keywords = get_field('meta_keywords', 'option');
?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
   
    <head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?></title>

        <meta name="description" content="<?php bloginfo('description'); ?>"/>
	    <meta name="keywords" content="<?= $meta_keywords; ?>">
        <meta name="google" content="nositelinkssearchbox"/>
        <link rel="profile" href="http://gmpg.org/xfn/11">
	    <link rel="icon" href="<?= site_icon_url();?>" type="image/x-icon">

        <!-- MAILING LIST -->
        <script src="//a.mailmunch.co/app/v1/site.js"
            id="mailmunch-script"
            data-mailmunch-site-id="<?= $mailmunch_site_id; ?>"
            async="async">
        </script>
        
        <!-- TRACKING -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $google_analytics_account; ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '<?= $google_analytics_account; ?>');
        </script>

        <!-- COOKIE YES -->
        <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/<?= $cookie_yes_id; ?>/script.js"></script> 

        <!-- SET STYLESHEET VARS -->
        <?php get_template_part('lib/utils/theming'); ?>
    </head>

    <? wp_head(); ?>
  
    <body <?php body_class(); ?>>