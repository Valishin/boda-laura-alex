<?php

if(av_component_get_option__is_active($component_global_settings)){

    if(!av_component_get_option__hide_mobile($component_global_settings)){

    $options = av_component_get_options($component_global_settings);

    $tag = av_get_tag_for_title();
    $the_img = wp_get_attachment_image( $c_wedding_details__image['ID'], 'custom-full', "", array("class" => "c-wedding-details__image c-wedding-details__image o-bg-s__image js-anim-image", "data-speed" => "0.9") );
    $the_img_block_1 = wp_get_attachment_image( $c_wedding_details__block_image_1['ID'], 'custom-full', "", array("class" => "c-wedding-details__block-image c-wedding-details__block-image--1 o-bg-s__image js-anim-image", "data-speed" => "0.9") );
    $the_img_block_2 = wp_get_attachment_image( $c_wedding_details__block_image_2['ID'], 'custom-full', "", array("class" => "c-wedding-details__block-image c-wedding-details__block-image--2 o-bg-s__image js-anim-image", "data-speed" => "0.9") );
    $the_img_block_3 = wp_get_attachment_image( $c_wedding_details__block_image_3['ID'], 'custom-full', "", array("class" => "c-wedding-details__block-image c-wedding-details__block-image--3 o-bg-s__image js-anim-image", "data-speed" => "0.9") );

    ?>
        <!-- C WEDDING DETAILS -->
        <div 
            <?php echo $options['id-attr']; ?>
            class="c-wedding-details | js-wedding-details | <?php echo $options['special-classes']; ?> | js-anim-inview">
            <div 
                class="c-wedding-details__inner | js-wedding-details__inner | <?php echo $options['color-classes']; ?> | <?php echo $options['padding-classes']; ?>"
            >
                <div class="c-wedding-details__wrapper-image">
                    <?php echo $the_img; ?>
                </div>
                <div class="c-wedding-details__container | o-container">
                    <div class="c-wedding-details__col o-col-12@md">
                        <div class="c-wedding-details__wrapper-title">
                            <div class="c-wedding-details__title o-font-display-1"><?php echo $c_wedding_details__title; ?></div>
                        </div>                                                                            
                    </div>
                    <div class="c-wedding-details__col o-col-4@md">
                        <div class="c-wedding-details__wrapper-block-image c-wedding-details__wrapper-block-image--1">
                            <?php echo $the_img_block_1; ?>
                            <div class="c-wedding-details__wrapper-block-text">
                                <div class="c-wedding-details__block-text"><?php echo $c_wedding_details__block_text_1; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="c-wedding-details__col o-col-4@md">
                        <div class="c-wedding-details__wrapper-block-image c-wedding-details__wrapper-block-image--2">
                            <?php echo $the_img_block_2; ?>
                            <div class="c-wedding-details__wrapper-block-text">
                                <div class="c-wedding-details__block-text"><?php echo $c_wedding_details__block_text_2; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="c-wedding-details__col o-col-4@md">
                        <div class="c-wedding-details__wrapper-block-image c-wedding-details__wrapper-block-image--3">
                            <?php echo $the_img_block_3; ?>
                            <div class="c-wedding-details__wrapper-block-text">
                                <div class="c-wedding-details__block-text"><?php echo $c_wedding_details__block_text_3; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
}