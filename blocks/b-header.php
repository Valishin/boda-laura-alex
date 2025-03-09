<?php   

    $logo  = get_field( 'theme-settings-general__logo', 'option' );

    $logo_text  = get_field( 'theme-settings-general__logo-text', 'option' );
    
    $the_logo = wp_get_attachment_image( $logo['ID'], 'custom-tablet', "", array("class" => "b-header__logo") );
?>

<header class="b-header js-header">
    <div class="b-header__velo"></div>
    <div class="b-header__wrapper">
        <div class="js-debugger-tool">Debug</div>
        <div class="b-header__container o-container">
            <div class="b-header__col o-col-12@md o-col-8@sm o-col-4@xs">
                <div class="b-header__wrapper-logo o-font-display-body">
                    <a href="<?php echo get_home_url(); ?>">                        
                        <?php echo $the_logo; ?>
                    </a>
                </div>
                <div class="b-header__countdown o-font-display-headline" id="countdown"></div>
            </div>
        </div>
    </div>
</header>
