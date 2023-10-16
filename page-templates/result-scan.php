<?php
/**
 * template name: Result Scan Page
 */
get_header();
?>
<section class="mc_result_scan">
<?php 
    if(isMobile()){ ?>
    <div class="mc_result_scan_cover">
        <div class="loading" id="mcResultLoading">
            <div class="loading-cover">
                <div class="img-face-loading">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/face-loading.png" alt="Face Loading">
                </div>
                <div class="loadding-bar">
                    <div class="txt-loading">
                        <p>Bắt đầu trải nghiệm chụp hình</p>
                        <p id="currentNumberLoad">0%</p>
                    </div>
                    <div class="loading-bar-cover">
                        <div class="loading-roll" id="mcLoadingRollRes">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-mob-scan">
            <a href="<?php echo site_url(); ?>">
                <img src="<?php echo get_field("logo_mobile_scan","option"); ?>" alt="Logo Mobile">
            </a>
        </div>
        <div class="container-mob">
            <div class="result-scan-image">
                <div class="resscan-img-title">
                    KẾT QUẢ PHÂN TÍCH DA
                </div>
                <div class="result-scan-image-cover">
                    <div class="list-image-results" id="mcListScanImageResultsCover">
                        <div class="item item-results-img-resp active" id="gocTrais">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cd-3.png" alt="Results">
                        </div>
                        <div class="item item-results-img-resp" id="chinhsDien">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cd-1.png" alt="Results">
                        </div>
                        <div class="item item-results-img-resp" id="gocPhair">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cd-2.png" alt="Results">
                        </div>
                    </div>
                    <div class="btn-show-results">
                        <button class="item-btn-show-results item-btn-show-results-rsp active" data-id="#gocTrais" data-num="#numMunTrais">
                            <div class="cover-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                                    <path d="M4.16602 19.9999C4.16602 29.2047 11.6279 36.6666 20.8327 36.6666C30.0374 36.6666 37.4994 29.2047 37.4994 19.9999C37.4994 10.7952 30.0374 3.33325 20.8327 3.33325C11.6279 3.33325 4.16602 10.7952 4.16602 19.9999Z" stroke="#302303" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.1533 15H14.1683" stroke="#302303" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.8324 23.3333C14.312 24.3453 11.8914 24.9999 9.16508 24.9999C7.28884 24.9999 6.39152 24.6898 4.99902 24.1666" stroke="#302303" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p>Góc trái</p>
                        </button>
                        <button class="item-btn-show-results item-btn-show-results-rsp" data-id="#chinhsDien" data-num="#numMunCenter">
                            <div class="cover-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                                    <path d="M17.166 25C18.1307 25.5278 19.2739 25.8333 20.4993 25.8333C21.7248 25.8333 22.868 25.5278 23.8327 25" stroke="#1A1A1A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.5112 18.3333H15.5M25.5 18.3333H25.4888" stroke="#1A1A1A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.83301 19.9999C3.83301 29.2047 11.2949 36.6666 20.4997 36.6666C29.7044 36.6666 37.1663 29.2047 37.1663 19.9999C37.1663 10.7952 29.7044 3.33325 20.4997 3.33325C11.2949 3.33325 3.83301 10.7952 3.83301 19.9999Z" stroke="#1A1A1A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p>Góc chính diện</p>
                        </button>
                        <button class="item-btn-show-results item-btn-show-results-rsp" data-id="#gocPhair" data-num="#numMunPhair">
                            <div class="cover-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                                    <circle cx="20.1657" cy="19.9999" r="16.6667" stroke="#1A1A1A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.847 15H26.832" stroke="#1A1A1A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M25.166 23.3333C26.6864 24.3453 29.1069 24.9999 31.8333 24.9999C33.7095 24.9999 34.6069 24.6898 35.9993 24.1666" stroke="#1A1A1A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            
                            <p>Góc phải</p>
                        </button>
                    </div>
                </div>
                
            </div>
            <button class="down-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6 12.5L11.3243 17.3806C11.6451 17.6747 11.8055 17.8217 12 17.8217C12.1945 17.8217 12.3549 17.6747 12.6757 17.3806L18 12.5" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6 6L11.3243 10.8806C11.6451 11.1747 11.8055 11.3217 12 11.3217C12.1945 11.3217 12.3549 11.1747 12.6757 10.8806L18 6" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div class="amount-mu">
                <div class="amount-mu-cover active" id="numMunTrais">
                    <div class="num-amount" id="amountMunTrais">
                        1
                    </div>
                    <div class="text-mu">
                        Mụn
                    </div>
                </div>
                <div class="amount-mu-cover" id="numMunCenter">
                    <div class="num-amount" id="amountMunCenter">
                        2
                    </div>
                    <div class="text-mu">
                        Mụn
                    </div>
                </div>
                <div class="amount-mu-cover" id="numMunPhair">
                    <div class="num-amount" id="amountMunPhair">
                        3
                    </div>
                    <div class="text-mu">
                        Mụn
                    </div>
                </div>
                
            </div>
            <div class="ladder-mu">
                <div class="title-ladder-mu">
                    <?php echo get_field("title_ladder_mu"); ?>
                </div>
                <div class="ladder-do">
                    <img src="<?php echo get_field("ladder_img"); ?>" alt="Ladder">
                    <div class="quality-arrow">
                        <div class="quality">
                            0-1
                        </div>
                        <div class="arrow-down">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="9" viewBox="0 0 11 9" fill="none">
                                <path d="M5.5 9L0.303849 -9.78799e-07L10.6962 -7.02746e-08L5.5 9Z" fill="black"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="quest-ladder">
                    <?php echo get_field("quest_ladder_mu"); ?>
                </div>
                <div class="answer-ladder">
                    <?php echo get_field("answer_ladder_mu"); ?>
                </div>
                <div class="desc-ladder">
                    <?php echo get_field("desc_ladder_mu"); ?>
                </div>
            </div>
            <div class="method-recomand">
                <div class="title_method_recomand">
                    <?php echo get_field("title_method_recomand"); ?>
                </div>
                <div class="sub-title-method-recomand">
                    <?php echo get_field("sub_title_method_recomand"); ?>
                </div>
                <div class="method">
                    <div class="text-show">
                        &#60;<?php echo get_field("title_name_service"); ?>&#62;
                    </div>
                    <div class="name-method">
                        <?php echo get_field("name_method_recomand"); ?>
                    </div>
                    <div class="desc-method">
                        <?php echo get_field("desc_method_recomand"); ?>
                    </div>
                </div>
                <div class="info-you-should-known">
                    <div class="title">
                        <?php echo get_field("info_should_know"); ?>
                    </div>
                    <div class="content-you-should-know">
                        <?php echo get_field("content_you_should_known"); ?>
                    </div>
                </div>
            </div>
            <div class="list_quest_nngra_mu">
                <div class="slider_list_quest_nngra_mu owl-carousel owl-theme">
                    <?php 
                        if( have_rows('quest_nngra_mu') ):
                            while( have_rows('quest_nngra_mu') ) : the_row();
                    ?>
                    <div class="item">
                        <div class="title-item">
                            <div class="icon">
                                <img src="<?php echo get_field("icon_nngra_mu"); ?>" alt="Icon">
                            </div>
                            <div class="text">
                                <?php echo get_sub_field("title_item_nngra_mu"); ?>
                            </div>
                        </div>
                        <div class="answer-item">
                            <?php echo get_sub_field("answer_item_nngra_mu"); ?>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                        endif;
                    ?>
                </div>
            </div>
            <a href="<?php echo site_url(); ?>" class="end-results">Kết thúc</a>
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