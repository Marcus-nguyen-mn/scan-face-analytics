<!doctype html>
<html id="no_margin" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- <link rel="icon" href="<?php //echo get_template_directory_uri(); ?>/dist/assets/images/logo-main.png" type="image/x-icon" /> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section class="mc_header">
    <div class="mc-container">
        <div class="mc-header-cover">
            <div class="logo-contain">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_field("main_logo","option"); ?>" alt="Logo">
                </a>
            </div>
            <div class="mc-header-menu">
                <div class="mc-row mc-align-center mc-jc-space-between mc-mg--12">
                    <div class="mc-col-1 mc-pdx-12">
                        <div class="search-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ic-search.png" alt="Search">
                        </div>
                    </div>
                    <div class="mc-col-10 mc-pdx-12">
                        <div class="center-menu">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'main_menu',
                                ) );
                            ?>
                        </div>
                    </div>
                    <div class="mc-col-1 mc-pdx-12">
                        <div class="right-btn-contact">
                            <button type="button">Liên hệ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mc_menu_mobile">
                <div class="head-mob">
                    <div class="left-btn-bar" id="barMobile">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/burger.png" alt="Bar">
                    </div>
                    <?php echo get_template_directory_uri(); ?>/assets/images/test-face.png
                    <div class="right-mob-contact">
                        <button type="button">Liên hệ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="mc-menu-mob-content mc-fade-mob-in-left" id="mcMenuMobContent">
    <div class="mm-search-and-can">
        <div class="search-mob">
            <form action="<?php echo get_home_url(); ?>/" method="get">
                <input type="text" id="s" name="s" class="form-control" value="" placeholder="Tìm kiếm">
                <button type="submit" class ="sub-search-mc-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Small.png" alt="Search" />
                </button>
            </form>
        </div>
        <div class="cancel-mob" id="cancelMenuMob">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cancel.png" alt="Cancel">
        </div>
    </div>
    <div class="list-menu-mob">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'main_menu',
            ) );
        ?>
    </div>
</div>