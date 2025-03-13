<?php

if(av_component_get_option__is_active($component_global_settings)){

    if(!av_component_get_option__hide_mobile($component_global_settings)){

    $options = av_component_get_options($component_global_settings);

    $tag = av_get_tag_for_title();

    $the_img_small = wp_get_attachment_image( $c_hero__small_image['ID'], 'custom-full', "", array("class" => "c-hero__image c-hero__image--small o-bg-s__image js-anim-image", "data-speed" => "0.9") );

    $the_img_big = wp_get_attachment_image( $c_hero__big_image['ID'], 'custom-full', "", array("class" => "c-hero__image o-bg-s__image js-anim-image", "data-speed" => "0.9") );

    ?>
        <!-- C HERO -->
        <div 
            <?php echo $options['id-attr'];?>
            class="c-hero | js-hero | <?php echo $options['special-classes']; ?> | js-anim-inview"
        >
            <div 
                class="c-hero__inner | js-hero__inner | <?php echo $options['color-classes']; ?> | <?php echo $options['padding-classes']; ?>"
            >      
                <?php if($c_hero__arrow_scroll){ ?>
                    <div class="c-hero__wrapper-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16"><path fill="currentColor" d="M6.707 9h4.364c-.536 1.573 2.028 3.806 4.929-.5c-2.9-4.306-5.465-2.073-4.929-.5H6.707L4.854 6.146a.5.5 0 1 0-.708.708L5.293 8h-.586L2.854 6.146a.5.5 0 1 0-.708.708L3.293 8h-.586L.854 6.146a.5.5 0 1 0-.708.708L1.793 8.5L.146 10.146a.5.5 0 0 0 .708.708L2.707 9h.586l-1.147 1.146a.5.5 0 0 0 .708.708L4.707 9h.586l-1.147 1.146a.5.5 0 0 0 .708.708z"/></svg>
                    </div>
                <?php } ?>          
                <div class="c-hero__container | o-container">                       
                    <?php if(!!$the_img_small){ ?>                
                        <div class="c-hero__wrapper-image c-hero__wrapper-image--small">
                            <?php echo $the_img_small; ?>                                                    
                        </div>                
                    <?php } ?>
                    <?php if(!!$the_img_big){ ?>                
                        <div class="c-hero__wrapper-image c-hero__wrapper-image--big shadow-img">
                            <?php echo $the_img_big; ?>                                                   
                        </div>                
                    <?php } ?>                                                          
                    <div class="c-hero__col | o-col-10@md | o-col-8@sm | o-col-4@xs">
                        <div class="c-hero__wrapper">
                            <?php 
                                if(!!$c_hero__overline){                                    
                                    ?>
                                    <div class="c-hero__wrapper-overline">
                                        <p class="c-hero__overline o-font-display-overline js-split-text"><?php echo $c_hero__overline; ?></p>
                                    </div>                                     
                                    <?php
                                }                                                               
                                if(!!$c_hero__title){
                                    ?>
                                        <div class="c-hero__wrapper-title">
                                            <<?php echo $tag; ?> class="c-hero__title o-font-display-2 js-split-text"><?php echo $c_hero__title; ?></<?php echo $tag; ?>>
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
