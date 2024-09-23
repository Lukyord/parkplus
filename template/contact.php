<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="contact-main">
    <section class="sc contact">
        <div class="page-header">
            <div class="sc-inner">
                <div class="wrapper animate fadeIn">
                    <p class="description size-overline">CONTACT US</p>
                    <h1 class="page-title size-h1">LOCATION</h1>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="sc-inner">
                <div class="wrapper">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11200.675829730526!2d-75.6876061!3d45.42609535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04ff4fe494ef%3A0x26bb54f60c29f6e!2sParliament+Hill!5e0!3m2!1sen!2sca!4v1528808935681" title="mock iframe"></iframe>
                        <!-- <img src="./assets/img/design/contact-map-mock.jpg" alt="company map"> -->
                        <div class="pin" style="top: 50%; left: 50%">
                            <img src="./assets/img/design/logo-icon.svg" alt="logo icon" draggable="false" loading="lazy">
                        </div>
                    </div>
                    <div class="contact-info">
                        <?php
                        $contact_arr = array(
                            array(
                                "title" => "PARK PLUS<br />HEAD OFFICE : BANGKOK",
                                "address" => "118 floor 1-2 Soi Vibhavadi Rangsit 2, Ratchadapisek, Din Daeng, Bangkok, Thailand 10400",
                                "tel" => "02-053-3928",
                                "email" => "sales@parkplusth.com"
                            ),
                            array(
                                "title" => "SERVICE CENTER",
                                "address" => "27 Pramuan Road, Silom, Bang Rak, Bangkok 10500",
                                "tel" => "02-053-3928",
                                "email" => "sales@parkplusth.com"
                            )
                        );

                        foreach ($contact_arr as $contact) {
                        ?>
                            <div class="location">
                                <h2 class="location-title size-h2"><?php echo $contact["title"] ?></h2>
                                <div class="address">
                                    <span><i class="ic ic-map-marker-o size-icon-20"></i></span>
                                    <address class="text size-subtitle1"><?php echo $contact["address"] ?></address>
                                </div>
                                <div class="tel-and-email">
                                    <div class="item">
                                        <span><i class="ic ic-call size-icon-20"></i></span>
                                        <a class="size-sibtitle1" href="tel:+6620533928"><?php echo $contact["tel"] ?></a>
                                    </div>
                                    <div class="item">
                                        <span><i class="ic ic-mail size-icon-20"></i></span>
                                        <a class="size-sibtitle1" href="mailto:sales@parkplusth.com"><?php echo $contact["email"] ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>