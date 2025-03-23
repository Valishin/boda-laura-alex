<?php
    $b_start_page__title = get_field( 'theme-settings-general__start-page-title', 'option' );
    $b_start_page__icon = get_field('theme-settings-general__start-page-icon', 'options');
    $the_icon = wp_get_attachment_image( $b_start_page__icon['ID'], 'custom-full', "", array("class" => "b-start-page__icon o-bg-s__image"));
?>

<div class="b-start-page no-scroll">
    <div class="b-start-page__inner">
        <div class="b-start-page__container o-container">
            <div class="b-start-page__col o-col-12@md o-col-8@sm o-col-4@xs">
                <div class="b-start-page__wrapper-content">
                    <div class="b-start-page__wrapper-title">
                        <div class="b-start-page__title o-font-display-2 js-split-text js-split-text--start"><?php echo $b_start_page__title; ?></div>
                    </div>
                    <div class="b-start-page__wrapper-icon">
                        <?php echo $the_icon; ?>
                    </div>
                    <div class="b-start-page__wrapper-click">
                        <div class="b-start-page__click o-font-display-headline">Pulsa para continuar</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>