<?php


add_action( 'admin_head', function () {
	?>
    <style>
        .MetaboxWarning__WarningBox-gHrSIw.KpzQJ, .yoast-sidebar__section, .wpseo_content_cell_title.yoast-sidebar__title, .yoast-button.yoast-button--noarrow.yoast-button--extension.yoast-button--extension-not-activated, .yoast-link--license, .yoast-money-back-guarantee {
            display: none !important;
        }

        .yoast-button.yoast-button--noarrow.yoast-button--extension.yoast-button--extension-installed {
            width:      50%;
            text-align: center;
            font-size:  22px;
        }

        .eaHPWa .public-DraftStyleDefault-block, .public-DraftStyleDefault-block.public-DraftStyleDefault-rtl {
            text-align: right !important;
            direction:  rtl;
        }
    </style>
	<?php
}, 999 );
