<?php

    $logo                       = get_field( 'theme-settings-general__logo', 'option' );
    $footer_about__label        = get_field( 'theme-settings-footer__label', 'option' );
    $footer_about__phone        = get_field('theme-settings-footer__phone', 'option' );
    $footer_about__email        = get_field('theme-settings-footer__email', 'option' );
    $footer_about__about        = get_field('theme-settings-footer__about', 'option' );
    $footer__copyright          = get_field('theme-settings-footer__copyright', 'option' );

    $footer__label_1            = get_field('theme-settings-footer__label-1', 'option' );
    $footer__label_2            = get_field('theme-settings-footer__label-2', 'option' );
    $footer__label_3            = get_field('theme-settings-footer__label-3', 'option' );

    $footer__map_cta            = get_field('theme-settings-footer__map-cta', 'option' );
    $footer__map_title          = get_field('theme-settings-footer__map-title', 'option' );

    $the_logo = wp_get_attachment_image( $logo['ID'], 'custom-tablet', "", array("class" => "b-footer__logo") );

?>

<!-- FOOTER -->
<footer class="b-footer js-footer">
    <div class="b-footer__inner">            
        <div class="b-footer__container b-footer__container--map o-container">
            <div class="b-footer__col o-col-12@md o-col-8@sm o col-4@xs">
                <div class="b-footer__map-title o-font-display-headline"><?php echo $footer__map_title; ?></div>
                <div class="b-footer__wrapper-map js-footer-map">
                    <div class="b-footer__map" id="map"></div>                    
                    <?php if(!!$footer__map_cta){ ?>
                        <div class="b-footer__wrapper-cta | b-footer__wrapper-cta--1">
                            <?php 
                                av_print_button(
                                    $footer__map_cta['url'],
                                    $footer__map_cta['title'],
                                    'style-1',
                                    $footer__map_cta['target'],
                                    'b-footer__cta'
                                ); 
                            ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="b-footer__wrapper">            
            <div class="b-footer__container b-footer__container--1 | o-container">
                <div class="b-footer__col o-col-3@md o-col-3@sm o-col-4@xs">
                    <div class="b-footer__wrapper-about">                
                        <div class="b-footer__wrapper-label o-font-display-button">
                            <a href="<?php echo home_url('/'); ?>"><?php echo $footer_about__label; ?></a>
                        </div>     
                        <?php
                            if(!!$footer_about__about){ ?>
                                <div class="b-footer__about">
                                    <?php echo $footer_about__about; ?>
                                </div>
                            <?php } ?>
                        <?php if(!!$footer_about__email){ ?>
                            <div class="b-footer__email">
                                <a href="mailto:<?php echo $footer_about__email;?>">
                                    <?php echo $footer_about__email; ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m16.288 7.208l-9.765 9.746q-.14.14-.344.13q-.204-.009-.344-.15q-.14-.14-.14-.334t.14-.335L15.58 6.5H6.788q-.212 0-.356-.144t-.144-.357t.144-.356q.144-.143.356-.143h9.693q.343 0 .575.232q.232.232.232.576V16q0 .213-.143.356t-.357.144q-.213 0-.356-.144T16.288 16z"/>
                                    </svg>
                                </a>
                            </div>
                        <?php } ?>
                        <?php if(!!$footer_about__phone){ ?>
                            <div class="b-footer__wrapper-phone">
                                <div class="b-footer__phone">
                                    <?php echo $footer_about__phone; ?>
                                </div>
                                <svg width="24px" height="24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m17.696 14.465l-.72-.719q.397-.333.646-.782q.25-.449.25-.964t-.25-.964q-.249-.45-.645-.782l.72-.72q.536.48.855 1.111q.32.632.32 1.355t-.32 1.355q-.32.632-.856 1.11m2.142 2.143l-.707-.708q.775-.775 1.19-1.785q.416-1.01.416-2.115q0-1.106-.416-2.115q-.415-1.01-1.19-1.785l.707-.708q.922.916 1.41 2.108q.489 1.192.489 2.5t-.489 2.5q-.488 1.192-1.41 2.108M6 22V2h12v4.923h-1V5.5H7v13h10v-1.423h1V22zm1-2.5V21h10v-1.5zm0-15h10V3H7zm0 0V3zm0 15V21z"/>
                                </svg>
                            </div>
                        <?php } ?>
                    </div>                              
                </div>
                <div class="b-footer__col o-col-2@md o-col-2@sm o-col-2@xs">
                    <div class="b-footer__wrapper-menu">    
                        <?php if(!!$footer__label_1){ ?>            
                            <div class="b-footer__label o-font-display-button">
                                <?php echo $footer__label_1; ?>
                            </div>
                        <?php } ?>
                        <div class="b-footer__nav">
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' 	=>  'footer_menu_1',
                                    'container'     	=>  '',
                                    'menu_class'    	=> 'nav b-footer__menu main-menu menu-depth-0 o-font-display-overline',
                                    'walker'  			=> new WPDocs_Walker_Nav_Menu() // custom walker
                                ));
                            ?>
                        </div>
                    </div> 
                </div> 
                <div class="b-footer__col o-col-2@md o-col-2@sm o-col-2@xs">
                    <div class="b-footer__wrapper-menu">    
                        <?php if(!!$footer__label_2){ ?>            
                            <div class="b-footer__label o-font-display-button">
                                <?php echo $footer__label_2; ?>
                            </div>
                        <?php } ?>
                        <div class="b-footer__nav">
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' 	=>  'footer_menu_2',
                                    'container'     	=>  '',
                                    'menu_class'    	=> 'nav b-footer__menu main-menu menu-depth-0 o-font-display-overline',
                                    'walker'  			=> new WPDocs_Walker_Nav_Menu() // custom walker
                                ));
                            ?>
                        </div>
                    </div> 
                </div>
                <div class="b-footer__col o-col-2@md o-col-2@sm o-col-2@xs">
                    <div class="b-footer__wrapper-menu">    
                        <?php if(!!$footer__label_3){ ?>            
                            <div class="b-footer__label o-font-display-button">
                                <?php echo $footer__label_3; ?>
                            </div>
                        <?php } ?>
                        <div class="b-footer__nav">
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' 	=>  'footer_menu_3',
                                    'container'     	=>  '',
                                    'menu_class'    	=> 'nav b-footer__menu main-menu menu-depth-0 o-font-display-overline',
                                    'walker'  			=> new WPDocs_Walker_Nav_Menu() // custom walker
                                ));
                            ?>
                        </div>
                    </div> 
                </div>
                <div class="b-footer__col o-col-2@md o-col-push-1@md o-col-4@sm o-col-2@xs">
                    <div class="b-footer__wrapper-socials">                    
                        <?php include( locate_template('blocks/b-socials.php') ); ?>
                    </div>
                </div>
            </div>
            <div class="b-footer__container b-footer__container--2 o-container">
                <div class="b-footer__col o-col-12@md o-col-8@sm o-col-4@xs">
                    <div class="b-footer__wrapper-legal-info">
                        <?php if(!!$footer__copyright){ ?>
                            <div class="b-footer__wrapper-copyright">
                                <div class="b-footer__copyright"><?php echo $footer__copyright; ?></div>
                            </div>
                        <?php } ?>
                        <div class="b-footer__legal-menu">
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' 	=>  'footer_menu_legal_info',
                                    'container'     	=>  '',
                                    'menu_class'    	=> 'nav b-footer__menu b-footer__menu--legal main-menu menu-depth-0 o-font-display-overline',
                                    'walker'  			=> new WPDocs_Walker_Nav_Menu() // custom walker
                                ));
                            ?>
                        </div>  
                    </div>
                </div>                  
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
