<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="grid-template-main">
    <section class="sc grid-template-hero">
        <div class="wrapper">
            <div class="grid-template-main-image">
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
            <div class="grid-template-main-content">
                <div class="heading">
                    <h2 class="title size-h2">find a pain point that meets your needs and is different.</h2>
                    <p class="date size-subtitle2">24.02.24</p>
                </div>
                <a href="<?php echo $root; ?>grid-template-single.php" class="button">
                    <span>LEARN MORE</span><i class="ic ic-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="sc grid-template-grid">
        <div class="sc-inner">
            <div class="wrapper">
                <div class="grid">
                    <?php
                    $grid_template_arr = array(
                        "“Apiram Sitakalin” with the business “Parkplus-park2go”",
                        "Service now open! “Robot Parking” 2 @ Huai Khwang Station",
                        "MRTA is now open for service! “Robot Parking” Huai Khwang Station",
                        "Parkplus x SCB",
                        "“Park2Go” parking reservation service through the app",
                        "Park Plus x Banpu Next, the first automatic car parking machine",
                        "Parkplus x SCB",
                        "“Park2Go” parking reservation service through the app",
                        "“Park2Go” parking reservation service through the app"
                    );

                    foreach ($grid_template_arr as $index => $grid_template) {
                    ?>
                        <div class="grid-template-item animate fadeIn">
                            <a class="link-overlay" href="<?php echo $root; ?>grid-template-single.php">&nbsp;</a>
                            <div class="image blurred-media">
                                <img src="./assets/img/design/grid-template-image<?php echo $index + 1 ?>.jpg" alt="grid-template-card image" draggable="false" loading="lazy">
                            </div>
                            <h3 class="title size-subtitle1"><?php echo $grid_template ?></h3>
                            <p class="date size-subtitle2">24.02.24</p>
                        </div>
                    <?php }  ?>
                </div>
                <div class="grid-template-pagination animate fadeIn">
                    <?php include($root . "include/_wp-code/wp-pagenavi.php") ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>