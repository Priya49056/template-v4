<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template_v4
 */

?>

    <!-- Footer Section Starts -->
	<footer class="footer a2-bg position-relative pt-15 pt-lg-0 z-0 ">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1 d-none d-xxxl-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector.png" alt="vector" class="position-absolute jello">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector4.png" alt="vector" class="position-absolute bottom-0 end-0">
        </div>
        <div class="container">

            
            <div class="row gy-8 gy-sm-12 gy-lg-0 pt-120 pb-120">
                <div class="col-6 col-lg-3">
                    <div class="footer__part">
                        <h4 class="mb-6 mb-lg-8">Quick Link</h4>
                        <ul class="footer_list d-flex flex-column gap-2 gap-sm-3 gap-md-4">
                            <li>
                                <a class="n2-color d-flex align-items-center" href="<?php echo home_url(); ?>/forex">Forex</a>
                            </li>
                            <li>
                                <a class="n2-color" href="<?php echo home_url(); ?>/indices">Indices</a>
                            </li>
                            <li>
                                <a class="n2-color" href="<?php echo home_url(); ?>/commodities">Commodities</a>
                            </li>
                            <li>
                                <a class="n2-color" href="<?php echo home_url(); ?>/deposits-withdrawals">Deposits & Withdrawals</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="footer__part">
                        <h4 class="mb-6 mb-lg-8">Company</h4>
                        <ul class="footer_list d-flex flex-column gap-2 gap-sm-3 gap-md-4">
                            <li>
                                <a class="n2-color" href="<?php echo home_url(); ?>/about">About</a>
                            </li>
                            <li>
                                <a class="n2-color" href="<?php echo home_url(); ?>/education">Education</a>
                            </li>
                            <li>
                                <a class="n2-color" href="<?php echo home_url(); ?>/partnership">Partnership</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="footer__part">
                        <h4 class="mb-6 mb-lg-8">Legal</h4>
                        <ul class="footer_list d-flex flex-column gap-2 gap-sm-3 gap-md-4">
                            <li>
                                <a class="n2-color" href="<?php echo home_url(); ?>/terms-conditions">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="n2-color" href="<?php echo home_url(); ?>/privacy-policy">Privacy & Policy</a>
                            </li>
                            <li>
                                <a class="n2-color" href="<?php echo home_url(); ?>/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-6 col-lg-3">
                    <div class="footer__part">
                        <h4 class="mb-6 mb-lg-8">Contact Us</h4>
                        <div class="d-flex flex-column gap-2 gap-sm-3 gap-md-4">
                            <a href="mailto:info@finxcart.com">info@finxcart.com</a>
                            <a href="tel:XXXXXXXX">XXXXXXXX</a> 
                        </div>
                    </div>
                </div> -->
                <div class="col-6 col-lg-3">
                    <div class="footer__part">
                        <h4 class="mb-6 mb-lg-8">Newsletter</h4>
                        <form action="your-newsletter-endpoint" method="POST" class="d-flex flex-column gap-2 gap-sm-3 gap-md-4">
                            <div class="form-group">
                                <label for="newsletter-email" class="n2-color">Email Address</label>
                                <input type="email" id="newsletter-email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="col-sm-4 text-sm-end">
                                <a href="#" class="newsletter cmn-btn secondary-alt ms-auto fs-five nb4-xxl-bg gap-2 align-items-center  py-2 px-4 py-lg-2 px-lg-20">Register <i class="ti ti-arrow-right fs-four"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 border-top border-color opac-20 py-7 py-xxl-8">
                    <div class="footer__copyright d-center gap-15 flex-wrap justify-content-md-between">
                        <p class="fs-six order-2 order-md-0 text-center text-md-start">Copyright ©<span class="currentYear"></span> FinXcart <span>|</span> All rights reserved By FinXcart </p>
                        <ul class="social-area d-center gap-2 gap-md-3">
                            <li>
                                <a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-facebook"></i></a>
                            </li>
                            <li>
                                <a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-twitch"></i></a>
                            </li>
                            <li>
                                <a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-instagram"></i></a>
                            </li>
                            <li>
                                <a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-discord-filled"></i></a>
                            </li>
                            <li>
                                <a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ends -->
    <!-- ==== js dependencies start ==== -->
    <script data-cfasync="false" src="<?php echo get_template_directory_uri(); ?>/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/plugin-custom.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
