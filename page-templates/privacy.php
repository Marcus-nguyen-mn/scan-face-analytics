<?php
/**
 * template name: Privacy Page
 */
get_header();
?>
<section class="mc_privacy">
<?php 
    if(isMobile()){ ?>
    <div class="mc_privacy_cover">
        <div class="container-mob">
            <div class="mc_pri_contain">
                <div class="pop-bm">
                    <div class="pop-bm-cover">
                        <div class="out-privacy" id="outPrivacy" data-home="<?php echo site_url(); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19 5L5 19M5 5L19 19" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="title-pop-bm">
                            <?php echo get_field("title_privacy"); ?>
                        </div>
                        <div class="desc-pop-bm">
                            <?php echo get_field("content_privacy"); ?>
                        </div>
                        <div class="checkbox-accept">
                            <label class="labl-check">Tôi đã hiểu và đồng ý với chính sách bảo mật
                                <input type="checkbox" value="1" class="mc-check-accept-private">
                                <span class="checkmark"></span>
                            </label>
                            <label class="labl-check">Tôi đã hiểu và chấp nhận các điều khoản, điều kiện
                                <input type="checkbox" value="2" class="mc-check-accept-private">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <button type="button" class="mc-btn-accept-privacy" data-accpet="<?php echo get_field("link_accept_privacy"); ?>">Tôi đồng ý</button>
                    </div>
                    
                </div>
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
</section>
<?php get_footer();?>