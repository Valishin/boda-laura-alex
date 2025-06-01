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
            <div class="b-footer__col o-col-12@md o-col-8@sm o-col-4@xs">
                <div class="b-footer__wrapper-text">
                    <div class="b-footer__wrapper-title">
                        <div class="b-footer__title js-split-text o-font-display-2">¡Os esperamos!</div>
                    </div>
                    <div class="b-footer__wrapper-description">
                        <div class="b-footer__descritpion js-split-text o-font-display-body">Avísanos si vas a venir a través de nuestro formulario de contacto o por WhatsApp.</br>Fecha límite de confirmación 25 de septiembre de 2025</div>
                    </div>
                </div>
            </div>
            <div class="b-footer__col b-footer__col--map-form o-col-12@md o-col-8@sm o-col-4@xs">
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
                <div class="b-footer__wrapper-form">
                    <?php echo do_shortcode('[contact-form-7 id="01f1bb0" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div> 
        <div class="b-footer__wrapper-copy">
            <div>Desarrollado por <a href="https://validev.es/" target="_blank">validev.es</a></div>
        </div>       
    </div>
</footer>
<!-- END FOOTER -->
