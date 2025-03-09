<?php

if(av_component_get_option__is_active($component_global_settings)){

    if(!av_component_get_option__hide_mobile($component_global_settings)){

        $options = av_component_get_options($component_global_settings);

        $tag = av_get_tag_for_title();
            
            ?>

                <!-- C GALLERY -->
                <div class="c-gallery | js-gallery | <?php echo $options['special-classes']; ?>">                    
                    <div 
                        class="c-gallery__inner | js-gallery__inner | <?php echo $options['color-classes']; ?> | <?php echo $options['padding-classes']; ?>"
                        >                        
                        <div class="c-gallery__container | o-container">                            
                            <div class="c-gallery__col | o-col-12@md | o-col-8@sm | o-col-4@xs">
                                <div class="c-gallery__wrapper-title">
                                    <div class="c-gallery__title o-font-display-1 js-split-text">
                                        <?php echo $c_gallery__title; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="c-gallery__col | o-col-12@md | o-col-8@sm | o-col-4@xs">
                                <div class="c-gallery__wrapper-gallery" id="c-gallery">
                                    <?php
                                        if(count($c_gallery__gallery) > 0){
                                            foreach($c_gallery__gallery as $current_item){
                                                $the_img = wp_get_attachment_image( $current_item['image']['ID'], 'custom-full', "", array("class" => "c-gallery__image o-bg-s__image js-anim-image", "data-speed" => "0.9") );
                                                $the_img_url = wp_get_attachment_image_src( $current_item['image']['ID'], 'custom-full' )[0];
                                                $image_path = get_attached_file( $current_item['image']['ID'] );
                                                $image_size = getimagesize( $image_path );
                                                ?>                                            
                                                    <a href="<?php echo $the_img_url; ?>" data-pswp-width="<?php echo $image_size[0]; ?>" data-pswp-height="<?php echo $image_size[1]; ?>" target="_blank" class="c-gallery__wrapper-image">
                                                        <?php echo $the_img; ?>
                                                    </a>                                                                        
                                                <?php
                                            }
                                        }
                                    ?>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php

    }

}

?>