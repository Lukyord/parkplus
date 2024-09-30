<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="about-main">
    <section class="sc about-hero">
        <div class="image-banner">
            <?php
            $cover = './assets/img/design/about-hero-banner.jpg';
            $cover_m = './assets/img/design/about-hero-banner-m.jpg';
            if (preg_match("/\.(mp4)$/", $cover)) { ?>
                <figure class="object blurred-media white-pulse">
                    <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                </figure>
            <?php } else { ?>
                <picture class="object blurred-media white-pulse">
                    <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                    <img src="<?php echo $cover; ?>" alt="hero bg" loading="lazy">
                </picture>
            <?php } ?>
        </div>
        <div class="sc-inner">
            <div class="hero-text">
                <div class="title">
                    <h2 class="hero-title animate fadeIn">ABOUT</h2>
                    <h2 class="hero-title animate fadeIn" style="animation-delay: 0.5s">PARK PLUS</h2>
                </div>
                <p class="description size-h3 weight-semibold animate fadeIn" style="animation-delay: 0.75s">Park Plus Company Limited is a company providing consulting and solving complete parking problems (Parking Solutions Provider) as well as being an official distributor of car maintenance elevators and smart parking elevators.</p>
            </div>
        </div>
    </section>

    <section class="sc about-hero-description">
        <div class="blue-bg">
            <div class="effect">
                <?php
                $cover = './assets/img/design/about-hero-effect.png';
                $cover_m = './assets/img/design/about-hero-effect-m.png';
                ?>
                <picture class="object blurred-media white-pulse">
                    <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                    <img src="<?php echo $cover; ?>" alt="hero bg" loading="lazy">
                </picture>
            </div>
            <div class="gradient"></div>
            <div class="sc-inner">
                <div class="text c-white">
                    <p class="col-1 animate fadeIn">Imported from Italy, Korea and China for more than 20 years with the original name being Inter Auto Process before changing to Park Plus Company Limited with the determination to help reduce the classic problems of large urban societies, namely 'Parking problems'</p>
                    <div class="col-2">
                        <p class="description animate fadeIn">With more than 20 years of experience, Park Plus has a dedicated team of parking machine experts. Since the survey service space design Provide consultation at no cost. All of our products are guaranteed for no less than 3 years. Complete financial and insurance consulting services are available. Every step in work and installation takes into account maximum safety. Emergency service is available 24 hours a day, 7 days a day. Our team is ready to solve problems within 2 hours after being notified.</p>
                        <p class="summary size-h2 animate fadeIn">Because Zero Down Time is the heart of Park Plus' service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sc about-compare">
        <div class="sc-inner">
            <div class="content-wrapper">
                <div class="title">
                    <h2 class="size-h1 c-blue animate fadeIn">PARK PLUS IS ABOUT LESS FOR MORE</h2>
                </div>

                <div class="building-layout">
                    <div class="images-wrapper">
                        <div class="image animate fadeIn blurred-media">
                            <img src="./assets/img/design/building1.png" alt="building 1">
                        </div>
                        <div class="image animate fadeIn blurred-media">
                            <img src="./assets/img/design/building2.png" alt="building 2">
                        </div>
                        <div class="image blurred-media">
                            <img src="./assets/img/design/building-layout1.png" alt="building layout 1" class="animate fadeInUp" style="animation-delay: 0.3s;">
                        </div>
                        <div class="image blurred-media">
                            <img src="./assets/img/design/building-layout2.png" alt="building layout 2" class="animate fadeInUp" style="animation-delay: 0.6s;">
                        </div>
                        <div class="image blurred-media">
                            <img src="./assets/img/design/building-layout3.png" alt="building layout 3" class="animate fadeInUp" style="animation-delay: 0.9s;">
                        </div>
                    </div>
                </div>

                <div class="compare-table">
                    <p class="description animate fadeIn">Comparing usage ability for 1,000 Sq.M area.</p>
                    <div class="table animate fadeIn">
                        <div class="normal">
                            <h3 class="size-h2 title">NORMAL PARKING</h3>
                            <?php
                            $normal_arr = array(
                                array(
                                    "icon" => "ic-directions_car",
                                    "label" => "CAPACITY",
                                    "value" => "800",
                                    "unit" => "CARS"
                                ),
                                array(
                                    "icon" => "ic-engineering",
                                    "label" => "LABOR",
                                    "prefix" => ">",
                                    "value" => "50",
                                    "unit" => "PEOPLE",
                                ),
                                array(
                                    "icon" => "ic-paid",
                                    "label" => "CAPITAL",
                                    "value" => "10",
                                    "unit" => "M",
                                ),
                            );

                            foreach ($normal_arr as $item) { ?>
                                <div class="table-content">
                                    <div class="label">
                                        <span><i class="ic <?php echo $item['icon']; ?> margin-right"></i></span>
                                        <p class="size-subtitle2"><?php echo $item['label']; ?></p>
                                    </div>
                                    <p class="size-h2"><?php if (isset($item["prefix"]) && !empty($item["prefix"])) echo $item["prefix"]; ?> <span class="countup"><?php echo $item['value']; ?></span> <?php echo $item['unit']; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="park-plus">
                            <div class="park-plus-logo title">
                                <img src="./assets/img/logo-blue.svg" alt="park plus logo">
                            </div>
                            <?php
                            $normal_arr = array(
                                array(
                                    "icon" => "ic-directions_car",
                                    "label" => "CAPACITY",
                                    "value" => "1,200",
                                    "unit" => "CARS"
                                ),
                                array(
                                    "icon" => "ic-engineering",
                                    "label" => "LABOR",
                                    "value" => "10",
                                    "unit" => "PEOPLE",
                                ),
                                array(
                                    "icon" => "ic-paid",
                                    "label" => "CAPITAL",
                                    "value" => "8",
                                    "unit" => "M",
                                ),
                            );

                            foreach ($normal_arr as $item) { ?>
                                <div class="table-content blue">
                                    <div class="label">
                                        <span><i class="ic <?php echo $item['icon']; ?> margin-right"></i></span>
                                        <p class="size-subtitle2"><?php echo $item['label']; ?></p>
                                    </div>
                                    <p class="size-h2"><?php if (isset($item["prefix"]) && !empty($item["prefix"])) echo $item["prefix"]; ?> <span class="countup"><?php echo $item['value']; ?></span> <?php echo $item['unit']; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <section class="sc about-video-banner">
        <div class="wrapper">
            <iframe
                id="about-us-iframe"
                title="about us video link"
                src="https://www.youtube.com/embed/TPvtvIXZOiI?si=zl5ttq7rQIr1Iy63&amp;start=2&autoplay=1&mute=1&controls=0&rel=0&loop=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
    </section>

    <section class="sc about-team">
        <div class="sc-inner">
            <div class="wrapper">
                <div class="team-leader">
                    <div class="content-wrapper">
                        <div class="text">
                            <p class="size-overline weight-semibold">OUR TEAM</p>
                            <div class="name-and-pos">
                                <p class="name size-h1">ABHIRAM<br />SITAKALIN</p>
                                <p class="pos size-subtitle1">MANAGING DIRECTOR</p>
                            </div>
                        </div>
                        <div class="image blurred-media">
                            <img src="./assets/img/design/team-leader.png" alt="team leader">
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <?php
                    $member_arr = array(
                        array(
                            "firstname" => "VANITA",
                            "lastname" => "SRIFUENGFUNG",
                            "position" => "DEPUTY MANAGING DIRECTOR",
                            "image" => "./assets/img/design/team1.png"
                        ),
                        array(
                            "firstname" => "KULLAYA",
                            "lastname" => "SOUVANHEUANE",
                            "position" => "DEPUTY MANAGING DIRECTOR",
                            "image" => "./assets/img/design/team2.png"
                        ),
                        array(
                            "firstname" => "NITAYA",
                            "lastname" => "TUNTIWITITPAKORN",
                            "position" => "GENERAL MANAGER AND HUMAN RESOURCE DIRECTOR",
                            "image" => "./assets/img/design/team3.png"
                        ),
                        array(
                            "firstname" => "VINIT",
                            "lastname" => "WONGPIPATTAWEEP",
                            "position" => "ARCHITECT DIRECTOR",
                            "image" => "./assets/img/design/team4.png"
                        ),
                        array(
                            "firstname" => "SAWITREE",
                            "lastname" => "PETHSRINGAM",
                            "position" => "COSTING AND PALNNING CONTROL DIRECTOR",
                            "image" => "./assets/img/design/team5.png"
                        ),
                    );

                    foreach ($member_arr as $member) {
                    ?>
                        <div class="member">
                            <div class="image blurred-media">
                                <img src="<?php echo $member["image"] ?>" alt="team leader">
                            </div>
                            <div class="name-and-pos">
                                <p class="name size-h3"><?php echo $member["firstname"] ?><br><?php echo $member["lastname"] ?></p>
                                <p class="pos size-subtitle2"><?php echo $member["position"] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>