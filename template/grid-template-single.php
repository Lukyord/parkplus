<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="grid-template-single-main">
    <section class="sc grid-template-single-hero">
        <div class="bg">
            <?php
            $cover = "./assets/img/design/grid-template-hero-image.jpg";
            $cover_m = "./assets/img/design/grid-template-hero-image-m.jpg";
            ?>
            <picture class="object blurred-media white-pulse">
                <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                <img src="<?php echo $cover; ?>" alt="hero bg" loading="lazy" draggable="false">
            </picture>
        </div>
        <div class="sc-inner">
            <div class="text">
                <h2 class="title size-h2">Thinking of creating a business You have to start with an idea, find a pain point that meets your needs and is different.</h2>
                <p class="date">24.02.24</p>
            </div>
        </div>
    </section>

    <section class="sc product-single-info">
        <div class="sc-inner">
            <div class="content-wrapper">
                <div class="entry-content entry-fadeIn">
                    <h3 class="size-h2">Technology and Innovation Entrepreneur Development Fund or TED Fund of the Ministry of Higher Education, Science, Research and Innovation Inviting new entrepreneurs and those interested in starting a Startup business.</h3>
                    <figure class="wp-block-image size-full"><img src="./assets/img/design/grid-template-single-main.jpg" alt="grid template main image"></figure>
                    <p>Follow and watch TED Fund Talk SEASON 2 live broadcast on the TEDFund page Ep.1 : Business Idea: How to find Pain Points to satisfy consumers.</p>

                    <p>Meet the 3 invited guests, consisting of:</p>
                    <ul>
                        <li>Mr. Natthaphong Jaravijit, founder and developer of the Liluna application.</li>
                        <li>Mr. Apiram Sitakarin, founder of the Park2Go application.</li>
                        <li>Khun Papanwich Chaiwattanodom, developer of the AGNOS application for self-checking symptoms.</li>
                    </ul>


                    <p>Find the answer in the program TED FUND TAlK SEASON 2</p>

                    <p>Putting you ahead of everyone else, accessible anywhere with live broadcasts via the TEDFund page.</p>

                    <p>Thank you for the information from TED Fund.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sc grid-template-single-slides full-width-slides">
        <div class="sc-inner">
            <div class="wrapper">
                <div class="title">
                    <h2 class="size-h1 animate fadeIn">RELATED NEWS</h2>
                </div>
                <div class="swiper pc-only animate fadeIn">
                    <div class="swiper-wrapper">
                        <?php
                        $onging_arr = array(
                            array(
                                "image" => "./assets/img/design/grid-template-image1.jpg",
                                "name" => "“Park2Go” parking reservation service through the app",
                            ),
                            array(
                                "image" => "./assets/img/design/grid-template-image2.jpg",
                                "name" => "Park Plus x Banpu Next, the first automatic car parking machine",
                            ),
                            array(
                                "image" => "./assets/img/design/grid-template-image3.jpg",
                                "name" => "Parkplus x SCB",
                            ),
                            array(
                                "image" => "./assets/img/design/grid-template-image4.jpg",
                                "name" => "“Park2Go” parking reservation service through the app",
                            ),

                        );

                        foreach ($onging_arr as $item) {
                        ?>
                            <div class="swiper-slide">
                                <a class="link-overlay" href="<?php echo $root; ?>grid-template-single.php">&nbsp;</a>
                                <div class="content-wrapper related-news">
                                    <div class="image blurred-media">
                                        <img src="<?php echo $item["image"] ?>" alt="<?php echo $item["name"] ?>" loading="lazy" draggable="false">>
                                    </div>
                                    <div class="text">
                                        <h3><?php echo $item["name"] ?></h3>
                                        <p class="size-subtitle2 weight-semibold">24.02.24</p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="button-footer animate fadeIn">
                    <div class="arrows hidden-device-sm">
                        <div class="full-width-slides-swiper-button-prev swiper-button-prev"></div>
                        <div class="full-width-slides-swiper-button-next swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>