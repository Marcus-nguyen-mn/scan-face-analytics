<?php
/**
 * template name: Upload Image Page
 */
get_header();
?>
<section class="mc_upload_image">
<?php 
    if(isMobile()){ ?>
    <div class="mc_upload_image_cover">
        <div class="logo-mob-scan">
            <a href="<?php echo site_url(); ?>">
                <img src="<?php echo get_field("logo_mobile_scan","option"); ?>" alt="Logo Mobile">
            </a>
        </div>
        <div class="container-mob">
            <div class="mc_upload_image_contain">
                <div class="step-upload active" id="stepUploadOne">
                    <div class="bar-step">
                        <div class="first active">
                            1
                        </div>
                        <div class="second">
                            2
                        </div>
                        <div class="three">
                            3
                        </div>
                    </div>
                    <div class="title-step">
                        Tải ảnh góc mặt trái
                    </div>
                    <div class="img-upload-show" id="showImageUploadOne">
                        <img src="<?php echo get_field("image_front_face_gmp"); ?>" alt="Front Face">
                    </div>
                    <div class="use-img-but-cover">
                        <button type="button" class="use-img-but" id="useImageOne">Sử dụng ảnh</button>
                    </div>
                    <div class="btoom-two-bt">
                        <a href="<?php echo get_field("link_capture_upload_page"); ?>">Chụp ảnh</a>
                        <button type="button" class="upload-up" id="uploadOne">Tải ảnh lên</button>
                        <input type="file" accept="image/*" name="image" id="fileImgOne" style="display:none;">
                    </div>
                </div>

                <div class="step-upload" id="stepUploadSecond">
                    <div class="bar-step">
                        <div class="first active">
                            1
                        </div>
                        <div class="second active">
                            2
                        </div>
                        <div class="three">
                            3
                        </div>
                    </div>
                    <div class="title-step">
                        Tải ảnh góc mặt chính diện
                    </div>
                    <div class="img-upload-show" id="showImageUploadSecond">
                        <img src="<?php echo get_field("image_front_face_cd"); ?>" alt="Front Face">
                    </div>
                    <div class="use-img-but-cover">
                        <button type="button" class="use-img-but" id="useImageSecond">Sử dụng ảnh</button>
                    </div>
                    <div class="btoom-two-bt">
                        <a href="<?php echo get_field("link_capture_upload_page"); ?>">Chụp ảnh</a>
                        <button type="button" class="upload-up" id="uploadSecond">Tải ảnh lên</button>
                        <input type="file" accept="image/*" name="image" id="fileImgSecond" style="display:none;">
                    </div>
                </div>

                <div class="step-upload" id="stepUploadThree">
                    <div class="bar-step">
                        <div class="first active">
                            1
                        </div>
                        <div class="second active">
                            2
                        </div>
                        <div class="three active">
                            3
                        </div>
                    </div>
                    <div class="title-step">
                        Tải ảnh góc mặt bên phải
                    </div>
                    <div class="img-upload-show" id="showImageUploadThree">
                        <img src="<?php echo get_field("image_front_face_gmt"); ?>" alt="Front Face">
                    </div>
                    <div class="use-img-but-cover">
                        <p id="noticeUploadFinished">Bạn vui lòng chờ trong giây lát !</p>
                        <button type="button" class="use-img-but" id="useImageThree" data-url="<?php echo site_url("information-client"); ?>">Hoàn thành</button>
                    </div>
                    <div class="btoom-two-bt">
                        <a href="<?php echo get_field("link_capture_upload_page"); ?>">Chụp ảnh</a>
                        <button type="button" class="upload-up" id="uploadThree">Tải ảnh lên</button>
                        <input type="file" accept="image/*" name="image" id="fileImgThree" style="display:none;">
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