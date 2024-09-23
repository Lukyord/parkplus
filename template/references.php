<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="references-main">
    <section class="sc references">
        <div class="page-header">
            <div class="sc-inner">
                <div class="wrapper animate fadeIn">
                    <p class="description size-overline">SERVICE</p>
                    <h1 class="page-title size-h1">REFERENCES</h1>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="sc-inner tab-container">
                <div class="references-dropdown">
                    <button class="button button-black dropdown-trigger animate fadeIn">
                        <span>CHOOSE AREA</span><i class="ic ic-chevron-down"></i>
                    </button>
                    <div class="dropdown">
                        <div class="tabs-panel">
                            <div class="panel-scroll" data-lenis-prevent>
                                <ul class="tabs-container">
                                    <li class="tab">
                                        <a href="#reference-1" class="tab-link active">Reference 1</a>
                                    </li>
                                    <li class="tab">
                                        <a href="#reference-2" class="tab-link">Reference 2</a>
                                    </li>
                                    <li class="tab">
                                        <a href="#reference-3" class="tab-link">Reference 3</a>
                                    </li>
                                    <li class="tab">
                                        <a href="#reference-4" class="tab-link">Reference 4</a>
                                    </li>
                                    <li class="tab">
                                        <a href="#reference-5" class="tab-link">Reference 5</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper">
                    <?php
                    $reference_arr = array(
                        array(
                            "pins" => array(
                                array("top" => "50%", "left" => "50%"),
                                array("top" => "30%", "left" => "70%"),
                                array("top" => "70%", "left" => "30%"),
                                array("top" => "10%", "left" => "10%")
                            ),
                            "references" => array(
                                "True Digital Park",
                                "Cooper Siam",
                                "Coffee Bean",
                                "Paolo Kaset Hospital",
                                "Benz Rachakru",
                                "Modiz Sukhumvit 50",
                                "True Digital Park",
                                "Cooper Siam",
                                "Coffee Bean",
                                "Paolo Kaset Hospital",
                            )
                        ),
                        array(
                            "pins" => array(
                                array("top" => "50%", "left" => "50%"),
                            ),
                            "references" => array(
                                "True Digital Park",
                            )
                        ),
                        array(
                            "pins" => array(
                                array("top" => "50%", "left" => "50%"),
                                array("top" => "30%", "left" => "70%"),
                            ),
                            "references" => array(
                                "True Digital Park",
                                "Cooper Siam",
                            )
                        ),
                        array(
                            "pins" => array(
                                array("top" => "50%", "left" => "50%"),
                                array("top" => "30%", "left" => "70%"),
                                array("top" => "70%", "left" => "30%"),
                            ),
                            "references" => array(
                                "True Digital Park",
                                "Cooper Siam",
                                "Coffee Bean",
                            )
                        ),
                        array(
                            "pins" => array(
                                array("top" => "50%", "left" => "50%"),
                                array("top" => "30%", "left" => "70%"),
                                array("top" => "70%", "left" => "30%"),
                                array("top" => "10%", "left" => "10%")
                            ),
                            "references" => array(
                                "True Digital Park",
                                "Cooper Siam",
                                "Coffee Bean",
                                "Paolo Kaset Hospital",
                            )
                        ),
                    );

                    foreach ($reference_arr as $index => $reference) {
                    ?>
                        <div class="tab-content <?php if ($index == 0) echo "active" ?> animate fadeIn" id="reference-<?php echo $index + 1 ?>">
                            <div class="content-wrapper">
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11200.675829730526!2d-75.6876061!3d45.42609535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04ff4fe494ef%3A0x26bb54f60c29f6e!2sParliament+Hill!5e0!3m2!1sen!2sca!4v1528808935681" title="mock iframe"></iframe>
                                    <!-- <img src="./assets/img/design/contact-map-mock.jpg" alt="company map"> -->
                                    <?php
                                    foreach ($reference["pins"] as $pin) {
                                    ?>
                                        <div class="pin" style="top: <?php echo $pin["top"] ?>; left: <?php echo $pin["left"] ?>">
                                            <img src="./assets/img/design/logo-icon.svg" alt="logo icon" draggable="false" loading="lazy">
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="reference-gallery">
                                    <?php
                                    foreach ($reference["references"] as $index => $ref) {
                                    ?>
                                        <div class="item">
                                            <div class="image blurred-media">
                                                <img src="./assets/img/design/index-parking-ref<?php echo $index + 1 ?>.jpg" alt="reference <?php echo $index + 1 ?>" loading="lazy" draggable="false">
                                            </div>
                                            <p class="name size-subtitle1"><?php echo $ref ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>