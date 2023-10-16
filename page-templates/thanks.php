<?php
/**
 * template name: Thanks Page
 */
get_header();
?>
<div class="mc_thanks_page">
    <?php 
    if(isMobile()){ ?>
    <div class="mc_thanks_mobile_cover">
        <div class="logo-mob-scan">
            <a href="<?php echo site_url(); ?>">
                <img src="<?php echo get_field("logo_mobile_scan","option"); ?>" alt="Logo Mobile">
            </a>
        </div>
        <div class="container-mob">
            <div class="title-thanks">
                CẢM ƠN BẠN ĐÃ SỬ DỤNG DIVA MAGIC SCAN
            </div>
            <div class="des-thanks">
                Phản hồi của bạn rất quan trọng! Vui lòng đánh giá trải nghiệm của bạn để chúng tôi có thể cải thiện tốt hơn.
            </div>     
            <!-- <div class="review">
                Bình thường
            </div> -->
            <div class="form">
                <div class="text-form-1">
                Chúng tôi rất vui vì bạn hài lòng với 
                    trải nghiệm này
                </div>
                <div class="text-form-2">
                Làm thế nào để chúng tôi 
                có thể cải thiện tốt hơn?
                </div>
                <textarea name="" id="" placeholder="Nhập đánh giá của bạn về DIVA SPOTSCAN"></textarea>
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