<?php

if(av_component_get_option__is_active($component_global_settings)){

    if(!av_component_get_option__hide_mobile($component_global_settings)){

    $options = av_component_get_options($component_global_settings);

    $tag = av_get_tag_for_title();

    $the_img_small = wp_get_attachment_image( $c_hero__small_image['ID'], 'custom-full', "", array("class" => "c-hero__image o-bg-s__image js-anim-image", "data-speed" => "0.9") );

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
                        <svg width="50px" height="50px" viewBox="0 0 16 16">
                            <path fill="black" fill-rule="evenodd" d="M10 14a2 2 0 1 1-4 0a2 2 0 0 1 4 0m1.78-8.841a.75.75 0 0 0-1.06 0l-1.97 1.97V.75a.75.75 0 0 0-1.5 0v6.379l-1.97-1.97a.75.75 0 0 0-1.06 1.06l3.25 3.25L8 10l.53-.53l3.25-3.25a.75.75 0 0 0 0-1.061" clip-rule="evenodd"/>
                        </svg>
                    </div>
                <?php } ?>          
                <div class="c-hero__container | o-container">                       
                    <?php if(!!$the_img_small){ ?>                
                        <div class="c-hero__wrapper-image c-hero__wrapper-image--small">
                            <?php echo $the_img_small; ?>                                                    
                        </div>                
                    <?php } ?>
                    <?php if(!!$the_img_big){ ?>                
                        <div class="c-hero__wrapper-image c-hero__wrapper-image--big">
                            <?php echo $the_img_big; ?>                                                   
                        </div>                
                    <?php } ?>                                                          
                    <div class="c-hero__col | o-col-10@md o-col-push-2@md | o-col-8@sm | o-col-4@xs">
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
                        <?php if(!!$c_hero__cta){ ?>
                            <div class="c-hero__wrapper-cta | c-hero__wrapper-cta--1">
                                <?php 
                                    av_print_button(
                                        $c_hero__cta['url'],
                                        $c_hero__cta['title'],
                                        'style-1',
                                        $c_hero__cta['target'],
                                        'c-hero__cta'
                                    ); 
                                ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    
}
