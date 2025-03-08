<?php   

    $contact_title      = get_field('theme-settings-general__contact-title', 'option');
    $contact_shortcode  = get_field('theme-settings-general__contact-shortcode', 'option');
    $contact_image      = get_field('theme-settings-general__contact-image', 'option');

    $the_image      = wp_get_attachment_image( $contact_image['ID'], 'custom-tablet', "", array("class" => "b-contact__image") );
    ?>

<div class="b-contact">
    <div class="b-contact__inner">
        <div class="b-contact__wrapper-close js-b-contact__close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="m6.4 18.308l-.708-.708l5.6-5.6l-5.6-5.6l.708-.708l5.6 5.6l5.6-5.6l.708.708l-5.6 5.6l5.6 5.6l-.708.708l-5.6-5.6z"/></svg>
        </div>
        <div class="b-contact__wrapper-content">
            <div class="b-contact__left-box">
                <div class="b-contact__wrapper-title">
                    <div class="b-contact__title o-font-display-1"><?php echo $contact_title; ?></div>
                </div>
                <div class="b-contact__shortcode">
                    <?php echo do_shortcode($contact_shortcode); ?>
                </div>
            </div>
            <div class="b-contact__right-box">
                <div class="b-contact__wrapper-image">
                    <?php echo $the_image; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="c-form">
    <div class="c-form__wrapper-content">
        <div class="c-form__wrapper-input c-form__input--text">
            [text* your-name placeholder "Name"]
        </div>
        <div class="c-form__wrapper-input c-form__input--email">
            [email* your-email placeholder "Email Address"]
        </div>
        <div class="c-form__wrapper-input c-form__input--text">
            [text* your-subject placeholder "Subject"]
        </div>
        <div class="c-form__wrapper-input c-form__input--text-area">
            [textarea your-message placeholder "Message"]
        </div>
        <div class="c-form__wrapper-button c-form__input--submit">
            [submit class:c-form__button "Enviar"]
        </div>
    </div>
</div> -->
