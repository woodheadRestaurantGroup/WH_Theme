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
        ?>
        <figure class="image <?= $orientation ?>">
            <img src="<?= $defaultUrl ?>" 
                 srcset="<?= implode(', ', $srcset) ?>"
                 sizes="(max-width: 768px) 100vw, 50vw"
                 alt="<?= esc_attr($image['image']['alt'] ?? '') ?>"
                 loading="lazy">
        </figure> 
    <?php endforeach; ?>
</section>