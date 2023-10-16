<section class="mc_sec_2">
    <div class="mc-container">
        <div class="title-sec-2">
            <?php echo get_field("title_sec_2"); ?>
        </div>
        <div class="mc-sec-contain-2">
            <div class="mc-row mc-mg--12">
                <?php 
                    if(have_rows('pt_da')):
                        $count=1;while( have_rows('pt_da') ) : the_row();
                ?>
                <div class="mc-col-4 mc-pdx-12 mc-col-md-12">
                    <div class="item-pt">
                        <div class="phone-img-pt" id="<?php echo "phoneImgPt".$count; ?>" data-box="<?php echo "#ptBox".$count; ?>">
                            <img src="<?php echo get_sub_field("phone_img"); ?>" alt="Phone image">
                        </div>
                        <a href="<?php echo get_sub_field("link_pt"); ?>" class="post-titl-and-desc-pt flip-in-ver-left" id="<?php echo "ptBox".$count; ?>">
                            <div class="one-post">
                                <div class="img-pt">
                                    <img src="<?php echo get_sub_field("img_item_pt"); ?>" alt="Hình ảnh phân tích">
                                </div>
                                <div class="one-post-cover">
                                    <div class="title-one-pt">
                                        <?php echo get_sub_field("item_title_pt"); ?>
                                    </div>
                                    <div class="desc-one-pt">
                                        <?php echo get_sub_field("content_pt"); ?>
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <div class="title-out">
                            <?php echo get_sub_field("item_title_pt"); ?>
                        </div>
                        <button type="button" class="btn-out mc-btn-out-box" data-img="<?php echo "#phoneImgPt".$count; ?>" data-box="<?php echo "#ptBox".$count; ?>">Tìm hiểu thêm</button>
                    </div>
                </div>
                <?php 
                     $count++;endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>