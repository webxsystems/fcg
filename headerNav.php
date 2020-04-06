<?php
/**
 * Programmer : David Burney
 * Date: 3/27/2020
 * Time: 12:07 AM
 */


$youarehere = basename($_SERVER["REQUEST_URI"], ".php");
$ac = "class=active";


?>

<div class="iq-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <a href="<?= dirname($_SERVER["PHP_SELF"]); ?>"><img id="logo_dark" class="img-fluid" src="images/logo.png" alt="logo"></a>
                </div>
                <nav> <a id="resp-menu" class="responsive-menu" href="javascript:void(0)"><i class="fa fa-reorder"></i> Menu</a>
                    <ul class="menu text-right">
                        <!--<li><a class="active" href="javascript:void(0)">HOME</a></li>-->
                        <li><a href="shop.php" <?php print ($youarehere == "shop") ? $ac : ""; ?>>PRODUCTS</a>
                            <ul class="sub-menu">
                               <li><a href="gold-products.php">Gold</a></li>
                               <li><a href="silver-products.php">Silver</a></li>
                               <li><a href="palladium-products.php">Palladium</a></li>
                               <li><a href="platinum-products.php">Platinum</a></li>
                               <li><a href="ira-approved-products.php">IRA Approved Products</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" <?php print ($youarehere == "about-us") ? $ac : ""; ?>>ABOUT</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.php#whyFCG">Why FCG</a></li>
                                <li><a href="about-us.php#fgcDifference">Our Difference</a></li>
                                <li><a href="careers.php">Careers</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" <?php print ($youarehere == "why-precious-metals") ? $ac : ""; ?>>WHY PRECIOUS METALS</a>
                            <ul class="sub-menu">
                                <li><a href="why-invest-in-precious-metals.php">Why invest in precious metals ?</a></li>
                                <li><a href="types-of-precious-metals.php">Types of precious metals</a></li>
                                <li><a href="why-invest-in-gold.php">Why invest in gold</a></li>
                                <li><a href="why-invest-in-silver.php">Why invest in silver</a></li>
                           </ul>
                        </li>

                        <li><a href="javascript:void(0)" <?php print ($youarehere == "precious-metals-iras") ? $ac : ""; ?>>PRECIOUS METALS IRA'S</a>
                            <ul class="sub-menu">
                                <li><a href="why-gold-iras.php">Why gold IRA's ?</a></li>
                                <li><a href="ira-approved-products.php">IRA approved products</a></li>
                                <li><a href="open-or-rollover-ira.php">Open or rollover an IRA account</a></li>
                                <li><a href="ira-faqs.php">IRA FAQ'S</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" <?php print ($youarehere == "resources") ? $ac : ""; ?>>RESOURCES</a>
                            <ul class="sub-menu">
                                <li><a href="newsroom.php">News Room</a></li>
                                <li><a href="precious-metals-glossary-terms.php">Precious metals glossary terms</a></li>
                                <li><a href="get-your-free-ebook.php">Get your FREE ebook</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                                <li><a href="irs-reporting-resources.php">IRS reporting resources</a></li>
                                <li><a href="gold-history.php">Gold History</a></li>
                                <li><a href="sitemap.php">Sitemap</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php" <?php print ($youarehere == "contact") ? $ac : ""; ?>>Contact</a></li>
                        <li style="margin-left:5px;">
                            <div class="iq-search"> <a class="search-btn not_click" href="javascript:void(0);"> <span>Search Button</span></a>
                                <div class="search-box not-click">
                                    <input type="email" class="form-control not-click" id="exampleInputEmail1" placeholder="Search">
                                    <i class="ti-search"></i> </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

