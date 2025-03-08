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
    <div class="c-gallery__wrapper-velo-image | js-gallery__velo-image"></div>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main id="av-barba-container" data-barba="container" data-barba-namespace="<?php echo $current_slug; ?>" data-the-id="<?php echo $current_ID; ?>">

                <div class="av-main | js-smooth-scroll">
