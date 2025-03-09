<?php

    if(av_component_get_option__is_active($component_global_settings)){

        if(!av_component_get_option__hide_mobile($component_global_settings)){

        $options = av_component_get_options($component_global_settings);

        $the_img = wp_get_attachment_image( $c_image_text__image['ID'], 'custom-full', "", array("class" => "c-image-text__image o-bg-s__image", "data-speed" => "0.9") );

        $col_image = "o-col-6@md o-col-4@sm o-col-4@xs";
        $col_text = "o-col-6@md o-col-4@sm o-col-4@xs";

        if($c_image_text__position == 'image-content'){
            $col_image = "o-col-6@md o-col-4@sm o-col-4@xs";
            $col_text = "o-col-6@md o-col-4@sm o-col-4@xs";
        }

        ?>

            <!-- C IMAGE TEXT -->
            <div 
                <?php echo $options['id-attr']; ?>
                class="c-image-text | js-image-text | <?php echo $options['special-classes']; ?> | is-<?php echo $c_image_text__position; ?> | js-anim-inview"
            >
                <div 
                    class="c-image-text__inner | js-image-text__inner | <?php echo $options['color-classes']; ?> | <?php echo $options['padding-classes']; ?>"
                >
                    <div class="c-image-text__container o-container o-anim-fade-in">
                        <div class="c-image-text__col c-image-text__col--image <?php echo $col_image; ?>" >
                            <?php if(!!$the_img){ ?>
                                <div class="c-image-text__wrapper">
                                    <div class="c-image-text__wrapper-image shadow-img js-anim-image">
                                        <?php echo $the_img; ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="c-image-text__col c-image-text__col--texts <?php echo $col_text; ?>" >
                            <div class="c-image-text__wrapper | c-image-text--align-item-center">
                                <?php                                      
                                    if(!!$c_image_text__title){ 
                                        ?>
                                            <div class="c-image-text__wrapper-title">
                                                <h2 class="c-image-text__title | js-anim-split-title o-font-display-2"><?php echo $c_image_text__title; ?></h2>
                                            </div>
                                        <?php 
                                    }
                                    if(!!$c_image_text__description){
                                        ?>
                                            <div class="c-image-text__wrapper-description <?php if(!$c_image_text__title):?>c-image-text__wrapper-description-special<?php endif;?>">
                                                <div class="c-image-text__description | s-content"><?php echo av_breaklines($c_image_text__description); ?></div>
                                            </div>
                                        <?php
                                    }
                                    if((!!$c_image_text__cta)){
                                        ?>         
                                        <div class="c-image-text__wrapper-cta">
                                            <?php 
                                                if(!!$c_image_text__cta){                                                                                                                                                      
                                                    av_print_button(
                                                        $c_image_text__cta['url'],
                                                        $c_image_text__cta['title'],
                                                        $c_image_text__cta_style,
                                                        $c_image_text__cta['target'],
                                                        'c-image-text__cta'
                                                    );                                                          
                                                }                                                    
                                            ?>                                        
                                        </div>                                   
                                        <?php 
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
