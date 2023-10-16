<?php 
    get_header();
?>
<section class="mc_single_discover">
    <div class="banner_single_discover">
        <img src="<?php echo get_field("banner_item_discover"); ?>" alt="Banner" />
    </div>
    <div class="banner_single_discover_mob">
        <img src="<?php echo get_field("banner_item_discover_mobile"); ?>" alt="Banner Mobile" />
    </div>
    <div class="mc-container">
        <div class="mc_single_discover_contain">
            <div class="mc-row mc-mg--12">
                <div class="mc-col-6 mc-pdx-12 mc-col-sm-12 mc-dpn">
                    <div class="left-title-discover-content">
                        <?php 
                            if( have_rows('content_repeater_discover') ):
                                $numMuc_1=1;while( have_rows('content_repeater_discover') ) : the_row();
                        ?>
                        <div class="item-title-dis-content" data-right="<?php echo "#rightContent".$numMuc_1; ?>">
                            <p class="stt-dis">
                                <?php echo get_sub_field("stt_content_discover"); ?>
                            </p>
                            <p class="title-left">
                                <?php echo get_sub_field("title_content_discover"); ?>
                            </p>
                        </div>
                        <?php 
                             $numMuc_1++;endwhile;
                            endif;
                        ?>
                    </div>
                </div>
                <div class="mc-col-6 mc-pdx-12 mc-col-sm-12">
                    <div class="right-content-discover">
                        <div class="begin-right-content-dis">
                            <div class="big-title-dis">
                                <?php the_title(); ?>
                            </div>
                            <div class="date-dis">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock-01.png" alt="Clock" /></p>
                                <p><?php echo get_the_date(); ?></p>
                            </div>
                            <div class="begin-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php 
                            if( have_rows('content_repeater_discover') ):
                                $numMuc_2=1;while( have_rows('content_repeater_discover') ) : the_row();
                        ?>
                        <div class="item-right-content-dis" id="<?php echo "rightContent".$numMuc_2; ?>">
                            <div class="stt-right-conds">
                                <?php echo get_sub_field("stt_content_discover"); ?>      
                                <div class="left-border">
                                    <div class="left-border-cover">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="item-detail-dis">
                                <?php echo get_sub_field("content_item_discover"); ?>
                            </div>
                        </div>
                        <?php 
                             $numMuc_2++;endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="true_or_false">
        <div class="mc-container">
            <div class="title-true-or-false">
                <?php echo "Đúng hoặc sai" ?>
            </div>
            <div class="list_quest owl-carousel owl-theme">
                <?php 
                    if( have_rows('list_quest_true_or_false') ):
                        $count_true_false=1;
                        while( have_rows('list_quest_true_or_false') ) : the_row();
                ?>
                <div class="item-quest-kp">
                    <div class="front-item-quest mc-flip" id="<?php echo 'frontItem'.$count_true_false; ?>">
                        <img src="<?php echo get_sub_field("img_mh_kp"); ?>" alt="Quest" />
                        <div class="txt-quest">
                            <?php echo get_sub_field("quest_kp"); ?>
                        </div>
                        <div class="btn-true-false">
                            <button class="true mc_click_show_answer" type="button" data-behind="<?php echo '#behindItem'.$count_true_false; ?>" data-front="<?php echo '#frontItem'.$count_true_false; ?>">Đúng</button>
                            <button class="false mc_click_show_answer" type="button" data-behind="<?php echo '#behindItem'.$count_true_false; ?>" data-front="<?php echo '#frontItem'.$count_true_false; ?>">Sai</button>
                        </div>
                    </div>
                    <div class="behind-item-quest mc-flip" id="<?php echo 'behindItem'.$count_true_false; ?>">
                        <div class="behind-item-quest-cover">
                            <div class="answer">
                                <?php echo get_sub_field("answer_quest_kp"); ?>
                            </div>
                            <div class="gt_answer">
                                <?php echo get_sub_field("gt_answer_kp"); ?>
                            </div>
                        </div>
                        <div class="btn-back">
                            <button class="mc_back_front" type="button" data-behind="<?php echo '#behindItem'.$count_true_false; ?>" data-front="<?php echo '#frontItem'.$count_true_false; ?>">Trở lại</button>
                        </div>
                    </div>
                </div>
                <?php 
                     $count_true_false++;endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
    <div class="you_know">
        <div class="mc-container">
            <div class="title-you-know">
                <?php echo get_field("title_you_know"); ?>
            </div>
            <div class="content-you-know">
                <?php echo get_field("content_you_know"); ?>
            </div>
        </div>
    </div>
    <div class="service_resolve">
        <div class="mc-container">
            <div class="title-service-resolve">
                <?php echo get_field("title_service_resolve"); ?>
            </div>
            <div class="desc-service-resolve">
                <?php echo get_field("desc_service_resolve"); ?>
            </div>
            <div class="list-service-resolve owl-carousel owl-theme">
                <?php 
                    $ser_posts = get_field('select_post_service_resolve');
                    if( $ser_posts ):
                        foreach( $ser_posts as $ser_post ): 
                            $permalink = get_permalink( $ser_post->ID );
                            $title = get_the_title( $ser_post->ID );
                ?>
                <div class="item-ser-resolve">
                    <div class="item-ser-resolve-cover">
                        <img src="<?php echo get_the_post_thumbnail_url($ser_post->ID); ?>" alt="Thumb">
                        <div class="title-and-btn-res">
                            <div class="title-res-ser">
                                <?php echo $title; ?>
                            </div>
                            <a href="<?php echo $permalink; ?>">Tìm hiểu thêm</a>
                        </div>
                    </div>
                </div>
                <?php 
                        endforeach;
                    endif; 
                ?>
            </div>
        </div>
    </div>
    <div class="why_choose_dva">
        <div class="mc-container">
            <div class="why_choose_dva_title">
                <?php echo get_field("title_why_choose"); ?>
            </div>
            <div class="list_why owl-carousel owl-theme">
                <?php 
                    if( have_rows('list_why') ):
                        while( have_rows('list_why') ) : the_row();
                ?>
                <div class="item-why">
                    <div class="item-img-why">
                        <img src="<?php echo get_sub_field("im_why_choose"); ?>" alt="Why">
                    </div>
                    <div class="txt-item-why-choose">
                        <?php echo get_sub_field("text_why_choose"); ?>
                    </div>
                </div>
                <?php 
                     endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
    <div class="research_more">
        <div class="mc-container">
            <div class="research_more_title">
                <?php echo get_field("title_research_more"); ?>
            </div>
            <div class="list-post-research owl-carousel owl-theme">
                <?php 
                    $research_posts = get_field('select_post_research_more');
                    if( $research_posts ):
                        foreach( $research_posts as $research_post ): 
                            $permalink = get_permalink( $research_post->ID );
                            $title = get_the_title( $research_post->ID );
                ?>
                <a href="<?php echo $permalink; ?>" class="item-post-research">
                    <div class="img-item-post-research">
                        <img src="<?php echo get_the_post_thumbnail_url($research_post->ID); ?>" alt="Thumb">
                    </div>
                    <div class="info-item">
                        <div class="title-item">
                            <?php echo $title; ?>
                        </div>
                        <div class="desc-item">
                            <?php echo wp_trim_words( get_the_excerpt($research_post->ID), 12, "..." ); ?>
                        </div>
                    </div>
                </a>
                <?php 
                        endforeach;
                    endif; 
                ?>
            </div>
        </div>
    </div>
    <div class="mc_sec_5">
        <div class="mc-container">
            <div class="mc_sec_5_contain">
                <div class="bs-row">
                    <div class="bs-col-left">
                        <img src="<?php echo get_field("left_doctor_img_op","option"); ?>" alt="Bác sĩ">
                    </div>
                    <div class="bs-col-right">
                        <div class="txt-bs-right">
                            <?php echo get_field("right_text_doctor_op","option"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('sections/footer-custom');  ?>
<?php get_footer();?>