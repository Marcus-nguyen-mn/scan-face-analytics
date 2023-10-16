<?php
/**
 * template name: Scan Page
 */
get_header();
?>
<div class="mc_scan_page">
    <?php 
    if(isMobile()){ ?>
    <div class="scan_mobile_cover">
        <div class="container-mob">
            <div class="scan_top">
                <img src="<?php echo get_field("banner_scan_page"); ?>" alt="Banner">
                <a href="<?php echo site_url(); ?>" class="out-scann">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M19 5L5 19M5 5L19 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="logo-scan-page">
                    <img src="<?php echo get_field("logo_scan_page"); ?>" alt="Logo">
                </div>
                <div class="text-on-banner">
                    <?php echo get_field("text_on_banner_scan_page"); ?>
                </div>
                <a class="button-scan-link" href="<?php echo get_field("link_btn_start_anal"); ?>">Bắt đầu phân tích da</a>
                <button class="arrow-down-next-scann" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6 12.5L11.3243 17.3806C11.6451 17.6747 11.8055 17.8217 12 17.8217C12.1945 17.8217 12.3549 17.6747 12.6757 17.3806L18 12.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6 6L11.3243 10.8806C11.6451 11.1747 11.8055 11.3217 12 11.3217C12.1945 11.3217 12.3549 11.1747 12.6757 10.8806L18 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <div class="step-activities">
                <div class="title-st-act">
                    <?php echo get_field("dva_magic_scan_activities"); ?>
                </div>
                <div class="desc-st-act">
                    <?php echo get_field("desc_dva_magic_scan_activities"); ?>
                </div>
                <div class="list-step owl-carousel owl-theme">
                    <?php 
                        if( have_rows('step_activities_dva_scan') ):
                            while( have_rows('step_activities_dva_scan') ) : the_row();

                    ?>
                    <div class="step">
                        <div class="thumb-step">
                            <img src="<?php echo get_sub_field("img_step_activities"); ?>" alt="Step">
                        </div>
                        <div class="content-step">
                            <div class="title-1-step">
                                <?php echo get_sub_field("title_1_step_activities"); ?>
                            </div>
                            <div class="title-2-step">
                                <?php echo get_sub_field("title_2_step_activities"); ?>
                            </div>
                            <div class="desc-step">
                                <?php echo get_sub_field("content_dva_magic_scan"); ?>
                            </div>
                        </div>
                        
                    </div>
                    <?php 
                    endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="btn-use-app">
                <a href="<?php echo get_field("link_btn_start_anal"); ?>">Bắt đầu phân tích da</a>
            </div>
        </div>
        
    </div>
    <?php 
    }
    else {
    ?>
    <div class="scan_desktop_cover">
        <div class="scan_desktop">
            <div class="mc-container">
                <?php echo "Vui lòng dùng thiết bị di động để sử dụng dịch vụ này của chúng tôi !"; ?>
            </div>
        </div>
        <?php  get_template_part('sections/footer-custom');  ?>
    </div>
    <?php 
        }
    ?>
</div>

<?php get_footer();?>