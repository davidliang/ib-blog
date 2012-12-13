<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>


    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/menu.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/jquery_ctrls.css"/>

    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/chrome_hack.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/ie_hack.css"/>


    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.6.4.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.watermark.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/HomeUI.js"></script>

    <script type="text/javascript">

        $(function () {
            HomeUI.init();

        });
    </script>



</head>
<body>
<!--HEADER{-->
<div id="header-bg" class="center">
    <div class="center-wrapper">
        <a href="#" id="logo" class="left"></a>
        <div id="phone" class="left">
            <a href="tel:13002284882" id="lnkTelEn">1300 BATHTUB</a>
            <a href="tel:13002284882" id="lnkTelNum">1300 2284882</a>
        </div>
    </div>
</div>
<div class="clr"></div>
<!--}HEADER-->

<!--MENU{-->
<div id="menu-bg" class="center">
    <div class="center-wrapper" id="menu-wrapper">
        <ul>

            <li class="first"><a title="Go to the Products &amp; Services page" class="lnkMenuMain" href="http://www.innerbath.com.au/products-and-services/">
                Products &amp; Services
            </a></li>

            <li class=""><a title="Go to the Before &amp; After page" class="lnkMenuMain" href="http://www.innerbath.com.au/before-and-after/">
                Before &amp; After
            </a></li>

            <li class=""><a title="Go to the Testimonials page" class="lnkMenuMain" href="http://www.innerbath.com.au/testimonials/">
                Testimonials
            </a></li>

            <li class=""><a title="Go to the How it works page" class="lnkMenuMain" href="http://www.innerbath.com.au/how-it-works/">
                How it works
            </a></li>

            <li class=""><a title="Go to the FAQ page" class="lnkMenuMain" href="http://www.innerbath.com.au/faq/">
                FAQ
            </a></li>

            <li class=""><a title="Go to the Comparison Chart page" class="lnkMenuMain" href="http://www.innerbath.com.au/comparison-chart/">
                Comparison Chart
            </a></li>

            <li class=""><a title="Go to the Quotation page" class="lnkMenuMain" href="http://www.innerbath.com.au/quotation/">
                Quotation
            </a></li>

            <li class=""><a title="Go to the Business Opportunities page" class="lnkMenuMain" href="http://www.innerbath.com.au/business-opportunities/">
                Business Opportunities
            </a></li>
                  <li class=""><a title="Go to the Inner Bath Blog page" class="lnkMenuMain" href="http://www.innerbath.com.au/blog">
                Blog
            </a></li>

        </ul>
    </div>
</div>

<!--}MENU-->


<!--BODY{-->
<div id="main-bg" class="center">
    <div class="center-wrapper" id="inner-wrapper">



