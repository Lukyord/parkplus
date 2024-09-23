<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="services-main">
    <section class="sc services-hero">
        <div class="bg">
            <?php
            $cover = "./assets/img/design/services-hero-banner.jpg";
            $cover_m = "./assets/img/design/services-hero-banner-m.jpg";
            ?>
            <picture class="object blurred-media white-pulse">
                <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                <img src="<?php echo $cover; ?>" alt="hero bg" loading="lazy" draggable="false">
            </picture>
        </div>
        <div class="sc-inner">
            <div class="wrapper">
                <h1 class="title size-h1 animate fadeIn">SERVICES</h1>
                <div class="description animate fadeIn" style="animation-delay: 0.3s;">
                    <p>Lorem ipsum dolor sit amet consectetur. Commodo ut elementum pulvinar sed iaculis eleifend facilisis sagittis massa.</p>
                </div>
                <div class="icon-description animate fadeIn" style="animation-delay: 0.5s;">
                    <div class="item">
                        <a class="link-overlay" href="#online-maintenance">&nbsp;</a>
                        <div class="image blurred-image">
                            <img src="./assets/img/design/tv-options-input-settings.svg" alt="icon" loading="lazy" draggable="false">
                        </div>
                        <p class="text">Online Maintenance</p>
                    </div>
                    <div class="item">
                        <a class="link-overlay" href="#financial-warranty-insurance">&nbsp;</a>
                        <div class="image blurred-image">
                            <img src="./assets/img/design/gpp-maybe.svg" alt="icon" loading="lazy" draggable="false">
                        </div>
                        <p class="text">Financial Warranty Insurance</p>
                    </div>
                    <div class="item">
                        <a class="link-overlay" href="#services-center">&nbsp;</a>
                        <div class="image blurred-image">
                            <img src="./assets/img/design/warehouse.svg" alt="icon" loading="lazy" draggable="false">
                        </div>
                        <p class="text">24/7 Services Center</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="online-maintenance" class="sc services-accordion-section">
        <div class="sc-inner animate fadeIn">
            <div class="wrapper">
                <div class="main-content">
                    <h2 class="title size-h1 animate fadeIn">ONLINE<br />MAINTENANCE</h2>
                    <div class="image blurred-media animate fadeIn">
                        <img src="./assets/img/design/services-online-maintenance.jpg" alt="online-maintenance main image">
                    </div>
                    <p class="description animate fadeIn">Because we give importance to after-sales service, we provide service 24 hours a day, 7 days. Arrive at your destination within 2 hours. In case of emergency, we also have a MONITOR ROOM. Safety check, AR APPLICATION simulates the installation of a car parking machine from the actual jobsite. SERVICES APPLICATION You can report repairs. through online</p>
                </div>
                <div class="accordions-side">
                    <div class="accordion-container toggle">
                        <?php
                        $accordion_arr = array(
                            array(
                                "title" => "MONITOR ROOM",
                                "image" => "./assets/img/design/services-online-maintenance-accordion1.jpg",
                                "description" => "Lorem ipsum dolor sit amet consectetur. Viverra ullamcorper vel ac eget aliquet. A eget est nullam a magna nulla mauris ut libero."
                            ),
                            array(
                                "title" => "AR APPLICATION",
                                "image" => "./assets/img/design/services-online-maintenance-accordion1.jpg",
                                "description" => "Lorem ipsum dolor sit amet consectetur. Viverra ullamcorper vel ac eget aliquet. A eget est nullam a magna nulla mauris ut libero."
                            ),
                            array(
                                "title" => "SERVICE APPLICATION",
                                "image" => "./assets/img/design/services-online-maintenance-accordion1.jpg",
                                "description" => "Lorem ipsum dolor sit amet consectetur. Viverra ullamcorper vel ac eget aliquet. A eget est nullam a magna nulla mauris ut libero."
                            ),
                        );

                        foreach ($accordion_arr as $index => $accordion) {
                        ?>
                            <div class="accordion animate fadeIn <?php if ($index === 0) echo "active" ?>">
                                <h3 class="entry-title"><?php echo $accordion["title"] ?></h3>
                                <div class="entry-panel" style="<?php if ($index === 0) echo "display: block;" ?>">
                                    <div class="entry-content">
                                        <div class="image">
                                            <img src="<?php echo $accordion["image"] ?>" alt="accordion image" loading="lazy" draggable="false">
                                        </div>
                                        <p><?php echo $accordion["description"] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="financial-warranty-insurance" class="sc services-accordion-section">
        <div class="sc-inner animate fadeIn">
            <div class="wrapper">
                <div class="main-content">
                    <h2 class="title size-h1">FINANCIAL WARRANTY<br />INSURANCE</h2>
                    <div class="image blurred-media animate fadeIn">
                        <img src="./assets/img/design/services-finance.jpg" alt="finance main image">
                    </div>
                    <p class="description">We not only help you with installation and maintenance services. But we can also help you apply for loans, insurance and We also provide you with warranty services.</p>
                </div>
                <div class="accordions-side">
                    <div class="accordion-container toggle">
                        <?php
                        $accordion_arr = array(
                            array(
                                "title" => "MONITOR ROOM",
                                "image" => "./assets/img/design/services-finance-accordion1.jpg",
                                "description" => "We have collaboration with financial and insurance institution to verify and insure you our product and our operation. We also assists our client during the leasing process for their projects."
                            ),
                            array(
                                "title" => "AR APPLICATION",
                                "image" => "./assets/img/design/services-finance-accordion1.jpg",
                                "description" => "We have collaboration with financial and insurance institution to verify and insure you our product and our operation. We also assists our client during the leasing process for their projects."
                            ),
                            array(
                                "title" => "SERVICE APPLICATION",
                                "image" => "./assets/img/design/services-finance-accordion1.jpg",
                                "description" => "We have collaboration with financial and insurance institution to verify and insure you our product and our operation. We also assists our client during the leasing process for their projects."
                            ),
                        );

                        foreach ($accordion_arr as $index => $accordion) {
                        ?>
                            <div class="accordion <?php if ($index === 0) echo "active" ?>">
                                <h3 class="entry-title"><?php echo $accordion["title"] ?></h3>
                                <div class="entry-panel" style="<?php if ($index === 0) echo "display: block;" ?>">
                                    <div class="entry-content">
                                        <div class="image">
                                            <img src="<?php echo $accordion["image"] ?>" alt="accordion image" loading="lazy" draggable="false">
                                        </div>
                                        <p><?php echo $accordion["description"] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services-center" class="sc services-center">
        <div class="sc-inner">
            <h2 class="title size-h1">24/7 SERVICES<br />CENTER</h2>
            <div class="wrapper">
                <div class="locations">
                    <p class="description">Sit eget dolor eget ac ridiculus. Commodo in eget pulvinar luctus dictum elementum in donec nulla. Leo duis parturient vitae aliquet sagittis leo tempus cursus faucibus.</p>
                    <?php
                    $locations_arr = array(
                        array(
                            "province" => "Bangkok",
                            "locations" => array(
                                "118 floor 1-2 Soi Vibhavadi Rangsit 2, Ratchadapisek, Din Daeng, Bangkok, Thailand 10400",
                                "118 floor 1-2 Soi Vibhavadi Rangsit 2, Ratchadapisek, Din Daeng, Bangkok, Thailand 10400",
                                "118 floor 1-2 Soi Vibhavadi Rangsit 2, Ratchadapisek, Din Daeng, Bangkok, Thailand 10400"
                            )
                        ),
                        array(
                            "province" => "PATTAYA",
                            "locations" => array(
                                "118 floor 1-2 Soi Vibhavadi Rangsit 2, Ratchadapisek, Din Daeng, Bangkok, Thailand 10400",
                            )
                        ),
                        array(
                            "province" => "PHUKET",
                            "locations" => array(
                                "118 floor 1-2 Soi Vibhavadi Rangsit 2, Ratchadapisek, Din Daeng, Bangkok, Thailand 10400",
                            )
                        )
                    );
                    foreach ($locations_arr as $location) {
                    ?>
                        <div class="group">
                            <h3 class="province size-h2"><?php echo $location["province"] ?></h3>
                            <?php
                            foreach ($location["locations"] as $loc) {
                            ?>
                                <div class="location">
                                    <span><i class="ic ic-map-marker-o size-icon-20"></i></span>
                                    <address class="text"><?php echo $loc ?></address>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="map">
                    <div class="wrapper">
                        <div class="image blurred-media">
                            <img src="./assets/img/design/services-center-map.jpg" alt="map" loading="lazy" draggable="false">
                        </div>
                        <div class="scale blurred-media animate fadeInZoom">
                            <img src="./assets/img/design/map-scale.png" alt="scale" loading="lazy" draggable="false">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>