<section class="mc_sec_1">
    <div class="mc-container">
        <div class="mc_sec_1_contain">
            <div class="mc-row">
                <div class="mc-col-6 mc-col-sm-12 mc-sm-order-2">
                    <div class="left-sec-1">
                        <div class="title-sec-1">
                            <?php  echo get_field("title_sec_1");?>
                        </div>
                        <div class="desc-sec-1">
                            <?php  echo get_field("desc_sec_1");?>
                        </div>
                        <div class="qr-app">
                            <img src="<?php  echo get_field("qr_sec_1");?>" alt="Qr App">
                        </div>
                        <div class="button-tn-mobile">
                            <a href="<?php echo get_field("link_tngh"); ?>">Trải nghiệm ngay</a>
                        </div>
                    </div>
                    
                </div>
                <div class="mc-col-6 mc-col-sm-12 mc-sm-order-1">
                    <div class="right-img-sec-1">
                        <img src="<?php echo get_field("img_top_right"); ?>" alt="Banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="dva_scan">
    <div class="mc-container">
        <div class="title_what_is_dva_scan">
            <?php echo get_field("what_is_dva_scan_title"); ?>
        </div>
        <div class="answer_dva_scan">
            <?php echo get_field("answer_dva_scan"); ?>
        </div>
    </div>
    
</section>