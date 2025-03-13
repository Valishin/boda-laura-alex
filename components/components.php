<?php

    $slug_flexible_content = 'components';
    
    if(!!$custom_id){
        $custom_id_end = $custom_id;
    }else{
        $custom_id_end = get_the_ID();
    }

    // $total_components = count(get_field($slug_flexible_content));

    // check if the flexible content field has rows of data
    if( have_rows($slug_flexible_content, $custom_id_end) ){

        $i = 1;
        $home_slug = 'home';
        $home_id = get_option('page_on_front');
        
        $GLOBALS['tag-h1-printed'] = false;

        // loop through the rows of data
        while ( have_rows($slug_flexible_content, $custom_id_end) ){

            the_row();

            $component_slug = get_row_layout();

            $component_global_settings = get_sub_field(SLUG_CGS);

            switch ($component_slug) {

                case 'c-hero':

                    $c_hero__overline           = get_sub_field($component_slug . '__overline');
                    $c_hero__title              = get_sub_field($component_slug . '__title');
                    $c_hero__cta                = get_sub_field($component_slug . '__cta');     
                    $c_hero__small_image        = get_sub_field($component_slug . '__small-image');
                    $c_hero__big_image          = get_sub_field($component_slug . '__big-image');
                    $c_hero__arrow_scroll       = get_sub_field($component_slug . '__arrow-scroll');

                break;                             

                case 'c-image-text':

                    $c_image_text__position               = get_sub_field($component_slug . '__position');
                    $c_image_text__image                  = get_sub_field($component_slug . '__image');
                    $c_image_text__title                  = get_sub_field($component_slug . '__title');
                    $c_image_text__description            = get_sub_field($component_slug . '__description');
                    $c_image_text__cta                      = get_sub_field($component_slug . '__cta-1');
                    $c_image_text__cta_style                = get_sub_field($component_slug . '__cta-1-style');

                break;              

                case 'c-text':

                    $c_text__overline                   = get_sub_field($component_slug . '__overline');
                    $c_text__title                      = get_sub_field($component_slug . '__title');
                    $c_text__text                       = get_sub_field($component_slug . '__text');
                    $c_text__cta_1                      = get_sub_field($component_slug . '__cta-1');
                    $c_text__cta_1_style                = get_sub_field($component_slug . '__cta-1-style');
                    $c_text__alignment                  = get_sub_field($component_slug . '__alignment');

                break;                                             

                case 'c-gallery':

                    $c_gallery__gallery               = get_sub_field($component_slug . '__gallery');
                    $c_gallery__title                 = get_sub_field($component_slug . '__title');
                    $c_gallery__bg_image              = get_sub_field($component_slug . '__bg-image');
                    $c_gallery__bg_image_2              = get_sub_field($component_slug . '__bg-image-2');

                break;

                case 'c-slider':

                    $c_slider__overline             = get_sub_field($component_slug . '__overline');
                    $c_slider__title                = get_sub_field($component_slug . '__title');
                    $c_slider__slider               = get_sub_field($component_slug . '__slider');

                break;

                case 'c-two-image-text':

                    $c_two_image_text__overline     = get_sub_field($component_slug . '__overline');
                    $c_two_image_text__title        = get_sub_field($component_slug . '__title');
                    $c_two_image_text__image_left   = get_sub_field($component_slug . '__image-left');
                    $c_two_image_text__title_left   = get_sub_field($component_slug . '__title-left');
                    $c_two_image_text__text_left    = get_sub_field($component_slug . '__text-left');
                    $c_two_image_text__cta_left     = get_sub_field($component_slug . '__cta-left');
                    $c_two_image_text__image_right  = get_sub_field($component_slug . '__image-right');
                    $c_two_image_text__title_right  = get_sub_field($component_slug . '__title-right');
                    $c_two_image_text__text_right   = get_sub_field($component_slug . '__text-right');
                    $c_two_image_text__cta_right    = get_sub_field($component_slug . '__cta-right');

                break;

                case 'c-animated-text':

                    $c_animated_text__title_1       = get_sub_field($component_slug . '__title-1');
                    $c_animated_text__title_2       = get_sub_field($component_slug . '__title-2');
                    $c_animated_text__description   = get_sub_field($component_slug . '__description'); 
                    $c_animated_text__image         = get_sub_field($component_slug . '__image'); 
                    $c_animated_text__image_bg      = get_sub_field($component_slug . '__image-bg'); 

                break;
                    
                case 'c-wedding-details':

                    $c_wedding_details__title       = get_sub_field($component_slug . '__title');
                    $c_wedding_details__image      = get_sub_field($component_slug . '__image');
                    $c_wedding_details__block_image_1      = get_sub_field($component_slug . '__block-image-1'); 
                    $c_wedding_details__block_image_2      = get_sub_field($component_slug . '__block-image-2'); 
                    $c_wedding_details__block_image_3      = get_sub_field($component_slug . '__block-image-3'); 
                    $c_wedding_details__block_text_1      = get_sub_field($component_slug . '__block-text-1'); 
                    $c_wedding_details__block_text_2      = get_sub_field($component_slug . '__block-text-2'); 
                    $c_wedding_details__block_text_3      = get_sub_field($component_slug . '__block-text-3'); 

                default:
                    // DEFAULT
                break;

                
            } // END SWITCH

            include( locate_template('components/' . $component_slug . '.php') );

            $i++;
        
        }

    }

?>
