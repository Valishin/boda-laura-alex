<?php

    if(av_component_get_option__is_active($component_global_settings)){

        if(!av_component_get_option__hide_mobile($component_global_settings)){

        $options = av_component_get_options($component_global_settings);

        $the_img = wp_get_attachment_image( $c_animated_text__image['ID'], 'custom-full', "", array("class" => "c-animated-text__image js-anim-image o-bg-s__image", "data-speed" => "0.9") );        

        $the_img_bg = wp_get_attachment_image( $c_animated_text__image_bg['ID'], 'custom-full', "", array("class" => "c-animated-text__image-bg o-bg-s__image", "data-speed" => "0.7") );

        $the_img_bg_2 = wp_get_attachment_image( $c_animated_text__image_bg['ID'], 'custom-full', "", array("class" => "c-animated-text__image-bg o-bg-s__image", "data-speed" => "1.6") );
        
        ?>

            <!-- C IMAGE TEXT -->
            <div 
                <?php echo $options['id-attr']; ?>
                class="c-animated-text | js-animated-text | <?php echo $options['special-classes']; ?> | is-<?php echo $c_image_text__position; ?> | js-anim-inview"
            >
                <div 
                    class="c-animated-text__inner | js-animated-text__inner | <?php echo $options['color-classes']; ?> | <?php echo $options['padding-classes']; ?>"
                >
                    <div class="c-animated-text__wrapper-image-bg c-animated-text__wrapper-image-bg--1"><?php echo $the_img_bg; ?></div>
                    <div class="c-animated-text__wrapper-image-bg c-animated-text__wrapper-image-bg--2"><?php echo $the_img_bg_2; ?></div>
                    <div class="c-animated-text__container o-container o-anim-fade-in">
                        <div class="c-animated-text__col o-col-12@md o-col-8@sm o-col-4@xs">
                            <div class="c-animated-text__wrapper-title js-text-movement o-font-display-1">
                                <div class="c-animated-text__title c-animated-text__title--1 js-text-movement--invest"><?php echo $c_animated_text__title_1; ?></div>
                                <div class="c-animated-text__title c-animated-text__title--2 js-text-movement--invest"><?php echo $c_animated_text__title_2; ?></div>
                            </div>                            
                        </div>    
                        <div class="c-animated-text__col o-col-8@md o-col-push-2@md o-col-8@sm o-col-4@xs">
                            <div class="c-animated-text__wrapper-image shadow-img">
                                <?php echo $the_img; ?>
                                <div class="c-animated-text__wrapper-description o-font-display-button">
                                    <div class="c-animated-text__description"><?php echo $c_animated_text__description; ?></div>
                                </div>
                            </div>
                        </div>                    
                    </div>

                </div>
            </div> 

        <?php

        }

    }
?>
