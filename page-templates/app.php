<?php
/**
 * template name: App Scan
 */
get_header();
?>
<div class="mc_app_page">
    <?php 
    if(isMobile()){ ?>
    <div class="mc_app_mobile_cover">
        <div class="loading" id="mcLoadingInScanPage">
            <div class="loading-cover">
                <div class="img-face-loading">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/face-loading.png" alt="Face Loading">
                </div>
                <div class="loadding-bar">
                    <div class="txt-loading">
                        <p>Bắt đầu trải nghiệm chụp hình</p>
                        <p id="currentNumberLoadInPageScan">50%</p>
                    </div>
                    <div class="loading-bar-cover">
                        <div class="loading-roll" id="mcLoadingRollInPageScan">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="root"></div>
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