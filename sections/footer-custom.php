<section class="mc_footer">
    <div class="mc-container">
        <div class="mc_footer_contain">
            <div class="mc-row">
                <div class="mc-col-8 mc-col-lg-7 mc-col-lgm-6 mc-col-md-12">
                    <div class="left-footer">
                        <div class="logo-footer">
                            <img src="<?php echo get_field("main_logo","option"); ?>" alt="Logo">
                        </div>
                        <div class="social-footer">
                            <a href="tel:<?php echo get_field("phone_config","option"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png" alt="Phone"></a>
                            <a href="<?php echo get_field("facebook_config","option"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-02.png" alt="Facebook"></a>
                            <a href="<?php echo get_field("website_config","option"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/longitude.png" alt="Browser"></a>
                            <a href="<?php echo get_field("youtube_config","option"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" alt="Youtube"></a>
                            <a href="<?php echo get_field("instagram_config","option"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" alt="Instagram"></a>
                        </div>
                        <div class="info-footer">
                            <div class="item-info">
                                <p>Chuyên gia tư vấn: </p>
                                <a href="tel:<?php echo get_field("phone_config","option"); ?>"><?php echo get_field("phone_config","option"); ?></a>
                            </div>
                            <div class="item-info">
                                <p>Website: </p>
                                <a href="<?php echo get_field("website_config","option"); ?>"><?php echo get_field("website_config","option"); ?></a>
                            </div>
                            <div class="item-info">
                                <p>Email: </p>
                                <a href="mailto:<?php echo get_field("email_config","option"); ?>"><?php echo get_field("email_config","option"); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mc-col-4 mc-col-lg-5 mc-col-lgm-6 mc-col-md-12">
                    <div class="right-footer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Form.svg" alt="Form">
                        <div class="right-form-cover">
                            <div class="title-form">
                                Đăng ký ngay <br />
                                Ưu đãi liền tay
                            </div>
                            <div class="inp-form-footer">
                                <input type="text" placeholder="Họ và tên" />
                            </div>
                            <div class="inp-form-footer">
                                <input type="text" placeholder="Số điện thoại" />
                            </div>
                            <div class="inp-form-footer">
                                <select name="cars" id="cars">
                                    <option value="volvo">Chọn dịch vụ</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="inp-form-footer">
                                <select name="cars" id="cars">
                                    <option value="volvo">Chọn địa chỉ gần bạn</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="inp-form-footer mgb-22p">
                                <select name="cars" id="cars">
                                    <option value="volvo">Chọn khung giờ tư vấn</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="btn-form-ft">
                                <button type="button">Gửi ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer-contain">
            <?php echo get_field("copyright_config","option"); ?>
        </div>
    </div>
</section>