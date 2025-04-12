<?php

function av_enqueues(){

    if(!is_admin()){        

        // CSS

            // LIBS

                // FONT FAMILY
                wp_register_style('Poppins', ASSETS_DIRECTORY . '/fonts/Poppins/Poppins.css', false, false );
                wp_enqueue_style('Poppins');

                // FONT FAMILY
                wp_register_style('Raleway', ASSETS_DIRECTORY . '/fonts/Raleway/Raleway.css', false, false );
                wp_enqueue_style('Raleway');

                // FONT FAMILY
                wp_register_style('Rochester', ASSETS_DIRECTORY . '/fonts/Rochester/Rochester.css', false, false );
                wp_enqueue_style('Rochester');

                // FONT FAMILY
                wp_register_style('Merienda', ASSETS_DIRECTORY . '/fonts/Merienda/Merienda.css', false, false );
                wp_enqueue_style('Merienda');

            // CUSTOM CSS

                // APP CSS
                wp_register_style('app-css',     DIST_DIRECTORY       . '/app.css', false, filemtime( SERVER_DIST_DIRECTORY . '/app.css') );
                wp_enqueue_style('app-css');                


        // JS

            // CUSTOM JS

                // APP JS
                wp_register_script('app-js',        DIST_DIRECTORY    . '/app.bundle.js',  false, filemtime( SERVER_DIST_DIRECTORY . '/app.bundle.js' ) );
                wp_enqueue_script('app-js');
        

                // AV DATA
                $av_data = array(
                    'av_ajax_url' => admin_url(  'admin-ajax.php' )
                );

                // SEND CUSTOM DATA TO CUSTOM JS
                wp_localize_script( 'app-js', 'av_data', $av_data );

    }

}
add_action('wp_enqueue_scripts', 'av_enqueues', 100);

function add_rel_preload($html, $handle, $href, $media){
    if (is_admin())
        return $html;
    if(!isBrowser('Firefox'))
    $html = <<<EOT
<link rel='preload' as='style' onload="this.onload=null;this.rel='stylesheet'" id='$handle' href='$href' type='text/css' media='all' />
EOT;
    return $html;
}