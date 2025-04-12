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
	    <meta name="keywords" content="<?php echo esc_attr($meta_keywords); ?>">
        <meta name="google" content="nositelinkssearchbox"/>
        <link rel="profile" href="http://gmpg.org/xfn/11">
	    <link rel="icon" href="<?php echo esc_url(site_icon_url()); ?>" type="image/x-icon">

        <!-- Schema.org markup -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Restaurant",
            "name": "<?php echo esc_js(get_bloginfo('name')); ?>",
            "description": "<?php echo esc_js(get_bloginfo('description')); ?>",
            "image": "<?php echo esc_url(get_field('site_image', 'option')); ?>",
            "servesCuisine": "<?php echo esc_js(get_field('cuisine_type', 'option')); ?>",
            "priceRange": "<?php echo esc_js(get_field('price_range', 'option')); ?>",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "<?php echo esc_js(get_field('address', 'option')['street_address']); ?>",
                "addressLocality": "<?php echo esc_js(get_field('address', 'option')['city']); ?>",
                "addressRegion": "<?php echo esc_js(get_field('address', 'option')['region']); ?>",
                "postalCode": "<?php echo esc_js(get_field('address', 'option')['postal_code']); ?>",
                "addressCountry": "<?php echo esc_js(get_field('address', 'option')['country']); ?>"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "<?php echo esc_js(get_field('geo_coordinates', 'option')['latitude']); ?>",
                "longitude": "<?php echo esc_js(get_field('geo_coordinates', 'option')['longitude']); ?>"
            },
            "openingHoursSpecification": [
                <?php 
                $opening_hours = get_field('opening_hours', 'option');
                if($opening_hours) {
                    $days = array();
                    foreach($opening_hours as $day) {
                        $days[] = '{
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "' . esc_js($day['day']) . '",
                            "opens": "' . esc_js($day['opens']) . '",
                            "closes": "' . esc_js($day['closes']) . '"
                        }';
                    }
                    echo implode(',', $days);
                }
                ?>
            ],
            "telephone": "<?php echo esc_js(get_field('phone_number', 'option')); ?>",
            "url": "<?php echo esc_url(home_url()); ?>",
            "sameAs": [
                <?php 
                $social_links = get_field('social_links', 'option');
                if($social_links) {
                    $links = array();
                    foreach($social_links as $link) {
                        $links[] = '"' . esc_url($link['url']) . '"';
                    }
                    echo implode(',', $links);
                }
                ?>
            ]
        }
        </script>

        <!-- MAILING LIST -->
        <script src="//a.mailmunch.co/app/v1/site.js"
            id="mailmunch-script"
            data-mailmunch-site-id="<?php echo esc_attr($mailmunch_site_id); ?>"
            async="async">
        </script>
        
        <!-- TRACKING -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr($google_analytics_account); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '<?php echo esc_js($google_analytics_account); ?>');
        </script>

        <!-- COOKIE YES -->
        <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/<?php echo esc_attr($cookie_yes_id); ?>/script.js"></script> 

        <!-- SET STYLESHEET VARS -->
        <?php get_template_part('lib/utils/theming'); ?>
    </head>

    <? wp_head(); ?>
  
    <body <?php body_class(); ?>>