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
       

       // Function to get font-specific styles
       function get_font_body_styles($font_body, $font_body_weight) {
           $styles = '';
           $font_face = '';
           
            switch($font_body) {
               case 'Montserrat':
                   $font_face = '
                       @font-face {
                           font-family: "Montserrat";
                           src: url("' . get_template_directory_uri() . '/assets/fonts/Montserrat/Montserrat-VariableFont_wght.ttf") format("truetype");
                           font-weight: ' . $font_body_weight . ';
                           font-style: normal;
                       }
                   ';
                   $styles = '
                       --font-body: "Montserrat", sans-serif;
                       --font-body-weight: ' . $font_body_weight . ';
                       --font-body-line-height: 1.5;
                       --font-body-letter-spacing: 0.01em;
                   ';
                   break;
               case 'Poppins':
                   $font_face = '
                       @font-face {
                           font-family: "Poppins";
                           src: url("' . get_template_directory_uri() . '/assets/fonts/Poppins/Poppins-Regular.ttf") format("truetype");
                           font-weight: ' . $font_body_weight . ';
                           font-style: normal;
                       }
                   ';
                   $styles = '
                       --font-body: "Poppins", sans-serif;
                       --font-body-weight: ' . $font_body_weight . ';
                       --font-body-line-height: 1.6;
                       --font-body-letter-spacing: 0.02em;
                   ';
                   break;
               case 'Mulish':
                   $font_face = '
                       @font-face {
                           font-family: "Mulish";
                           src: url("' . get_template_directory_uri() . '/assets/fonts/Mulish/Mulish-VariableFont_wght.ttf") format("truetype");
                           font-weight: ' . $font_body_weight . ';
                           font-style: normal;
                       }
                   ';
                   $styles = '
                       --font-body: "Mulish", sans-serif;
                       --font-body-weight: ' . $font_body_weight . ';
                       --font-body-line-height: 1.7;
                       --font-body-letter-spacing: 0.015em;
                   ';
                   break;
               case 'Libre Baskerville':
                   $font_face = '
                       @font-face {
                           font-family: "Libre Baskerville";
                           src: url("' . get_template_directory_uri() . '/assets/fonts/LibreBaskerville/LibreBaskerville-Regular.ttf") format("truetype");
                           font-weight: ' . $font_body_weight . ';
                           font-style: normal;
                       }
                   ';
                   $styles = '
                       --font-body: "Libre Baskerville", serif;
                       --font-body-weight: ' . $font_body_weight . ';
                       --font-body-line-height: 1.8;
                       --font-body-letter-spacing: 0.01em;
                   ';
                   break;
               default:
                   $font_face = '
                       @font-face {
                           font-family: "Inter-Regular";
                           src: url("' . get_template_directory_uri() . '/assets/fonts/Inter-Regular.ttf") format("truetype");
                           font-weight: 400;
                           font-style: normal;
                       }
                   ';
                   $styles = '
                       --font-body: "Inter-Regular", sans-serif;
                       --font-body-weight: ' . $font_body_weight . ';
                       --font-body-line-height: 1.5;
                       --font-body-letter-spacing: 0.01em;
                   ';
           }
           
           return $font_face . $styles;
       }

       // Function to get heading font-specific styles
       function get_font_head_styles($font_head, $font_head_weight) {
           $styles = '';
           $font_face = '';
           
           switch($font_head) {
               case 'Montserrat':
                   $font_face = '
                       @font-face {
                           font-family: "Montserrat";
                           src: url("' . get_template_directory_uri() . '/assets/fonts/Montserrat/Montserrat-VariableFont_wght.ttf") format("truetype");
                           font-weight: ' . $font_head_weight . ';
                           font-style: normal;
                       }
                   ';
                   $styles = '
                       --font-head: "Montserrat", sans-serif;
                       --font-head-weight: ' . $font_head_weight . ';
                       --font-head-line-height: 1.2;
                       --font-head-letter-spacing: -0.02em;
                       --font-head-text-transform: uppercase;
                   ';
                   break;
               case 'Poppins':
                   $font_face = '
                       @font-face {
                           font-family: "Poppins";
                           src: url("' . get_template_directory_uri() . '/assets/fonts/Poppins/Poppins-Bold.ttf") format("truetype");
                           font-weight: ' . $font_head_weight . ';
                           font-style: normal;
                       }
                   ';
                   $styles = '
                       --font-head: "Poppins", sans-serif;
                       --font-head-weight: ' . $font_head_weight . ';
                       --font-head-line-height: 1.3;
                       --font-head-letter-spacing: -0.01em;
                       --font-head-text-transform: uppercase;
                   ';
                   break;
               case 'Mulish':
                   $font_face = '
                       @font-face {
                           font-family: "Mulish";
                           src: url("' . get_template_directory_uri() . '/assets/fonts/Mulish/Mulish-VariableFont_wght.ttf") format("truetype");
                           font-weight: 200 1000;
                           font-style: normal;
                       }
                   ';
                   $styles = '
                       --font-head: "Mulish", sans-serif;
                       --font-head-weight: ' . $font_head_weight . ';
                       --font-head-line-height: 1.2;
                       --font-head-letter-spacing: -0.015em;
                       --font-head-text-transform: uppercase;
                   ';
                   break;
               case 'Libre Baskerville':
                   $font_face = '
                       @font-face {
                           font-family: "Libre Baskerville";
                           src: url("' . get_template_directory_uri() . '/assets/fonts/LibreBaskerville/LibreBaskerville-Bold.ttf") format("truetype");
                           font-weight: ' . $font_head_weight . ';
                           font-style: normal;
                       }
                   ';
                   $styles = '
                       --font-head: "Libre Baskerville", serif;
                       --font-head-weight: ' . $font_head_weight . ';
                       --font-head-line-height: 1.3;
                       --font-head-letter-spacing: -0.01em;
                       --font-head-text-transform: uppercase;
                   ';
                   break;
               default:
                   $font_face = '
                       @font-face {
                           font-family: "Inter-Regular";
                           src: url("' . get_template_directory_uri() . '/assets/fonts/Inter-Regular.ttf") format("truetype");
                           font-weight: ' . $font_head_weight . ';
                           font-style: normal;
                       }
                   ';
                   $styles = '
                       --font-head: "Inter-Regular", sans-serif;
                       --font-head-weight: ' . $font_head_weight . ';
                       --font-head-line-height: 1.2;
                       --font-head-letter-spacing: -0.02em;
                       --font-head-text-transform: uppercase;
                   ';
           }
           
           return $font_face . $styles;
       }

       ?>
       <style type="text/css">
        :root {
            /* Fonts */
            <?= get_font_body_styles($font_body, $font_body_weight); ?>
            <?= get_font_head_styles($font_head, $font_head_weight); ?>
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

            /* Divider Image */
            <?php if ($divider_image) : ?>
                --divider-image: url("<?= $divider_image; ?>");
            <?php else : ?>
                --divider-image: none;
            <?php endif; ?>
        }
       </style>