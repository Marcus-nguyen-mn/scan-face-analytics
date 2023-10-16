<?php
/**
 * template name: Instruction Page
 */
get_header();
?>
<section class="mc_instruction">
<?php 
    if(isMobile()){ ?>
    <div class="mc_instruction_cover">
        <div class="container-mob">
            <div class="instruction-contain">
                <div class="logo-mob-scan">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_field("logo_mobile_scan","option"); ?>" alt="Logo Mobile">
                    </a>
                </div>
                <div class="face_capture_instr">
                    <div class="title-instr">
                        <?php echo get_field("title_instruction"); ?>
                    </div>
                    <div class="desc-instr-1">
                        <?php echo get_field("desc_instruction_1"); ?>
                    </div>
                    <div class="desc-instr-2">
                        <?php echo get_field("desc_instruction_2"); ?>
                    </div>
                    <div class="img-instruc-mh">
                        <img src="<?php echo get_field("img_mh_instruction"); ?>" alt="Instruction">
                    </div>
                </div>
                <button type="button" class="btn-readmore-instruc" id="readMoreInstruction">Xem thêm</button>
                <div class="note-instruc">
                    <div class="title-note-instruc">
                        <?php echo get_field("title_note_instruc"); ?>
                    </div>
                    <div class="list-note-instru">
                        <?php 
                            if( have_rows('list_note_instruc') ):
                                while( have_rows('list_note_instruc') ) : the_row();
                        ?>
                        <div class="item">
                            <div class="item-row">
                                <div class="item-img">
                                    <img src="<?php echo get_sub_field("im_note_instruc"); ?>" alt="Face">
                                </div>
                                <div class="content-note">
                                    <?php echo get_sub_field("content_note_instruc"); ?>
                                </div>
                            </div>
                        </div>
                        <?php 
                             endwhile;
                            endif;
                        ?>
                    </div>
                </div>
                <div class="btn-upload-and-capture">
                    <a href="<?php echo get_field("link_capture_instruc"); ?>" class="capture">Chụp ảnh</a>
                    <a href="<?php echo get_field("link_upload_instruc"); ?>" class="upload">Tải ảnh lên</a>
                </div>
            </div>
        </div>
        <div class="backdrop-pop-instruc" id="backDropPopInstruc">
        </div>
        <div class="pop-more-instruc" id="popupInstructionMore">
            <div class="pop-more-instruc-cover">
                <div class="cls-btn-pop-instruc" id="clsXButtonInstruc">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19 5L5 19M5 5L19 19" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="content-pop-more-instruc">
                    <div class="title-pop-more-instruc">
                        <?php echo get_field("title_popup_instruc"); ?>
                    </div>
                    <div class="nd-pop-more-instruc">
                        <?php echo get_field("content_popup_instruc"); ?>
                    </div>
                    <button type="button" class="btn-cls-pop-instr" id="btnInPopInstruc">Đóng</button>
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