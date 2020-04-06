<?php
/**
 * User: david burney
 * Date: 3/29/2020
 * Time: 5:39 AM
 */

$title  = "IRS Reporting Resources";
$title1 = "IRS";
$title2 = "Reporting Resources";

?>

<!doctype html>
<html lang="en">

<head>
    <title>First Capital Gold | <?= $title ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require "meta.php"; ?>
</head>

<body>
<!-- loading -->

<?php require "loader.php"; ?>

<!-- loading End -->
<!-- Header -->
<header>
    <?php require "topBar.php"; ?>
    <?php require "headerNav.php"; ?>
</header>
<!-- Header End -->
<div class="clearfix"></div>
<!--======= Breadcrumb Inner Page =======-->
<section class="iq-bg iq-bg-fixed iq-over-black-70 jarallax iq-breadcrumb text-center iq-font-white" style="background-image: url('images/bg/bg-13.jpg'); background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="heading-title iq-mb-25">
                    <h3 class="title text-uppercase iq-font-white iq-tw-6"><?= $title1 ?> <span style="color:#f9b707;font-weight:100;"><?= $title2 ?></span></h3>
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
        </ol>
    </nav>
</section>
<!--======= Breadcrumb Inner Page =======-->
<!-- Main Content -->
<div class="main-content">
    <!-- About Us -->
    <section class="overview-block-ptb device-blog grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 id="whyFGC" class="iq-font-black iq-tw-5">[header]<span class="iq-font-yellow">[header2]</span></h3>
                    <p class="iq-mt-10">  </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!--                    <img class="img-fluid mx-auto d-block iq-mt-10" src="images/device/01.png" alt="icon1">-->
                </div>
                <div class="col-lg-6 col-md-12 about-box  align-self-center">
                    <p class="iq-mt-10">  </p>
                    <p class="iq-mt-10"   </p>
                    <p class="iq-mt-10 iq-mb-20"> </p>
                    <?php require "includePortfolio.php"; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->
    <!-- services -->
    <div id="fgcDifference"></div>
    <br><br><br>
    <section class="overview-block-ptb device-blog dark-bg">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom:50px;">
                        <div class="heading-title iq-mb-0">

                            <h3 class="title text-uppercase iq-font-white iq-tw-6 iq-mb-50">[title]<span style="color:#f9b707;font-weight:100;">[title part 2]</span></h3>
                            <h6 class="text-white iq-mt-20 iq-mb-50"> </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Clients -->

    <?php require "clientCarousel.php"; ?>

    <!-- Clients -->
</div>

<?php require "lowerContactBox.php"; ?>

<!-- Main Content End -->
<!--=================================
Footer -->

<?php require "footer.php"; ?>

<!--=================================
Footer -->
<!--=================================
Login -->

<?php require "loginModal.php"; ?>

<!--=================================
Login -->
<!--=================================
Register -->

<?php require "registerModal.php"; ?>

<!--=================================
Register -->
<!-- back-to-top -->

<?php require "backToTop.php"; ?>

<!-- back-to-top End -->

<?php require "bottomScript.php"; ?>

</body>

</html>
