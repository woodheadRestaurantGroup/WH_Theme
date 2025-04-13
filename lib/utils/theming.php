<?php
       // VARS SETUP
       $font_body = get_field('body_font', 'option');
       $font_head = get_field('head_font', 'option');
       $font_body_weight = get_field('body_font_weight', 'option');
       $font_head_weight = get_field('head_font_weight', 'option');
       $font_body_size = get_field('body_font_size', 'option');
       $font_head_size = get_field('head_font_size', 'option');
       $text_colour = get_field('text_colour', 'option');
       $heading_colour = get_field('heading_colour', 'option');
       $link_colour = get_field('link_colour', 'option');
       $light_link_colour = get_field('light_link_colour', 'option');
       $link_colour_alt = get_field('link_colour_alt', 'option');
       $accent_colour = get_field('accent_colour', 'option');
       $bg_primary_colour = get_field('bg_primary_colour', 'option');
       $bg_alt_colour = get_field('bg_alt_colour', 'option');
       $bg_accent_colour = get_field('bg_accent_colour', 'option');
       $bg_accent_colour_darken = get_field('bg_accent_colour_darken', 'option');
       $divider_image = get_field('section_divider', 'option');

       ?>
       <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        :root {
            /* Fonts */
            --font-body: <?= $font_body; ?>;
            --font-head: <?= $font_head; ?>;
            --font-body-weight: <?= $font_body_weight; ?>;
            --font-head-weight: <?= $font_head_weight; ?>;
            --font-body-size: <?= $font_body_size; ?>;
            --font-head-size: <?= $font_head_size; ?>;

            /* Colors */
            --text-color: <?= $text_colour; ?>;
            --heading-color: <?= $heading_colour; ?>;
            --link-color: <?= $link_colour; ?>;
            --light-link-color: <?= $light_link_colour; ?>;
            --link-color-alt: <?= $link_colour_alt; ?>;
            --accent-color: <?= $accent_colour; ?>;
            --bg-primary-color: <?= $bg_primary_colour; ?>;
            --bg-alt-color: <?= $bg_alt_colour; ?>;
            --bg-accent-color: <?= $bg_accent_colour; ?>;
            --bg-accent-color-darken: <?= $bg_accent_colour_darken; ?>;

            /* Layout */
            --nav-height: 61.21px;

            /* Divider Image */
            <?php if ($divider_image) : ?>
                --divider-image: url("<?= $divider_image; ?>");
            <?php else : ?>
                --divider-image: none;
            <?php endif; ?>
        }
       </style>