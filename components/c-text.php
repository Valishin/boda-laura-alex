<?php

if(av_component_get_option__is_active($component_global_settings)){

    if(!av_component_get_option__hide_mobile($component_global_settings)){

    $options = av_component_get_options($component_global_settings);

    $tag = av_get_tag_for_title();

    ?>
        <!-- C TEXT -->
        <div 
            <?php echo $options['id-attr']; ?>
            class="c-text | js-text | <?php echo $options['special-classes']; ?> | js-anim-inview">
            <div 
                class="c-text__inner | js-text__inner | <?php echo $options['color-classes']; ?> | <?php echo $options['padding-classes']; ?>"
            >¡
                <div class="c-text__container | o-container">
                    
                            <div class="c-text__col o-col-10@md | o-col-push-1@md">
                                <div class="c-text__wrapper alignment-<?php echo $c_text__alignment ?? 'left'; ?>">
                                <div class="c-text__velo o-bg-velo"></div>
                                <?php
                                    if(!!$c_text__overline){
                                        ?>
                                            <div class="c-text__wrapper-overline" >
                                                <span class="c-text__overline o-font-display-overline"><?php echo $c_text__overline; ?></span>
                                            </div>
                                        <?php
                                    }
                                    if(!!$c_text__title){
                                        ?>
                                            <div class="c-text__wrapper-title" >
                                                <h2 class="c-text__title o-font-display-1 | js-anim-split-title" ><?php echo $c_text__title; ?></h2>
                                            </div>
                                        <?php
                                    }
                                    if(!!$c_text__text){
                                        ?>
                                            <div class="c-text__wrapper-text" >
                                                <div class="c-text__text | s-content">
                                                    <?php echo av_breaklines($c_text__text); ?>
                                                </div>
                                            </div>
                                        <?php
                                        
                                    }
                                
                                    if((!!$c_text__cta_1)){
                                        ?>                                        
                                        <div class="c-text__wrapper-cta" >
                                            <?php 
                                                av_print_button(
                                                    $c_text__cta_1['url'],
                                                    $c_text__cta_1['title'],
                                                    $c_text__cta_1_style,
                                                    $c_text__cta_1['target'],
                                                    'c-text__cta'
                                                ); 
                                            ?>
                                        </div>                                                                                                                        
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>

    <?php
    }