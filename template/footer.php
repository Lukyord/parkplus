<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<footer id="footer">
    <div class="footer-nav <?php if ($page == "products.php") echo "scroll-section" ?>">
        <div class="blue-sc">
            <div class="blue-content-wrapper">
                <div class="text">
                    <p class="size-overline weight-semibol description">HOTLINE</p>
                    <h2 class="size-h1 heading">GET IN TOUCH<br>24/7</h2>
                    <p class="secondary-description">Commodo in eget pulvinar luctus dictum elementum in donec nulla. </p>
                </div>
                <div class="calls">
                    <div class="call">
                        <a class="link-overlay" href="#outer">&nbsp;</a>
                        <span><i class="ic ic-call"></i></span>
                        <p class="call-name">CALL<br>SALES PARK PLUS</p>
                    </div>
                    <div class="call">
                        <a class="link-overlay" href="#outer">&nbsp;</a>
                        <span><i class="ic ic-line"></i></span>
                        <p class="call-name">LINE SALES</p>
                    </div>
                    <div class="call">
                        <a class="link-overlay" href="#outer">&nbsp;</a>
                        <span><i class="ic ic-mail"></i></span>
                        <p class="call-name">EMAIL SALES</p>
                    </div>
                    <div class="call">
                        <a class="link-overlay" href="#outer">&nbsp;</a>
                        <span><i class="ic ic-call"></i></span>
                        <p class="call-name">CALL SERVICE</p>
                    </div>
                    <div class="call">
                        <a class="link-overlay" href="#outer">&nbsp;</a>
                        <span><i class="ic ic-line"></i></span>
                        <p class="call-name">LINE SALES</p>
                    </div>
                    <div class="call">
                        <a class="link-overlay" href="#outer">&nbsp;</a>
                        <span><i class="ic ic-mail"></i></span>
                        <p class="call-name">EMAIL SALES</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-sc">
            <div class="white-content-wrapper">
                <div class="email hidden-device-md">
                    <p class="column-des size-overline weight-bold">EMAIL US</p>
                    <a class="size-h2" href="mailto:sales@parkplusth.com">SALES@PARKPLUSTH.COM</a>
                </div>

                <div class="tel-info">
                    <div class="number hidden-device-md">
                        <p class="column-des size-overline weight-bold">OFFICE</p>
                        <a class="size-h2" href="tel:+6620533928">02 053 3928</a>
                    </div>
                    <div class="number hidden-device-md">
                        <p class="column-des size-overline weight-bold">CALL CENTER</p>
                        <a class="size-h2" href="tel:+66974636559">097 463 6559</a>
                    </div>
                </div>

                <div class="links">
                    <ul class="products">
                        <li><a class="hover-underline" href="<?php echo $root; ?>product-single.php">ROBOT</a></li>
                        <li><a class="hover-underline" href="<?php echo $root; ?>product-single.php">SMART PARKING</a></li>
                        <li><a class="hover-underline" href="<?php echo $root; ?>product-single.php">PUZZLE</a></li>
                        <li><a class="hover-underline" href="<?php echo $root; ?>product-single.php">TOWER</a></li>
                        <li><a class="hover-underline" href="<?php echo $root; ?>product-single.php">STACKER</a></li>
                    </ul>
                    <ul class="pages weight-semibold">
                        <li><a class="hover-underline" href="<?php echo $root; ?>services.php">SERVICES</a></li>
                        <li><a class="hover-underline" href="<?php echo $root; ?>grid-template.php">NEWS</a></li>
                        <li><a class="hover-underline" href="<?php echo $root; ?>grid-template.php">BLOG</a></li>
                        <li><a class="hover-underline" href="<?php echo $root; ?>contact.php">CONTACT</a></li>
                        <li class="hidden-device-md"><a class="hover-underline" href="<?php echo $root; ?>page.php">PRIVACY</a></li>
                        <li class="hidden-device-md"><a class="hover-underline" href="<?php echo $root; ?>page.php">TERMS</a></li>
                    </ul>
                </div>

                <div class="socials-and-terms size-overline weight-semibold">
                    <div class="socials">
                        <p>FOLLOW US</p>
                        <div class="social-links">
                            <div class="social-icon">
                                <a class="link-overlay" href="#outer">&nbsp;</a>
                                <img src="./assets/img/design/icon-facebook.svg" alt="facebook icon">
                            </div>
                            <div class="social-icon">
                                <a class="link-overlay" href="#outer">&nbsp;</a>
                                <img src="./assets/img/design/icon-line.svg" alt="line icon">
                            </div>
                            <div class="social-icon">
                                <a class="link-overlay" href="#outer">&nbsp;</a>
                                <img src="./assets/img/design/icon-instagram.svg" alt="instagram icon">
                            </div>
                            <div class="social-icon">
                                <a class="link-overlay" href="#outer">&nbsp;</a>
                                <img src="./assets/img/design/icon-linkedin.svg" alt="linkedin icon">
                            </div>
                            <div class="social-icon">
                                <a class="link-overlay" href="#outer">&nbsp;</a>
                                <img src="./assets/img/design/icon-youtube.svg" alt="youtube icon">
                            </div>
                            <div class="social-icon">
                                <a class="link-overlay" href="#outer">&nbsp;</a>
                                <img src="./assets/img/design/icon-x.svg" alt="x icon">
                            </div>
                        </div>
                    </div>
                    <div class="terms">
                        <div class="terms-links hidden-device-sm">
                            <a class="hover-underline" href="<?php echo $root; ?>page.php">PRIVACY</a>
                            <a class="hover-underline" href="<?php echo $root; ?>page.php">TERMS</a>
                        </div>
                        <p>PARKPLUS © 2024 ALL RIGHTS RESERVED</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<div id="clipboard" style="display:none;">Copied</div>
</div><!-- CLOSE:#page -->

<?php //if($page_index) { include($root."include/_wp-code/wp-cookie-law-info-bar.php"); } 
?>

<div id="page-message">
    <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
</div>

<!-- JS:LIBRARY -->
<script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
<script src="<?php echo $root; ?>assets/js/library/share.js"></script>
<script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/lenis/lenis.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/splitting/splitting.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/imagesLoaded/imagesLoaded.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/masonry/masonry.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/gsap.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollTrigger.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollToPlugin.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/Flip.min.js"></script>

<!-- JS:CONFIG -->
<script src="<?php echo $root; ?>assets/js/common/theme.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/common/theme-wp.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/common/util.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/index.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/about.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/products.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/services.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/references.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/calculator.js?v=<?php echo time(); ?>"></script>

</body>

</html>