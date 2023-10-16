<?php
/**
 * template name: Information Client Page
 */
get_header();
?>
<section class="mc_information_client">
<?php 
    if(isMobile()){ ?>
    <div class="mc_information_client_cover">
        <div class="logo-mob-scan">
            <a href="<?php echo site_url(); ?>">
                <img src="<?php echo get_field("logo_mobile_scan","option"); ?>" alt="Logo Mobile">
            </a>
        </div>
        <div class="container-mob">
            <div class="mc_information_client_contain">
                <div class="title-info">
                    Thông tin làn da
                </div>
                <div class="desc-info">
                    Những thông tin chi tiết sau đây sẽ giúp chúng tôi đề xuất phương pháp phù hợp dành riêng cho bạn và được các chuyên gia da liễu lựa chọn
                </div>  
                <div class="quest-info">
                    <div class="item-first-quest">
                        <div class="title-quest-item">
                            Giới tính của bạn
                        </div>
                        <div class="answer-first-quest">
                            <div class="item-answer mc-item-answer-ifp" data-nd="Nam">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34" viewBox="0 0 35 34" fill="none">
                                        <path d="M24.1172 10.7573C19.1469 5.787 10.8092 5.68049 5.73242 10.7573C0.655601 15.8341 0.655601 24.0653 5.73242 29.1421C10.8092 34.2189 19.0404 34.2189 24.1172 29.1421C29.194 24.0653 29.0875 15.7276 24.1172 10.7573ZM24.1172 10.7573C27.9832 6.89132 33.875 0.99994 33.875 0.99994M33.875 0.99994L27.875 0.999941M33.875 0.99994L33.875 6.99994" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    Nam
                                </div>
                            </div>
                            <div class="item-answer mc-item-answer-ifp" data-nd="Nữ">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none">
                                        <path d="M25.6252 30.0001C32.6544 30.0001 38.6254 24.1798 38.6254 17C38.6254 9.82014 32.805 3.99976 25.6252 3.99976C18.4454 3.99976 12.625 9.82014 12.625 17C12.625 24.1798 18.596 30.0001 25.6252 30.0001ZM25.6252 30.0001C25.6252 31.8052 25.6252 33.9443 25.6252 36.0002M25.6252 44.0004C25.6252 44.0004 25.6252 40.1716 25.6252 36.0002M25.6252 36.0002H31.6253M25.6252 36.0002H19.6251" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    Nữ
                                </div>
                            </div>
                            <div class="item-answer mc-item-answer-ifp" data-nd="Khác">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none">
                                        <path d="M16.6732 13.7978L6.875 4M32.0768 13.7978L41.875 4M41.875 4L35.2083 4M41.875 4V10.6667M6.875 4H13.5417M6.875 4V10.6667M11.0417 12.3333L15.2083 8.16667M24.375 32.3333C30.2326 32.3333 35.2083 27.4831 35.2083 21.5C35.2083 15.5169 30.3581 10.6667 24.375 10.6667C18.3919 10.6667 13.5417 15.5169 13.5417 21.5C13.5417 27.4831 18.5174 32.3333 24.375 32.3333ZM24.375 32.3333C24.375 33.8375 24.375 35.6201 24.375 37.3333M24.375 44C24.375 44 24.375 40.8094 24.375 37.3333M24.375 37.3333H29.375M24.375 37.3333H19.375" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    Khác
                                </div>
                            </div>
                            <div class="item-answer mc-item-answer-ifp" data-nd="Không trả lời">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none">
                                    <path d="M10.125 10L38.125 38" stroke="#302303" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M44.125 24C44.125 12.9543 35.1707 4 24.125 4C13.0793 4 4.125 12.9543 4.125 24C4.125 35.0457 13.0793 44 24.125 44C35.1707 44 44.125 35.0457 44.125 24Z" stroke="#302303" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    Không trả lời
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="name-quest">
                        <div class="title-quest">
                            Tên của bạn là
                        </div>
                        <div class="item-name-quest">
                            <input type="text" id="nameQuestInp" />
                        </div>
                    </div>
                    <div class="item-seconds-quest">
                        <div class="second-quest">
                            Tuổi của bạn
                        </div>
                        <div class="answer-second">
                            <input type="number" name="" id="yourOld" />
                            Tuổi
                        </div>
                    </div>
                    <div class="sdt-quest">
                        <div class="title-quest">
                            Số điện thoại của bạn là
                        </div>
                        <div class="item-sdt-quest">
                            <input type="text" id="phoneQuestInp" />
                        </div>
                    </div>
                    <div class="item-three-quest">
                        <div class="three-quest">
                            Bạn có đang được tư vấn bởi chuyên gia da liễu không?
                        </div>
                        <div class="answer-three">
                            <div class="item-three-answer mc-item-three-answer-infp" data-nd="Có">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none">
                                    <path d="M44.75 24C44.75 12.9543 35.7957 4 24.75 4C13.7043 4 4.75 12.9543 4.75 24C4.75 35.0457 13.7043 44 24.75 44C35.7957 44 44.75 35.0457 44.75 24Z" stroke="#1A1A1A" stroke-width="2"/>
                                    <path d="M16.75 25L21.75 30L32.75 18" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    Có
                                </div>
                            </div>
                            <div class="item-three-answer mc-item-three-answer-infp" data-nd="Không">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none">
                                    <path d="M10.25 10L38.25 38" stroke="#302303" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M44.25 24C44.25 12.9543 35.2957 4 24.25 4C13.2043 4 4.25 12.9543 4.25 24C4.25 35.0457 13.2043 44 24.25 44C35.2957 44 44.25 35.0457 44.25 24Z" stroke="#302303" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    Không
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-quest">
                        <div class="four-quest">
                            Da của bạn có cảm thấy khó chịu hay kích ứng khi sử dụng phương pháp và các sản phẩm được tư vấn?
                        </div>
                        <div class="answer-four">
                            <div class="item-four-answer mc-item-four-answer-inpf" data-nd="Có">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none">
                                    <path d="M44.75 24C44.75 12.9543 35.7957 4 24.75 4C13.7043 4 4.75 12.9543 4.75 24C4.75 35.0457 13.7043 44 24.75 44C35.7957 44 44.75 35.0457 44.75 24Z" stroke="#1A1A1A" stroke-width="2"/>
                                    <path d="M16.75 25L21.75 30L32.75 18" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    Có
                                </div>
                            </div>
                            <div class="item-four-answer mc-item-four-answer-inpf" data-nd="Không">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none">
                                    <path d="M10.25 10L38.25 38" stroke="#302303" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M44.25 24C44.25 12.9543 35.2957 4 24.25 4C13.2043 4 4.25 12.9543 4.25 24C4.25 35.0457 13.2043 44 24.25 44C35.2957 44 44.25 35.0457 44.25 24Z" stroke="#302303" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    Không
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mc-notice-done-info">
                        Bạn vui lòng chờ đợi trong giây lát !
                    </div>
                    <button type="button" class="confirm-all-answer" id="confirmAnswerConditionsDa" data-url="<?php echo site_url("result-scan"); ?>">Xác nhận</button>
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