<?php 

    $body_class = array();
    $body_class[] = 'js-body';

    $_post = get_post();
    $current_slug = $_post->post_name;
    $current_ID = $_post->ID;
    
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> xmlns:og="http://ogp.me/ns" xmlns:fb="http://ogp.me/ns/fb">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>
<body <?php body_class($body_class); ?> data-barba="wrapper">

    <!-- put here content that will not change
    between your pages, like <header> or <nav> -->

    <!--[if lt IE 9]>
        <div class="old-browser-alert">
            <div>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</div>
        </div>
    <![endif]-->

    <!-- LOADER -->
    <?php  include( locate_template('blocks/b-loader.php') ); ?>

    <!-- LOADER -->
    <?php  include( locate_template('blocks/b-debug.php') ); ?>

    <!-- HEADER -->
    <?php include( locate_template('blocks/b-header.php') ); ?>

    <div class="generic-velo js-generic-velo"></div>

    <!-- CONTACT -->
    <?php include( locate_template('blocks/b-contact.php') ); ?>

    <!-- MENU DROPDOWN -->
    <?php include( locate_template('blocks/b-menu-dropdown.php') ); ?>   
    <div class="c-gallery__velo | js-gallery__remove-image">
        <div class="c-gallery__close | js-gallery__remove-image"></div>
    </div>

    <!-- WHATSAPP LOGO -->
    <a href="https://wa.me/+34602895522" target="_blank" class="whatsapp__wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 258"><defs><linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%">
            <stop offset="0%" stop-color="#1faf38"/><stop offset="100%" stop-color="#60d669"/>
            </linearGradient><linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#f9f9f9"/><stop offset="100%" stop-color="#fff"/></linearGradient></defs><path fill="url(#logosWhatsappIcon0)" d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004"/><path fill="url(#logosWhatsappIcon1)" d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z"/><path fill="#fff" d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64"/>
        </svg>
        <div class="whatsapp__title o-font-display-caption">¡Escríbenos!</div>
    </a>
    <div class="c-gallery__wrapper-velo-image | js-gallery__velo-image"></div>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main id="av-barba-container" data-barba="container" data-barba-namespace="<?php echo $current_slug; ?>" data-the-id="<?php echo $current_ID; ?>">

                <div class="av-main | js-smooth-scroll">
