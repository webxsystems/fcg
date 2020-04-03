<?php
/**
 * Created by PhpStorm.
 * User: goldenboy
 * Date: 3/27/2020
 * Time: 12:01 AM
 */

?>
<!doctype html>
<html lang="en">

<head>
    <title>First Capital Gold - Home </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require "meta.php"; ?>

</head>
<body>
<!-- loading -->
<div id="loading">
    <div id="loading-center">
        <img src="images/loader.gif" alt="loder">
    </div>
</div>
<!-- loading End -->
<!-- Header -->
<header>
    <?php require "topBar.php"; ?>
    <div class="topbar-chart">
        <div class="container-fluid">
            <div class="row">
                <script>
                    baseUrl = "https://widgets.cryptocompare.com/";
                    var scripts = document.getElementsByTagName("script");
                    var embedder = scripts[scripts.length - 1];
                    var cccTheme = { "General": { "enableMarquee": true } };
                    (function() {
                        var appName = encodeURIComponent(window.location.hostname);
                        if (appName == "") { appName = "local"; }
                        var s = document.createElement("script");
                        s.type = "text/javascript";
                        s.async = true;
                        var theUrl = baseUrl + 'serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=BTC,USD,CNY,EUR';
                        s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                        embedder.parentNode.appendChild(s);
                    })();
                </script>
            </div>
        </div>
    </div>

    <?php require "headerNav.php"; ?>

</header>
<!-- Header End -->
<div class="clearfix"></div>
<!-- Banner -->
<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="coinex18" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    <!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
    <div id="rev_slider_3_1" class="rev_slider fullwidthabanner tp-overflow-hidden" style="display:none;" data-version="5.4.6.3">
        <ul>
            <!-- SLIDE  -->
            <li data-index="rs-9" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="revslider/assets/transparent.png" data-bgcolor='#000000' style='background:#000000' alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption   tp-resizeme" id="slide-9-layer-11" data-x="right" data-hoffset="-292" data-y="bottom" data-voffset="-25" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="revslider/assets/19086-14.png" alt="" data-ww="966px" data-hh="653px" data-no-retina> </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-9-layer-2" data-x="-109" data-y="-20" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":1020,"speed":1000,"frame":"0","from":"x:left;y:top;z:{-20,20};opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;"><img src="revslider/assets/2c90a-15.png" alt="" data-ww="244px" data-hh="191px" data-no-retina> </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-9-layer-4" data-x="-110" data-y="bottom" data-voffset="30" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":1530,"speed":1000,"frame":"0","from":"x:left;y:middle;z:{-20,20};opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;"><img src="revslider/assets/2c90a-15.png" alt="" data-ww="222px" data-hh="174px" data-no-retina> </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-9-layer-3" data-x="right" data-hoffset="-173" data-y="-109" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":2110,"speed":1000,"frame":"0","from":"x:[175%];y:[-175%];opacity:{0,1};","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;"><img src="revslider/assets/086e2-16.png" alt="" data-ww="267px" data-hh="256px" data-no-retina> </div>
                <!-- LAYER NR. 5 -->
                <div class="tp-caption   tp-resizeme" id="slide-9-layer-9" data-x="30" data-y="186" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":3110,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 300; color: #ffffff; letter-spacing: 0px; font-family: 'Ubuntu', sans-serif; text-transform:uppercase;">take control
                    <br>of your  <span class="iq-font-yellow iq-tw-6">future!</span></div>
                <!-- LAYER NR. 6 -->
                <div class="tp-caption   tp-resizeme" id="slide-9-layer-5" data-x="30" data-y="center" data-voffset="2" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":3960,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; white-space: nowrap; font-size: 22px; line-height: 26px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Raleway;">Diversify your portfolio while keeping your investment closer to home. </div>
                <!-- LAYER NR. 7 -->
                <div class="tp-caption button rev-btn " id="slide-9-layer-8" data-x="30" data-y="455" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":4500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":""}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[1,1,1,1]" data-paddingright="[35,35,35,35]" data-paddingbottom="[1,1,1,1]" data-paddingleft="[35,35,35,35]">Read More</div>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="revslider/assets/transparent.png" data-bgcolor='#151d2e' style='background:#151d2e' alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 8 -->
                <div class="tp-caption   tp-resizeme" id="slide-10-layer-9" data-x="30" data-y="247" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":3220,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 62px; line-height: 68px; font-weight: 700; color: #ffffff; letter-spacing: 0px; font-family: 'Ubuntu', sans-serif; text-transform:uppercase;"><span class="iq-font-yellow iq-tw-6">explore Bitcoin</span> </div>
                <!-- LAYER NR. 9 -->
                <div class="tp-caption   tp-resizeme" id="slide-10-layer-10" data-x="30" data-y="318" data-width="['558']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":3960,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 558px; max-width: 558px; white-space: nowrap; font-size: 60px; line-height: 68px; font-weight: 300; color: #ffffff; letter-spacing: 0px; font-family: 'Ubuntu', sans-serif; text-transform:uppercase;">It's free market ! </div>
                <!-- LAYER NR. 10 -->
                <div class="tp-caption   tp-resizeme" id="slide-10-layer-5" data-x="30" data-y="center" data-voffset="45" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":4660,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 26px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Raleway;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    <br> industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing
                    <br> and typesetting industry. Lorem Ipsum has been the industry's standard. </div>
                <!-- LAYER NR. 11 -->
                <div class="tp-caption button white rev-btn " id="slide-10-layer-8" data-x="30" data-y="505" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":4930,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":""}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[1,1,1,1]" data-paddingright="[35,35,35,35]" data-paddingbottom="[1,1,1,1]" data-paddingleft="[35,35,35,35]">Read More</div>
                <!-- LAYER NR. 12 -->
                <div class="tp-caption   tp-resizeme" id="slide-10-layer-16" data-x="right" data-hoffset="-55" data-y="59" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;"><img src="revslider/assets/89b8d-17.png" alt="" data-ww="466px" data-hh="745px" data-no-retina> </div>
                <!-- LAYER NR. 13 -->
                <div class="tp-caption   tp-resizeme" id="slide-10-layer-14" data-x="133" data-y="bottom" data-voffset="4" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":2500,"speed":1000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;"><img src="revslider/assets/8ce56-18.png" alt="" data-ww="186px" data-hh="170px" data-no-retina> </div>
                <!-- LAYER NR. 14 -->
                <div class="tp-caption   tp-resizeme" id="slide-10-layer-15" data-x="-500" data-y="center" data-voffset="21" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;"><img src="revslider/assets/94f40-19.png" alt="" data-ww="556px" data-hh="719px" data-no-retina> </div>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-11" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="revslider/assets/transparent.png" data-bgcolor='#000000' style='background:#000000' alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 15 -->
                <div class="tp-caption   tp-resizeme" id="slide-11-layer-9" data-x="30" data-y="217" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":4670,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 62px; line-height: 62px; font-weight: 300; color: #ffffff; letter-spacing: 0px; font-family: 'Ubuntu', sans-serif; text-transform:uppercase;">Provides To Make Better </div>
                <!-- LAYER NR. 16 -->
                <div class="tp-caption   tp-resizeme" id="slide-11-layer-10" data-x="30" data-y="center" data-voffset="-60" data-width="['587']" data-height="['70']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":5730,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 587px; max-width: 587px; max-width: 70px; max-width: 70px; white-space: nowrap; font-size: 68px; line-height: 60px; font-weight: 700; color: #ffffff; letter-spacing: 0px; font-family: 'Ubuntu', sans-serif; text-transform:uppercase;"><span class="iq-font-yellow iq-tw-6">cryptocurrency ! </span></div>
                <!-- LAYER NR. 17 -->
                <div class="tp-caption   tp-resizeme" id="slide-11-layer-5" data-x="30" data-y="center" data-voffset="21" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":6800,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 26px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Raleway;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    <br> industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing
                    <br> and typesetting industry. Lorem Ipsum has been the industry's standard. </div>
                <!-- LAYER NR. 18 -->
                <div class="tp-caption button rev-btn " id="slide-11-layer-8" data-x="30" data-y="485" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":7470,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":""}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[1,1,1,1]" data-paddingright="[35,35,35,35]" data-paddingbottom="[1,1,1,1]" data-paddingleft="[35,35,35,35]">Read More</div>
                <!-- LAYER NR. 19 -->
                <div class="tp-caption   tp-resizeme" id="slide-11-layer-14" data-x="right" data-hoffset="99" data-y="7" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":2390,"speed":1000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;"><img src="revslider/assets/594af-22.png" alt="" data-ww="128px" data-hh="127px" data-no-retina> </div>
                <!-- LAYER NR. 20 -->
                <div class="tp-caption   tp-resizeme" id="slide-11-layer-15" data-x="right" data-hoffset="237" data-y="center" data-voffset="-216" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":3180,"speed":1000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;"><img src="revslider/assets/37db8-23.png" alt="" data-ww="115px" data-hh="114px" data-no-retina> </div>
                <!-- LAYER NR. 21 -->
                <div class="tp-caption   tp-resizeme" id="slide-11-layer-16" data-x="right" data-hoffset="61" data-y="center" data-voffset="-81" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":3930,"speed":1000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;"><img src="revslider/assets/59100-24.png" alt="" data-ww="188px" data-hh="187px" data-no-retina> </div>
                <!-- LAYER NR. 22 -->
                <div class="tp-caption   tp-resizeme" id="slide-11-layer-13" data-x="right" data-hoffset="-16" data-y="center" data-voffset="87" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;"><img src="revslider/assets/48723-21.png" alt="" data-ww="410px" data-hh="279px" data-no-retina> </div>
                <!-- LAYER NR. 23 -->
                <div class="tp-caption   tp-resizeme" id="slide-11-layer-18" data-x="center" data-hoffset="4" data-y="bottom" data-voffset="-58" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;"><img src="revslider/assets/ae6ae-25.png" alt="" data-ww="1920px" data-hh="230px" data-no-retina> </div>
            </li>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>
<!-- Banner End -->
<!-- Main Content -->
<div class="main-content">
    <!-- About Us -->
    <!--<section class="overview-block-pt device-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <h2 class="iq-font-black iq-tw-6">One Touch &<br>
                        <span class="iq-font-yellow">Wallet and Buy Bitcoin !</span>
                    </h2>
                    <p class="iq-mt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="calculator iq-mt-25">
                        <script src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
                    </div>
                    <a class="button iq-mt-10 iq-mb-100" href="javascript:void(0)">Read More</a>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="hand-tab"><img class="img-fluid" alt="image" src="images/device/hand-tab.gif"></div>
                    <div class="hand"><img class="img-fluid" alt="img" src="images/device/hand.png"></div>
                </div>
            </div>
        </div>
    </section>-->
    <section class="overview-block-ptb125 iq-bg iq-over-black-80   jarallax" style="background-image: url('images/bg/bg-5.jpg'); background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="iq-Work-box text-center iq-font-white stap-up">
                        <div class="Work-icon">
                            <div class="step"> </div>
                        </div>
                        <h5 class="iq-tw-5 iq-mt-20 iq-font-yellow">GOLD IN EVERY DETAIL</h5>
                        <img src="images/bg/goldbars1.png">
                        <p>In times of uncertainty, gold is a classic safe haven asset that can help preserve wealth.</p>
                        <div><a class="button" href="javascript:void(0)">Read More</a></div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 re-mt-30">
                    <div class="iq-Work-box text-center iq-font-white stap-dowen">
                        <div class="Work-icon">
                            <div class="step"></div>
                        </div>
                        <h5 class="iq-tw-5 iq-mt-20 iq-font-yellow"> SILVER IN EVERY DETAIL</h5>
                        <img src="images/bg/palladiumbars1.png">
                        <p>Silver has a lower price than gold, but carries the same diversification.</p>
                        <div><a class="button" href="javascript:void(0)">Read More</a></div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 re-mt-30">
                    <div class="iq-Work-box text-center iq-font-white">
                        <div class="Work-icon">
                            <div class="step"></div>
                        </div>
                        <h5 class="iq-tw-5 iq-mt-20 iq-font-yellow">IRA's</h5>
                        <img src="images/bg/coins-1.png">
                        <p>Take control of your IRA by adding physical Gold and Silver to your portfolio.</p>
                        <div><a class="button" href="javascript:void(0)">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->
    <!-- How it Works -->
    <section class="overview-block-pt4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title iq-mt-50">
                        <h3 class="title iq-tw-5 iq-mb-20">Get Started In Three Easy Steps!</h3>

                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="iq-feature3 iq-bg iq-mt-20">
                        <div class="iq-icon">
<!--                            <img class="img-fluid" src="images/services/icon/07.png" alt="">-->
                        </div>
                        <div class="fancy-content">
                            <h4 class="iq-tw-5">Call TOLL FREE 888-465-3006</h4>
                            <p style="margin-top:8px;">Talk to one of our precious metals experts and trained Gold IRA specialists about your needs.</p>
                            <div class="step">01</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="iq-feature3 iq-bg iq-mt-20">
                        <div class="iq-icon">
<!--                            <img class="img-fluid" src="images/services/icon/08.png" alt="">-->
                        </div>
                        <div class="fancy-content">
                            <h4 class="iq-tw-5">Options</h4><br><br>
                            <p>Find out the benefits of owning Gold, Silver & Platinum and which options are best for you.</p>
                            <div class="step">02</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="iq-feature3 iq-bg iq-mt-20">
                        <div class="iq-icon">
<!--                            <img class="img-fluid" src="images/services/icon/09.png" alt="">-->
                        </div>
                        <div class="fancy-content">
                            <h4 class="iq-tw-5">Delivery</h4><br><br>
                            <p> Receive delivery of your metals & take control of your investment future.</p>
                            <div class="step">03</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 iq-mtb-60">
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <!-- How it Works -->
    <!-- Features -->
    <section class="overview-block-ptb iq-fea-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <h3 class="title iq-tw-5 iq-mb-20">Why Precious Metals</h3>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-feature5">
                        <img src="images/services/big/01.png" alt="icon1">
                        <h5 class="text-black iq-tw-5 iq-pt-20 iq-pb-10"><a href="services-details.html">
                                NO GOVERNMENT RISK</a></h5>
                        <p class="iq-mb-0  text-left">Investments in precious metals carry no government risk, can’t be printed at will by any Central Bank and is physical property that cannot be diluted. Gold and other precious metals have stood the test of time for thousands of years and have performed marvelously in the face of inflation, market volatility, political turmoil, currency devaluation, terrorist threats and even war. </p>
                    </div>
                    <div class="iq-feature5">
                        <img src="images/services/big/02.png" alt="icon1">
                        <h5 class="text-black iq-tw-5 iq-pt-20 iq-pb-10"><a href="services-details.html">DIVERSIFICATION</a></h5>
                        <p class="iq-mb-0  text-left" >Diversification is the only way to secure wealth by reducing overall volatility and risk. By adding physical gold or other precious metals to your IRA, you free yourself of the dependence on the prices of risky paper assets such as stocks, bonds and ETFs. </p>
                    </div>
                    <div class="iq-feature5">
                        <img src="images/services/big/03.png" alt="icon1">
                        <h5 class="text-black iq-tw-5 iq-pt-20 iq-pb-10"><a href="services-details.html">TAX DEFERRED GROWTH </a></h5>
                        <p class="iq-mb-0  text-left">In addition to most retirement plans having very limited investment options and direct exposure to stock market prices, a precious metal or gold IRA has the ability to accumulate investment growth on a tax -deferred basis.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-feature5">
                        <img src="images/services/big/04.png" alt="icon1">
                        <h5 class="text-black iq-tw-5 iq-pt-20 iq-pb-10"><a href="services-details.html">LIQUIDITY</a></h5>
                        <p class="iq-mb-0  text-left">As a liquid asset, gold and other precious metals can be readily converted into cash or goods because it is a globally recognized currency. You are able to take an “in-kind” distribution of the precious metals out of the IRA – meaning that when you choose to or are required to take a distribution, you always the option of either selling the precious metals in your portfolio or having your IRA precious metal holdings physically shipped to your doorstep “in-kind”.</p>
                    </div>
                    <div class="iq-feature5">
                        <img src="images/services/big/05.png" alt="icon1">
                        <h5 class="text-black iq-tw-5 iq-pt-20 iq-pb-10"><a href="services-details.html">GLOBAL DEMAND</a></h5>
                        <p class="iq-mb-0 text-left">Precious Metals investments have been viewed as a way to pass on and preserve wealth from one generation to the next, especially because of global demand. For example, as of 2014, China’s gold demand has quadrupled in a decade, surpassing India as the top consumer. A conservative outlook to 2018 suggests demand will increase at least 24%.</p>
                    </div>
                   <!-- <div class="iq-feature5">
                        <div class="feature7 text-center">
                            <img src="images/services/big/06.png" alt="icon1">
                            <h5 class="text-black iq-tw-5 iq-pt-20 iq-pb-10"><a href="services-details.html">Free Consulting</a></h5>
                            <p class="iq-mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Features -->
    <!-- About Us -->
    <section class="overview-block-ptb iq-bg iq-over-black-80 jarallax iq-about-us" style="background-image: url('images/bg/bg-13.jpg'); background-position: left center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <h3 class="iq-font-white iq-tw-6">Everything You Need To Know <br>
                            <span class="iq-font-yellow">About Gold IRA's !</span>
                        </h3>

                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row h-100">
                <div class="col-lg-6 col-md-12 align-self-center">
                    <img class="img-fluid" src="images/about-us/calculator-bitcoin.png" alt="">
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="iq-font-white iq-mt-20">A gold IRA or precious metals IRA is an Individual Retirement Account that includes physical gold, or other IRS approved precious metals (such as silver, platinum, and palladium). An IRS approved custodian holds in custody the contents of the Gold IRA for the benefit of the account owner. A Gold IRA functions in the same way as a traditional IRA, however, instead of holding paper assets, you can buy and own physical bullion coins or bars.
                    </p>
                    <p class="iq-font-white iq-mt-20">
                        Since gold is the most common precious metal invested into an IRA, the term “gold IRA” is used the most often in the industry to refer to a retirement account containing any combination of approved precious metals.
                    </p>
                    <p class="iq-font-white iq-mt-20">
                        You may have little to no say in your investments if you choose a conventional IRA or 401(k) with a bank or brokerage firm. But when you open a self-directed IRA with Great American Gold Company, you are empowered to make your own investment decisions and choose for yourself which IRA eligible precious metal coins, bullion, and bars to invest in.
                    </p>
                    <a class="button" href="javascript:void(0)">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->
    <!-- Bitcoin Growth Schedule -->
   <!-- <section class="overview-block-ptb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                       <h3 class="title iq-tw-5 iq-mb-20">Bitcoin Growth Schedule</h3>-->
<!--                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>-->
    <!--         </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">-->
<!--                    <img class="img-fluid" src="images/about-us/graph.jpg" alt="#">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--</section>-->
    <!-- Bitcoin Growth Schedule -->
    <!-- Counter -->
    <div class="iq-our-clients particles-bg iq-ptb-50 iq-bg iq-over-yellow-90 jarallax" style="background-image: url('images/bg/bg-2.jpg'); background-position: center center;">
        <canvas id="canvas"></canvas>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 iq-mtb-20">
                    <div class="counter"><i class="ion-ios-folder-outline iq-font-black" aria-hidden="true"></i>
                        <div class="right text-left">
                            <span class="timer iq-font-white" data-to="8120" data-speed="10000">8120</span>
                            <label class="iq-font-white">SATISFIED CLIENTS</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 iq-mtb-20">
                    <div class="counter"> <i class="ion-ios-paper-outline iq-font-black" aria-hidden="true"></i>
                        <div class=" text-left">
                            <span class="timer iq-font-white" data-to="40" data-speed="10000">40</span>
                            <label class="iq-font-white">YEARS OF EXPERIENCE</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 iq-mtb-20">
                    <div class="counter"> <i class="ion-ios-person-outline iq-font-black" aria-hidden="true"></i>
                        <div class="right text-left">
                            <span class="timer iq-font-white" data-to="4.9" data-speed="10000">4.9</span>
                            <label class="iq-font-white">STAR REVIEWS</label>
                        </div>
                    </div>
                </div>
               <!-- <div class="col-lg-3 col-md-6 col-sm-12 iq-mtb-20">
                    <div class="counter"> <i class="ion-ios-star-outline iq-font-black" aria-hidden="true"></i>
                        <div class="right text-left">
                            <span class="timer iq-font-white" data-to="1620" data-speed="10000">1620</span>
                            <label class="iq-font-white">RATES</label>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <!-- Counter -->
    <!-- Pricing -->
<!--    <section class="overview-block-ptb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <h3 class="title iq-tw-5 iq-mb-20">Bitcoin Pricing</h3>
                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-pricing">
                        <span class="icon"><i aria-hidden="true" class="ion-social-bitcoin-outline"></i></span>
                        <div class="pricing-header">
                            <h3 class="title">Standard</h3>
                            <span class="price-value">$09</span>
                        </div>
                        <ul class="pricing-content">
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Photoshop</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>HTML5 &amp; CSS 5</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Wordpress</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Javascript</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Animation</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose Package</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-pricing">
                        <span class="icon"><i aria-hidden="true" class="ion-social-bitcoin-outline"></i></span>
                        <div class="pricing-header">
                            <h3 class="title">Medium</h3>
                            <span class="price-value">$29</span>
                        </div>
                        <ul class="pricing-content">
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Photoshop</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>HTML5 &amp; CSS 5</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Wordpress</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Javascript</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Animation</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose Package</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-pricing">
                        <span class="icon"><i aria-hidden="true" class="ion-social-bitcoin-outline"></i></span>
                        <div class="pricing-header">
                            <h3 class="title">Premium</h3>
                            <span class="price-value">$59</span>
                        </div>
                        <ul class="pricing-content">
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Photoshop</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>HTML5 &amp; CSS 5</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Wordpress</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Javascript</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Animation</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose Package</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-pricing">
                        <span class="icon"><i aria-hidden="true" class="ion-social-bitcoin-outline"></i></span>
                        <div class="pricing-header">
                            <h3 class="title">Ultimate</h3>
                            <span class="price-value">$99</span>
                        </div>
                        <ul class="pricing-content">
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Photoshop</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>HTML5 &amp; CSS 5</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Wordpress</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Javascript</li>
                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Animation</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose Package</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->    <!-- Pricing -->
    <!-- Testimonial -->
    <div class="iq-news overview-block-ptb iq-testimonial2 jarallax" style="background-image: url('images/bg/bg-3.jpg'); background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-6">
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                        <div class="item">
                            <div class="feedback">
                                <div class="iq-info">
                                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div>
                                <div class="iq-mt-30">
                                    <div class="iq-avtar iq-mr-20"> <img alt="" src="images/feedback/01.jpg"></div>
                                    <div class="avtar-name">
                                        <h6 class="iq-lead iq-mb-0 iq-tw-6 iq-font-black">Rinks Cooper</h6>
                                        <span>CEO, CoinEx</span>
                                        <ul class="list-inline">
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star-half"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback">
                                <div class="iq-info">
                                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book./p>
                                </div>
                                <div class="iq-mt-30">
                                    <div class="iq-avtar iq-mr-20"> <img alt="" src="images/feedback/02.jpg"></div>
                                    <div class="avtar-name">
                                        <h6 class="iq-lead iq-mb-0 iq-tw-6 iq-font-black">JD Scot</h6>
                                        <span>CEO, CoinEx</span>
                                        <ul class="list-inline">
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star-half"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback">
                                <div class="iq-info">
                                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div>
                                <div class="iq-mt-30">
                                    <div class="iq-avtar iq-mr-20"> <img alt="" src="images/feedback/03.jpg"></div>
                                    <div class="avtar-name">
                                        <h6 class="iq-lead iq-mb-0 iq-tw-6 iq-font-black">Haris Morgan</h6>
                                        <span>CEO, CoinEx</span>
                                        <ul class="list-inline">
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star-half"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback">
                                <div class="iq-info">
                                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="iq-mt-30">
                                    <div class="iq-avtar iq-mr-20"> <img alt="" src="images/feedback/04.jpg"></div>
                                    <div class="avtar-name">
                                        <h6 class="iq-lead iq-mb-0 iq-tw-6 iq-font-black">Nik Jorden</h6>
                                        <span>CEO, CoinEx</span>
                                        <ul class="list-inline">
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star"></i></li>
                                            <li><i aria-hidden="true" class="ion-ios-star-half"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial -->
    <!-- Latest News -->
<!--    <div class="iq-news overview-block-ptb white-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-title">
                        <h3 class="title iq-tw-5 iq-mb-25">Latest News</h3>
                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="iq-news-box">
                        <div class="iq-news-image clearfix">
                            <img class="img-fluid" src="images/blog/img1.jpg" alt="#">
                            <div class="news-date"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</div>
                        </div>
                        <div class="iq-news-detail iq-pall-20 grey-bg">
                            <a class="news-tag iq-font-yellow" href="javascript:void(0)">Bitcoin</a>
                            <div class="news-title"> <a href="javascript:void(0)"><h5 class="iq-tw-5">News Post With Image</h5> </a> </div>
                            <div class="news-content">
                                <p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
                                <a class="iq-mt-5" href="javascript:void(0)">Read More <i aria-hidden="true" class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="iq-news-box">
                        <div class="iq-news-image clearfix">
                            <img class="img-fluid" src="images/blog/img2.jpg" alt="#">
                            <div class="news-date"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</div>
                        </div>
                        <div class="iq-news-detail iq-pall-20 grey-bg">
                            <a class="news-tag iq-font-yellow" href="javascript:void(0)">Exchange</a>
                            <div class="news-title"> <a href="javascript:void(0)"><h5 class="iq-tw-5">News Post With Image</h5> </a> </div>
                            <div class="news-content">
                                <p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
                                <a class="iq-mt-5" href="javascript:void(0)">Read More <i aria-hidden="true" class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="iq-news-box">
                        <div class="iq-news-image clearfix">
                            <img class="img-fluid" src="images/blog/img3.jpg" alt="#">
                            <div class="news-date"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</div>
                        </div>
                        <div class="iq-news-detail iq-pall-20 grey-bg">
                            <a class="news-tag iq-font-yellow" href="javascript:void(0)">Wallet</a>
                            <div class="news-title"> <a href="javascript:void(0)"><h5 class="iq-tw-5">News Post With Image</h5> </a> </div>
                            <div class="news-content">
                                <p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
                                <a class="iq-mt-5" href="javascript:void(0)">Read More <i aria-hidden="true" class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->    <!-- Latest News -->
    <!-- Consultant -->
    <!-- Consultant -->
</div>
<!-- Main Content End -->
<!--=================================
Footer -->

<?php require "footer.php"; ?>

<!--=================================
Footer -->
<!--=================================
Login -->
<div class="modal fade iq-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title iq-tw-5">Login</h4>
                <a class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="recipient-password" placeholder="Password">
                    </div>
                    <a class="button iq-mtb-10" href="javascript:void(0)">Sign In</a>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="javascript:void(0)">Forgot Password</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center">
                <div> Don't Have an Account? <a href="javascript:void(0)" class="iq-font-yellow">Register Now</a></div>
                <ul class="iq-media-blog iq-mt-20">
                    <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                    <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                    <li><a href="# "><i class="fa fa-google "></i></a></li>
                    <li><a href="# "><i class="fa fa-github "></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--=================================
Login -->
<!--=================================
Register -->
<div class="modal fade iq-register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title iq-tw-5">Register</h4>
                <a class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="recipient-username" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="recipient-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">I Agree to the Terms and Conditions</label>
                    </div>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a class="button iq-mtb-10" href="javascript:void(0)">Sign Up</a>
                </form>
            </div>
            <div class="modal-footer text-center">
                <div> Already Have an Account? <a href="javascript:void(0)" class="iq-font-yellow">Login</a></div>
                <ul class="iq-media-blog iq-mt-20">
                    <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                    <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                    <li><a href="# "><i class="fa fa-google "></i></a></li>
                    <li><a href="# "><i class="fa fa-github "></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--=================================
Register -->
<!-- back-to-top -->
<div id="back-to-top">
    <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
</div>
<!-- back-to-top End -->

<!-- jquery-min JavaScript -->
<script src="js/jquery-min.js "></script>
<!-- popper JavaScript -->
<script src="js/popper.min.js "></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js "></script>
<!-- Bitcoin widget JavaScript -->
<script src="js/widget.js "></script>
<!-- All-plugins JavaScript -->
<script src="js/all-plugins.js "></script>
<!-- particles JavaScript -->
<script src="js/particles.js "></script>

<!-- REVOLUTION JS FILES -->
<script src="revslider/js/jquery.themepunch.tools.min.js"></script>
<script src="revslider/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="revslider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.video.min.js"></script>
<!-- Custom JavaScript -->
<script src="js/custom.js "></script>
<script>
    var revapi3,
        tpj = jQuery;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_3_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_3_1");
        } else {
            revapi3 = tpj("#rev_slider_3_1").show().revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    arrows: {
                        style: "persephone",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        }
                    }
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1170,
                gridheight: 790,
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "enterpoint",
                    speed: 400,
                    speedbg: 0,
                    speedls: 0,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                },
                shadow: 0,
                spinner: "spinner0",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>
</body>

</html>