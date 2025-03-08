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
                        <?php if(!!$logo_text){ ?>
                            <p class="b-header__logo-text"><?php echo $logo_text; ?></p>
                        <?php } else { ?>
                            <?php echo $logo; ?>
                        <?php } ?>
                    </a>
                </div>
                <div class="b-header__wrapper-hamburguer js-header__hamburguer">
                    <div class="b-header__hamburguer b-header__hamburguer--1"></div>
                    <div class="b-header__hamburguer b-header__hamburguer--2"></div>
                    <div class="b-header__hamburguer b-header__hamburguer--3"></div>
                </div>
                <div class="b-header__wrapper-menu">
                    <nav class="b-header__nav" role="navigation">
                        <?php 
                            wp_nav_menu( array(
                                'theme_location' 	=>  'header_menu',
                                'container'     	=>  '',
                                'menu_class'    	=> 'nav b-header__menu main-menu menu-depth-0 o-font-display-body',
                                'walker'  			=> new WPDocs_Walker_Nav_Menu() // custom walker
                            ));
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
