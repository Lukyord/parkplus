<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main">
    <section class="sc index-hero">
        <div class="image-banner">
            <?php
            $cover = './assets/img/design/index-hero-banner.jpg';
            $cover_m = './assets/img/design/index-hero-banner-m.jpg';
            if (preg_match("/\.(mp4)$/", $cover)) { ?>
                <figure class="object blurred-media white-pulse">
                    <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                </figure>
            <?php } else { ?>
                <picture class="object blurred-media white-pulse">
                    <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                    <img src="<?php echo $cover; ?>" alt="hero bg" loading="lazy" draggable="false">
                </picture>
            <?php } ?>
        </div>
        <div class="sc-inner">
            <div class="hero-text animate fadeIn">
                <h1 class="size-h1">ROBOT <br class="hidden-device-md">PARKING</h1>
                <p class="size-subtitle1 description">Lease starting at 66,000 Thb/mo*</p>
                <a href="<?php echo $root; ?>products.php" class="button">
                    <span>LEARN MORE</span><i class="ic ic-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="sc featured" id="index-featured-products">
        <div class="sc-inner">
            <div class="swiper swiper-slides-index">
                <div class="swiper-wrapper">
                    <?php
                    $product_arr = array("ROBOT", "PUZZEL", "SMART PARKING", "TOWER", "STACKER");
                    foreach ($product_arr as $produt) { ?>
                        <div class="swiper-slide">
                            <div class="content-wrapper animate fadeIn">
                                <div class="featured-text">
                                    <p class="header size-overline weight-semibold">FEATURED PRODUCTS</p>
                                    <div class="title">
                                        <h2 class="product-title size-h1"><?php echo $produt; ?></h2>
                                        <p class="size-subtitle1 description">Suitable for homes or home offices with limited space.</p>
                                    </div>
                                    <a href="<?php echo $root; ?>products.php" class="button button-black hidden-device-sm">
                                        <span>EXPLORE MORE</span><i class="ic ic-chevron-right"></i>
                                    </a>
                                </div>

                                <div class="featured-image">
                                    <div class="blurred-media white-pulse">
                                        <img src="./assets/img/design/index-featured1.jpg" alt="featured image" draggable="false" loading="lazy">
                                    </div>
                                    <div class="gif-image">
                                        <div class="gif-image-wrapper blurred-media white-pulse">
                                            <img src="./assets/img/design/index-featured-gif.gif" alt="featured image gif" draggable="false" loading="lazy">
                                            <button class="gif-image-button">
                                                <img src="./assets/img/design/index-featured-gif-button.svg" alt="gif button" draggable="false" loading="lazy">
                                            </button>
                                        </div>
                                    </div>
                                    <a href="<?php echo $root; ?>products.php" class="button button-black hidden-device-md">
                                        <span>EXPLORE MORE</span><i class="ic ic-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper swiper-thumbs-index animate fadeIn">
                <div class="swiper-wrapper">
                    <?php
                    $product_arr = array("ROBOT", "PUZZEL", "SMART PARKING", "TOWER", "STACKER");
                    foreach ($product_arr as $produt) { ?>
                        <div class="swiper-slide">
                            <div class="slide-wrapper">
                                <p class="tab" data-text="<?php echo $produt; ?>"><?php echo $produt; ?></p>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="sc video-banner">
        <div class="bg">
            <?php
            $cover = './assets/img/design/index-video-banner.mp4';
            $cover_m = './assets/img/design/index-video-banner-m.mp4';
            if (preg_match("/\.(mp4)$/", $cover)) { ?>
                <figure class="object blurred-media white-pulse">
                    <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                </figure>
            <?php } else { ?>
                <picture class="object blurred-media white-pulse">
                    <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                    <img src="<?php echo $cover; ?>" alt="hero bg" loading="lazy" draggable="false">
                </picture>
            <?php } ?>
        </div>
        <div class="sc-inner">
            <a href="<?php echo $root; ?>services.php" class="button animate fadeIn">
                <span>LEARN MORE</span><i class="ic ic-chevron-right"></i>
            </a>
        </div>
    </section>

    <section class="sc aftersales-and-calculator">
        <div class="sc-inner">
            <div class="aftersales animate fadeIn">
                <div class="aftersales-and-calculator-title">
                    <p class="size-overline weight-semibol description">AFTERSALES</p>
                    <h2 class="size-h1 heading">SERVICE</h2>
                </div>
                <div class="services-container">
                    <div class="service col-1">
                        <div class="image blurred-media">
                            <img src="./assets/img/design/index-aftersales1.jpg" alt="aftersales service image" loading="lazy" draggable="false">
                        </div>
                        <div class="text">
                            <h3 class="title size-h2 description">ONLINE MAINTENANCE</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur. Consectetur arcu non volutpat malesuada. Amet volutpat non nunc ut est purus at quis. Eget sagittis pulvinar vulputate habitasse. Nunc venenatis in arcu aliquam tortor suspendisse pellentesque diam purus.
                            </p>
                        </div>
                    </div>
                    <div class="service col-2">
                        <div class="image blurred-media">
                            <img src="./assets/img/design/index-aftersales2.jpg" alt="aftersales service image" loading="lazy" draggable="false">
                        </div>
                        <div class="text">
                            <h3 class="title size-h2 description">FINANCIAL WARRANTY INSURANCE</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur. Consectetur arcu non volutpat malesuada. Amet volutpat non nunc ut est purus at quis. Eget sagittis pulvinar vulputate habitasse. Nunc venenatis in arcu aliquam tortor suspendisse pellentesque diam purus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="calculator animate fadeIn">
                <div class="aftersales-and-calculator-title">
                    <p class="size-overline weight-semibol description">CALCULATE</p>
                    <h2 class="size-h1 heading">PARKING<br>AREA</h2>
                    <p class="secondary-description">Sit eget dolor eget ac ridiculus. Commodo in eget pulvinar luctus dictum elementum in donec nulla. Leo duis parturient vitae aliquet sagittis leo tempus cursus faucibus.</p>
                </div>
                <form action="<?php echo $root ?>calculator.php" class="index-calculator-form">
                    <div class="fields">
                        <?php
                        $field_input_arr = array(
                            array(
                                "icon" => "ic-directions_car",
                                "label" => "HOW MANY CAR",
                                "initial-value" => "1200",
                                "unit" => "CARS"
                            ),
                            array(
                                "icon" => "ic-pin_drop",
                                "label" => "LAND PRICE",
                                "initial-value" => "3600",
                                "unit" => "THB/SQ.M"
                            ),
                        );

                        foreach ($field_input_arr as $field_input) {
                            include($root . "include/element-field-input.php");
                        }
                        ?>

                        <a href="<?php echo $root; ?>calculator.php" class="button button-blue">
                            <span>CALCULATE</span><i class="ic ic-chevron-right"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="sc parking-reference">
        <div class="sc-inner">
            <div class="content-wrapper">
                <div class="text animate fadeIn">
                    <h2 class="title size-h2">PARKING REFERENCE</h2>
                    <p class="description">Sit eget dolor eget ac ridiculus. Commodo in eget pulvinar luctus dictum elementum in donec nulla. Leo duis parturient vitae aliquet sagittis leo tempus cursus faucibus.</p>
                </div>
                <div class="map animate fadeIn">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11200.675829730526!2d-75.6876061!3d45.42609535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04ff4fe494ef%3A0x26bb54f60c29f6e!2sParliament+Hill!5e0!3m2!1sen!2sca!4v1528808935681" title="mock iframe"></iframe>
                    <!-- <img src="./assets/img/design/index-parking-ref-map.jpg" alt="parking reference map" draggable="false" loading="lazy"> -->
                    <?php
                    $pin_arr = array(
                        array(
                            "top" => "50%",
                            "left" => "50%"
                        ),
                        array(
                            "top" => "30%",
                            "left" => "70%"
                        ),
                        array(
                            "top" => "40%",
                            "left" => "60%"
                        ),
                        array(
                            "top" => "10%",
                            "left" => "10%"
                        ),
                    );

                    foreach ($pin_arr as $pin) {
                    ?>
                        <div class="pin" style="top: <?php echo $pin["top"] ?>; left: <?php echo $pin["left"] ?>">
                            <img src="./assets/img/design/logo-icon.svg" alt="logo icon" draggable="false" loading="lazy">
                        </div>
                    <?php } ?>
                </div>
                <div class="locations-wrapper animate fadeIn">
                    <div class="locations">
                        <?php
                        $locations_arr = array(
                            array(
                                "image" => "./assets/img/design/index-parking-ref1.jpg",
                                "name" => "True Digital Park"
                            ),
                            array(
                                "image" => "./assets/img/design/index-parking-ref2.jpg",
                                "name" => "Cooper Siam"
                            ),
                            array(
                                "image" => "./assets/img/design/index-parking-ref3.jpg",
                                "name" => "Coffee Bean"
                            ),
                            array(
                                "image" => "./assets/img/design/index-parking-ref4.jpg",
                                "name" => "Paolo Kaset Hospital"
                            ),
                            array(
                                "image" => "./assets/img/design/index-parking-ref5.jpg",
                                "name" => "Benz Rachakru"
                            ),
                            array(
                                "image" => "./assets/img/design/index-parking-ref6.jpg",
                                "name" => "Modiz Sukhumvit 50"
                            ),
                        );

                        foreach ($locations_arr as $location) {
                        ?>
                            <div class="location">
                                <a class="link-overlay" href="#outer">&nbsp;</a>
                                <div class="image blurred-media">
                                    <img src="<?php echo $location["image"] ?>" alt="location image" draggable="false" loading="lazy">
                                </div>
                                <p class="name size-subtitle1"><?php echo $location["name"] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                    <a href="<?php echo $root; ?>references.php" class="button button-black">
                        <span>ALL PROJECTS</span><i class="ic ic-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>