<section class="mc_sec_4">
    <div class="mc-container">
        <div class="mc_sec_contain_4">
            <div class="title-sec-4">
                <?php echo "KHÁM PHÁ CÁC VẤN ĐỀ VỀ LÀN DA"; ?>
            </div>
            <div class="sec-4-slide-cover">
                <div class="sec-4-slide owl-carousel owl-theme">
                    <?php 
                         $args = array(
                            'post_type'=>'kham-pha',
                            'post_status'=>'publish',
                            'posts_per_page' => 6,
                        );
                        $discover = new WP_Query( $args );
                        if ( $discover->have_posts() ) :
                        while ( $discover->have_posts() ) : $discover->the_post();
                    ?>
                    <div class="item-sec-4">
                        <a href="<?php the_permalink(); ?>" class="item-sec-4-cover">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Discover">
                            <div class="content-on-thumb">
                                <div class="txt-all">
                                    Tất cả về
                                </div>
                                <div class="title-item">
                                    <?php echo get_the_title(); ?>
                                </div>
                                <div class="btn-research-more">
                                    Tìm hiểu thêm
                                </div>
                            </div>
                        </a>
                    
                    </div>
                    <?php 
                            endwhile;
                        endif;
                        
                        // Reset Post Data
                        wp_reset_postdata();
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>