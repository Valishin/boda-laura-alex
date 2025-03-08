<?php 

if ( defined( 'ICL_LANGUAGE_CODE' ) ): 
    
    av_languages_menu('skip_missing=1&orderby=code&order=asc&link_empty_to=#');

else:
    ?>
        <div class="b-languages">
            <div class="b-languages__button">EN 
                <div class="b-languages__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                        viewBox="0 0 185.344 185.344" style="enable-background:new 0 0 185.344 185.344;" xml:space="preserve">
                        <g>
                            <path class="langs-fill" d="M92.672,144.373c-2.752,0-5.493-1.044-7.593-3.138L3.145,59.301c-4.194-4.199-4.194-10.992,0-15.18
                                c4.194-4.199,10.987-4.199,15.18,0l74.347,74.341l74.347-74.341c4.194-4.199,10.987-4.199,15.18,0
                                c4.194,4.194,4.194,10.981,0,15.18l-81.939,81.934C98.166,143.329,95.419,144.373,92.672,144.373z"/>
                        </g>
                    </svg>
                </div>
            </div>
            <ul class="b-languages__list">
                <li class="b-languages__lang icl-ca"><a href="#">CA</a></li>
                <li class="b-languages__lang icl-es"><a href="#">ES</a></li>
            </ul>
        </div>
    <?php 
endif; 
?>