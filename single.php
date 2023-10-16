<?php
get_header();
?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
?>
<section class="default_single_post">
    <div class="mc-container">
        <div class="mc-row-single">
            <div class="mc-col-left-single">
                <div class="content-left-single">
                    <div class="breadcum">
                        <a href="<?php echo site_url(); ?>" class="home">
                            <div class="sty-home">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ic-round-home.png" alt="Home">
                                </div>
                                <div class="text">
                                    Trang chủ
                                </div>
                            </div>
                        </a>
                        <div class="arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" viewBox="0 0 11 16" fill="none">
                            <path d="M3 12L6.5 8L3 4L4 3L8.33516 8L4 13L3 12Z" fill="#999999"/>
                        </svg>
                        </div>
                        <?php 
                             $category_detail=get_the_category(get_the_ID());//$post->ID
                        ?>
                        <a href="<?php echo get_category_link($category_detail[0]); ?>" class="cat">
                            <?php 
                                echo $category_detail[0]->cat_name;
                            ?>
                        </a>
                    </div>
                    <div class="title-post">
                        <?php the_title(); ?>
                    </div>
                    <div class="author-and-date">
                        <div class="author">
                            <?php echo get_the_author(); ?>
                        </div>
                        <div class="dost">
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
                            <circle cx="2" cy="2" r="2" fill="#302303"/>
                            </svg>
                        </div>
                        <div class="date">
                            <?php echo get_the_date(); ?>
                        </div>
                    </div>
                    <div class="content-cover">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="mc-col-right-single">
                <div class="other-post">
                    <div class="title-other-post">
                        Bài viết khác
                    </div>
                    <div class="list-other-post">
                        <?php 
                            $args = array(
                                'post_type'=> 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 5,
                                'orderby' => 'date'
                            );
                            $other_posts = new WP_Query( $args );
                            if ( $other_posts->have_posts() ) :
                                while ( $other_posts->have_posts() ) : $other_posts->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="item">
                            <div class="left-item-post">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Thumb">
                            </div>
                            <div class="right-item-post">
                                <?php echo get_the_title(); ?>
                            </div>
                        </a>
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
        <div class="post-relate">
            <div class="title-post-relate">
                Tin liên quan
            </div>
            <div class="list_post_relate">
            <?php 
                $categories = get_the_category(get_the_ID());
                if ($categories){
                    $category_ids = array();
                    foreach($categories as $netweb_category) $category_ids[] = $netweb_category->term_id;
                    $args=array(
                        'category__in' => $category_ids,
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 9, 
                    );
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ):
                        while ($my_query->have_posts()):$my_query->the_post();
                         ?>
                            <a href="<?php the_permalink(); ?>" class="item-relate">
                                <div class="thumb-post">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Thumb">
                                </div>
                                <div class="item-title-post-relate">
                                    <?php the_title(); ?>
                                </div>
                                <div class="item-date-relate">
                                    <?php echo get_the_date(); ?>
                                </div>
                            </a>
                         <?php
                        endwhile;
                    endif; wp_reset_query();
                }
            ?>
            </div>
        </div>
    </div>
</section>
<?php 
    endwhile;
    endif;
?>
<?php 
    get_template_part('sections/footer-custom'); 
?>
<?php get_footer();?>