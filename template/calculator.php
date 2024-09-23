<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="calculator-main">
    <section class="sc sc-calculator">
        <div class="page-header">
            <div class="sc-inner">
                <div class="wrapper animate fadeIn">
                    <p class="description size-overline">SERVICE</p>
                    <h1 class="page-title size-h1">CALCULATOR</h1>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="sc-inner">
                <div class="wrapper">
                    <form class="calculator-form">
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

                            <a href="javascript:;" class="button button-blue">
                                <span>CALCULATE</span><i class="ic ic-chevron-right"></i>
                            </a>

                            <p class="note c-gray-dark size-subtitle1 hidden-device-md">**Noted: Please kindly use these numbers for guideline only. These numbers are logically estimated but it could be inaccurate due to other uncontrollable circumstance</p>
                        </div>
                    </form>
                    <div class="compare-grid">
                        <div class="table-tab-container no-scroll">
                            <div class="table-header">
                                <!-- HEADER -->
                                <div class="category-header">
                                    <p class="size-subtitle1">PARKING TYPE</p>
                                </div>
                                <div class="table-tabs">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide info-header">
                                                <a class="table-tab size-h3 c-blue no-scroll-to-section active" href="#parking-machine">PARKING MACHINES</a>
                                            </div>
                                            <div class="swiper-slide info-header">
                                                <a class="table-tab size-h3 c-blue no-scroll-to-section" href="#parking-lot">PARKING LOT</a>
                                            </div>
                                            <div class="swiper-slide info-header">
                                                <a class="table-tab size-h3 c-blue no-scroll-to-section" href="#parking-building">PARKING BUILDING</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table>
                                <colgroup>
                                    <col class="table-category" />
                                    <col class="table-info" />
                                    <col class="table-info" />
                                    <col class="table-info" />
                                </colgroup>
                                <tbody>
                                    <!-- 1st ===== GENERAL INFO-->
                                    <tr>
                                        <td class="hidden-device-sm"></td>
                                        <td id="parking-machine" class="td-span-4-m">
                                            <div class="info">
                                                <div class="image">
                                                    <img src="./assets/img/design/calculator-image1.jpg" alt="parking machine">
                                                </div>
                                                <p>Illustrating to you the cost of build- ing a parking using our "Parking Machines" by calculating the SQ.M. of land needed (which is tend to be relatively smaller than the other conventional parkings), and the cost of the machine itself based on the desirable number of carparks and the land price.</p>
                                            </div>
                                        </td>
                                        <td id="parking-lot" class="td-span-4-m">
                                            <div class="info">
                                                <div class="image">
                                                    <img src="./assets/img/design/calculator-image2.jpg" alt="parking machine">
                                                </div>
                                                <p>Illustrating to you the cost of building a "Parking lot" by calculating the SQ.M. needed to park your desirable number of cars.</p>
                                            </div>
                                        </td>
                                        <td id="parking-building" class="td-span-4-m">
                                            <div class="info">
                                                <div class="image">
                                                    <img src="./assets/img/design/calculator-image3.jpg" alt="parking machine">
                                                </div>
                                                <p>Illustrating to you the cost of build- ing a "Parking building" by calculating the SQ.M. of land needed, the cost of constructing the parking building and building utilities and maintenance cost based on the desirable number of carparks and the land price.</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- 2nd ===== SPACE REQUIRED-->
                                    <tr>
                                        <td class="td-span-2-m">
                                            <p>SPACE REQUIRED</p>
                                        </td>
                                        <td id="parking-machine" class="td-span-2-m">
                                            <p>1,200.00 SQ.M</p>
                                        </td>
                                        <td id="parking-lot" class="td-span-2-m">
                                            <p>8,400.00 SQ.M</p>
                                        </td>
                                        <td id="parking-building" class="td-span-2-m">
                                            <p>7,800.00 SQ.M</p>
                                        </td>
                                    </tr>
                                    <!-- 3rd ===== LAND COST-->
                                    <tr>
                                        <td class="td-span-2-m">
                                            <p>LAND COST</p>
                                        </td>
                                        <td id="parking-machine" class="td-span-2-m">
                                            <p>27,600,000.00 THB</p>
                                        </td>
                                        <td id="parking-lot" class="td-span-2-m">
                                            <p>193,200,000.00 THB</p>
                                        </td>
                                        <td id="parking-building" class="td-span-2-m">
                                            <p>179,400,000.00 THB</p>
                                        </td>
                                    </tr>
                                    <!-- 4th ===== IMPLEMENT COST-->
                                    <tr>
                                        <td class="td-span-2-m">
                                            <p>IMPLEMENT COST</p>
                                        </td>
                                        <td id="parking-machine" class="td-span-2-m">
                                            <p>187,500,000.00 THB<br />( Parking Machine and facilities cost )</p>
                                        </td>
                                        <td id="parking-lot" class="td-span-2-m">
                                            <p>-</p>
                                        </td>
                                        <td id="parking-building" class="td-span-2-m">
                                            <p>130,000,000.00 THB<br />( Building cost )</p>
                                        </td>
                                    </tr>
                                    <!-- 5th ===== TOTAL COST-->
                                    <tr>
                                        <td class="td-span-2-m">
                                            <p>TOTAL COST</p>
                                        </td>
                                        <td id="parking-machine" class="td-span-2-m">
                                            <p>215,100,000.00 THB</p>
                                        </td>
                                        <td id="parking-lot" class="td-span-2-m">
                                            <p>193,200,000.00 THB</p>
                                        </td>
                                        <td id="parking-building" class="td-span-2-m">
                                            <p>309,400,000.00 THB</p>
                                        </td>
                                    </tr>
                                    <!-- 6th ===== COST / 1 CAR-->
                                    <tr>
                                        <td class="td-span-2-m">
                                            <p>COST / 1 CAR</p>
                                        </td>
                                        <td id="parking-machine" class="td-span-2-m">
                                            <p>430,200.00 THB</p>
                                        </td>
                                        <td id="parking-lot" class="td-span-2-m">
                                            <p>386,400.00 THB</p>
                                        </td>
                                        <td id="parking-building" class="td-span-2-m">
                                            <p>618,800.00 THB</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>