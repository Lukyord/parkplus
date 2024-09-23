<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="products-main">
    <?php
    $products_section_arr = array(
        array(
            "name" => "DUO ROBOT",
            "price" => "Lease starting at 66,000 Thb/mo*",
            "description" => "Compact and reliable, the smart parking robot will do the job for you in both parking and taking your car out of the parking lot.",
            "hightlight" => "Parking for 70 cars or more",
            "icon" => "ic ic-directions_car",
            "image" => "./assets/img/design/product-banner1.jpg",
            "image-m" => "./assets/img/design/product-banner1-m.jpg",
        ),
        array(
            "name" => "SMART",
            "price" => "Lease starting at 66,000 Thb/mo*",
            "description" => "SMART PARKING system is suitable for high-density areas. Limited allocation or move areas such as parking ramps, large yards, hospitals",
            "hightlight" => "Parking space for 2 cars, able to increase parking space up to 8 times.",
            "icon" => "ic ic-directions_car",
            "image" => "./assets/img/design/product-banner2.jpg",
            "image-m" => "./assets/img/design/product-banner2-m.jpg",
        ),
        array(
            "name" => "PUZZLE",
            "price" => "Lease starting at 66,000 Thb/mo*",
            "description" => "Both horizontally and vertically, such as low-rise condominiums. Apartment, parking lot, courtyard, or hospital.",
            "hightlight" => "For urban areas where space is limited.",
            "icon" => "ic-corporate_fare",
            "image" => "./assets/img/design/product-banner3.jpg",
            "image-m" => "./assets/img/design/product-banner3-m.jpg",
        ),
        array(
            "name" => "TOWER",
            "price" => "Lease starting at 66,000 Thb/mo*",
            "description" => "Tower system, vertical parking system Can be built both underground and above ground.",
            "hightlight" => "For narrow spaces and want to add as many parking spaces as possible in a limited area",
            "icon" => "ic-corporate_fare",
            "image" => "./assets/img/design/product-banner4.jpg",
            "image-m" => "./assets/img/design/product-banner4-m.jpg",
        ),
        array(
            "name" => "STACKER",
            "price" => "Lease starting at 66,000 Thb/mo*",
            "description" => "STACKER model from Italy, durable and strong. Can be installed both outside and indoors.",
            "hightlight" => "For homes or home offices with limited space.",
            "icon" => "ic-corporate_fare",
            "image" => "./assets/img/design/product-banner5.jpg",
            "image-m" => "./assets/img/design/product-banner5-m.jpg",
        )
    );

    foreach ($products_section_arr as $product) {
    ?>
        <section class="sc product-section scroll-section">
            <div class="bg">
                <?php
                $cover = $product["image"];
                $cover_m = $product["image-m"];
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
                        <h2 class="title size-h1"><?php echo $product["name"] ?></h2>
                        <p class="price"><?php echo $product["price"] ?></p>
                        <p class="description"><?php echo $product["description"] ?></p>
                    </div>
                    <div class="highlight">
                        <div class="hightlight-text">
                            <span><i class="ic <?php echo $product["icon"] ?>"></i></span>
                            <p><?php echo $product["hightlight"] ?></p>
                        </div>
                    </div>
                    <a href="<?php echo $root; ?>product-single.php" class="button button-white">
                        <span>LEARN MORE</span><i class="ic ic-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>
    <?php } ?>
</main>

<?php include($root . "footer.php"); ?>