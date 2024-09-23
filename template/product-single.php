<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="product-single-main">
    <section class="sc product-single-hero">
        <div class="bg">
            <?php
            $cover = './assets/img/design/product-single-banner.jpg';
            $cover_m = './assets/img/design/product-single-banner-m.jpg';
            ?>
            <picture class="object blurred-media white-pulse">
                <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                <img src="<?php echo $cover; ?>" alt="hero bg" loading="lazy" draggable="false">
            </picture>
        </div>
        <div class="sc-inner">
            <div class="product-banner-text animate fadeIn">
                <div class="text">
                    <h2 class="title size-h1">DUO ROBOT</h2>
                    <p class="price">Lease starting at 66,000 Thb/mo*</p>
                    <p class="description">Our Duo Robot (robot) system has been developed with care and is the latest in technology. Compact and reliable, the smart parking robot will do the job for you in both parking and taking your car out of the parking lot. Suitable for those who want Parking for 70 cars or more</p>
                </div>
                <div class="highlight">
                    <div class="hightlight-text">
                        <span><i class="ic ic-directions_car"></i></span>
                        <p>Parking for 70 cars or more</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sc product-single-info">
        <div class="sc-inner">
            <div class="content-wrapper">
                <div class="entry-content entry-fadeIn">
                    <h3>Our Duo Robot (robot) system has been developed with care and is the latest in technology. Compact and reliable, the smart parking robot will do the job for you in both parking and taking your car out of the parking lot. Suitable for those who want Parking for 70 cars or more</h3>
                    <figure class="wp-block-image size-full"><img src="./assets/img/design/product-single-info-image1.jpg" alt="product info image"></figure>
                    <p>With more than 20 years of experience, Park Plus has a dedicated team of parking machine experts. Since the survey service space design Provide consultation at no cost. All of our products are guaranteed for no less than 3 years. Complete financial and insurance consulting services are available. Every step in work and installation takes into account maximum safety. Emergency service is available 24 hours a day, 7 days a day. Our team is ready to solve problems within 2 hours after being notified.</p>
                </div>
                <a class="button button-black animate fadeIn" download="">
                    <span>DOWNLOAD PDF</span><i class="ic ic-chevron-right"></i>
                </a>
            </div>
        </div>
        <div class="gallery">
            <div class="gallery-row animate fadeIn">
                <div class="image blurred-media">
                    <img src="./assets/img/design/product-single-info-image2.jpg" alt="gallery image">
                </div>
                <div class="image blurred-media">
                    <img src="./assets/img/design/product-single-info-image3.jpg" alt="gallery image">
                </div>
            </div>
            <div class="gallery-row animate fadeIn">
                <div class="image blurred-media">
                    <img src="./assets/img/design/product-single-info-image4.jpg" alt="gallery image">
                </div>
                <div class="image blurred-media">
                    <img src="./assets/img/design/product-single-info-image5.jpg" alt="gallery image">
                </div>
            </div>
        </div>
    </section>

    <section class="sc product-single-projects full-width-slides">
        <div class="sc-inner">
            <div class="wrapper">
                <div class="title">
                    <h2 class="size-h1 animate fadeIn">OUR PROJECTS</h2>
                </div>
                <div class="swiper animate fadeIn">
                    <div class="swiper-wrapper">
                        <?php
                        $onging_arr = array(
                            array(
                                "image" => "./assets/img/design/product-single-ongoing1.jpg",
                                "name" => "TONSON ONE RESIDENCE",
                            ),
                            array(
                                "image" => "./assets/img/design/product-single-ongoing2.jpg",
                                "name" => "THE CROWN RAMA 4",
                            ),
                            array(
                                "image" => "./assets/img/design/product-single-ongoing3.jpg",
                                "name" => "MODIZ SUKHUMVIT 50",
                            ),
                            array(
                                "image" => "./assets/img/design/product-single-ongoing4.jpg",
                                "name" => "MODIZ BANGPO",
                            ),

                        );

                        foreach ($onging_arr as $item) {
                        ?>
                            <div class="swiper-slide">
                                <a class="link-overlay" href="#outer">&nbsp;</a>
                                <div class="content-wrapper">
                                    <div class="image blurred-media">
                                        <img src="<?php echo $item["image"] ?>" alt="<?php echo $item["name"] ?>" loading="lazy" draggable="false">>
                                    </div>
                                    <div class="text">
                                        <h3><?php echo $item["name"] ?></h3>
                                        <p class="size-subtitle2 weight-semibold">(ON GOING)</p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="button-footer animate fadeIn">
                    <a class="button button-black" href="<?php echo $root; ?>references.php">
                        <span>ALL PROJECTS</span><i class="ic ic-chevron-right"></i>
                    </a>

                    <div class="arrows hidden-device-sm">
                        <div class="full-width-slides-swiper-button-prev swiper-button-prev"></div>
                        <div class="full-width-slides-swiper-button-next swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sc product-single-other">
        <div class="sc-inner">
            <div class="wrapper">
                <div class="title">
                    <h2 class="size-h1 animate fadeIn">OUR PROJECTS</h2>
                </div>
                <div class="projects-grid">
                    <?php
                    $project_arr = array(
                        array(
                            "name" => "SMART",
                            "description" => "FOR UP TO 8-16 UNITS",
                            "image" => "./assets/img/design/product-single-other1.jpg",
                        ),
                        array(
                            "name" => "PUZZLE",
                            "description" => "FOR UP TO 70 CARS",
                            "image" => "./assets/img/design/product-single-other2.jpg",
                        ),
                    );

                    foreach ($project_arr as $item) {
                    ?>
                        <div class="other-item animate fadeIn">
                            <a class="link-overlay" href="<?php echo $root; ?>product-single.php">&nbsp;</a>
                            <div class="image blurred-media">
                                <img src="<?php echo $item["image"] ?>" alt="<?php echo $item["name"] ?>" loading="lazy" draggable="false">
                            </div>
                            <div class="text">
                                <h3 class="size-h2"><?php echo $item["name"] ?></h3>
                                <p class="size-subtitle2"><?php echo $item["description"] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>