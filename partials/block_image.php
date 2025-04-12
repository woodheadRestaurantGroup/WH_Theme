<?
/**
 * Retrieve images associated with post, select one image at random to display
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 */

// Setup image array
$images = get_field('images');
?>

<section class="images">
    <?php foreach ($images as $image) : 
        $orientation = $image['orientation'][0];
        $sizes = $image['image']['sizes'];
        // Get all available sizes for srcset
        $srcset = array();
        if (isset($sizes['thumbnail'])) $srcset[] = $sizes['thumbnail'] . ' 150w';
        if (isset($sizes['medium'])) $srcset[] = $sizes['medium'] . ' 300w';
        if (isset($sizes['medium_large'])) $srcset[] = $sizes['medium_large'] . ' 768w';
        if (isset($sizes['large'])) $srcset[] = $sizes['large'] . ' 1024w';
        if (isset($sizes['1536x1536'])) $srcset[] = $sizes['1536x1536'] . ' 1536w';
        
        // Default image URL based on orientation
        $defaultUrl = $orientation === "portrait" ? $sizes['medium_large'] : $sizes['1536x1536'];
        
        // Create a tiny placeholder image (1x1 pixel)
        $placeholder = 'data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22 viewBox%3D%220 0 1 1%22%2F%3E';
        ?>
        <figure class="image <?php echo esc_attr($orientation); ?>">
            <img src="<?php echo esc_url($placeholder); ?>" 
                 data-src="<?php echo esc_url($defaultUrl); ?>" 
                 data-srcset="<?php echo esc_attr(implode(', ', $srcset)); ?>"
                 sizes="(max-width: 768px) 100vw, 50vw"
                 alt="<?php echo esc_attr($image['image']['alt'] ?? ''); ?>"
                 class="lazy"
                 width="<?php echo esc_attr($image['image']['width']); ?>"
                 height="<?php echo esc_attr($image['image']['height']); ?>">
        </figure> 
    <?php endforeach; ?>
</section>