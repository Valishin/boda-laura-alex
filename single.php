<?php
/*
    Single
*/

the_post();
get_header();

    ?>

        <section class="o-main s-template-single">
        
            <?php include( locate_template('components/components.php') ); ?>

        </section>

    <?php

get_footer(); 

?>
