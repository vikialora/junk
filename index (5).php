<?php
require_once('./cust/init.php');
$control_msg=$utils->Session('control-msg');
$utils->putSession('control-msg',null);
$_sponsor=$utils->get(REFERRAL_KEY);
if($_sponsor) $utils->putSession('_sponsor',intval($_sponsor,16));

echo <<<END
<!doctype html>
<html class="no-js" lang="">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Crypto - ICO Crypto, Blockchain & Cryptocurrency Web</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<link rel="shortcut icon" type="image/x-icon" href="assetsp/img/favicon.png">


<link rel="stylesheet" href="assetsp/css/bootstrap-5.0.0-alpha-1.min.css">
<link rel="stylesheet" href="assetsp/css/LineIcons.2.0.css">
<link rel="stylesheet" href="assetsp/css/animate.css">
<link rel="stylesheet" href="assetsp/css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
 
</head>
<body>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<div class="preloader d-none">
<div class="loader">
<div class="ytp-spinner">
<div class="ytp-spinner-container">
<div class="ytp-spinner-rotator">
<div class="ytp-spinner-left">
<div class="ytp-spinner-circle"></div>
</div>
<div class="ytp-spinner-right">
<div class="ytp-spinner-circle"></div>
</div>
</div>
</div>
</div>
</div>
</div>


<header class="header navbar-area">
<div class="container">
<div class="row">
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand text-white" href="" style='font-weight:600; font-size:x-large;font-family:"Times New Roman",Helvetica, Arial, sans-serif; font-style:oblique;'>
<img src="assetsp/img/logo.png" height='50' width='50' alt="Logo">$_STATIC_MAP_NAME
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul id="nav" class="navbar-nav ml-auto">
<li class="nav-item">
<a class="page-scroll active" href="#home">Home</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="login.php">Login</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="reg.php">Register</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="#about">About</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="#service">Service</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="#roadmap">Roadmap</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="#team">Team</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="#contact">Contact</a>
</li>
</ul>
</div> 
</nav> 
</div>
</div> 
</div> 
</header>


<section id="home" class="hero-section">
<div class="shapes">
<div class="shape shape-1"></div>
<div class="shape shape-2"></div>
<div class="shape shape-3"></div>
</div>
<div class="container">
<div class="row align-items-center">
	<div id=''>$control_msg</div>
<div class="col-xl-7 col-lg-7">
<div class="hero-content-wrapper">
<h1 class="text-white wow fadeInDown" data-wow-delay=".2s">Trade and Invest on Crypto Using Our Platform</h1>
<p class="text-white wow fadeInLeft" data-wow-delay=".4s">We’re reinventing the global equity blockchian – that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital and the way investors buy and sell assets.</p>
<a href="reg.php" class="theme-btn wow fadeInUp" data-wow-delay=".1s">Register Now</a>
</div>
</div>
<div class="col-xl-5 col-lg-5">
<div class="hero-img">
<img src="assetsp/img/hero-img.svg" alt="" class=" wow fadeInRight" data-wow-delay=".1s">
</div>
</div>
</div>
</div>
</section>
<div style="width: 100%; height:62px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 0px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; padding:1px;padding: 0px; margin: 0px;"><div style="height:40px;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div></div>

 

<section id="feature" class="feature-section pt-150">
<div class="container">
<div class="row">
<div class="col-xl-7 col-lg-8 mx-auto">
<div class="section-title text-center mb-55">
<h2 class="mb-20 fadeInUp" data-wow-delay=".1s">Our Specialities</h2>
<p class="fadeInUp" data-wow-delay=".1s">Our Platform provides you with amazing features that make us stand out amongst others.</p>
</div>
</div>
</div>
<div class="features-wrapper">
<div class="row justify-content-center">
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-feature text-center mb-30 fadeInUp" data-wow-delay=".1s">
<div class="feature-img mb-20">
<img src="assetsp/img/feature-1.svg" alt="">
</div>
<div class="feature-content">
<h5>SIMPLE INVESTMENT</h5>
<p>Our simple investment strategy yields periodic dividends at the rate of $_STATIC_MAP_MIN_RATE% daily or $_STATIC_MAP_MAX_RATE% Monthly ROI. Both the realised profits and capital are immediately disbursed back to the origin wallets at the end of their run period.</p>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-feature text-center mb-30 fadeInUp" data-wow-delay=".4s">
<div class="feature-img mb-25">
<img src="assetsp/img/feature-2.svg" alt="">
</div>
<div class="feature-content">
<h5>WITHDRAW INSTANTLY</h5>
<p>Withdrawal is processed instantly as there is no wait period nor delay. This is because your funds are stored exclusively and fully encrypted in users wallet and hence, there is no middle man involved between transactions in and out of the wallet.</p>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-feature text-center mb-30 fadeInUp" data-wow-delay=".6s">
<div class="feature-img mb-20">
<img src="assetsp/img/feature-3.svg" alt="">
</div>
<div class="feature-content">
<h5>COMPOUND INVEST</h5>
<p>$_STATIC_MAP_NAME also supports Compounded mode suitable for long term investments. In this mode, Realised profits and capital at the end of each day cycle are re-invested through the whole length of the maturity period to give maximum through put.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section id="about" class="about-section pt-150 pb-20">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-6 col-lg-6">
<div class="about-img mb-30">
<img src="assetsp/img/about-img.svg" alt="image" class=" fadeInLeft" data-wow-delay=".4s">
</div>
</div>
<div class="col-xl-6 col-lg-6">
<div class="about-content mb-30">
<div class="section-title mb-40">
<h2 class="fadeInUp" data-wow-delay=".2s">About Us</h2>
</div>
<p class="mb-15 fadeInUp" data-wow-delay=".1s">What is $_STATIC_MAP_NAME?
$_STATIC_MAP_NAME is an investment platform that offers $_STATIC_MAP_MIN_RATE% return of profits daily for 30days.
<br/><br/>
We offer the ideas that raise your investment above the expected income. 
<br/><br/>
<h1>Overview</h1> 
<br/><br/>
Gold in the 21st century is not money and not a means of payment.  This is a highly liquid, ancient and most reliable means of accumulation. Investing in gold is the most popular way to diversify an investment portfolio,  regardless of its size.
<br/><br/>
There are many reasons for this: Gold has historically become a measure of securing money. Metal storage doesn't require special conditions,  it's not subject to damage over time , it's not afraid of fire, nor water, nor an open flame. 

Legal gold mining consists of several stages of preliminary preparation for the exploration and enrichment of deposits. To increase the efficacy and speed of excavation,  special machines and tools are used. The extracted material is processed according to gravity schemes, as well as using flotation and combined processing of mineral raw materials. 
<br/><br/>

<h1>What We Do</h1> 
<br/><br/>
Our company is engaged in investing in gold, metal bills etc 


Such a method of investing is devoid of the risk of capital loss, since gold will never depreciate completely, as it's the case for example with stocks. In addition, the best industry analysts predict a steady increase in the price of gold from 2020-2030. <br/><br/> There is a positive growth trend in the value of precious metal: In early 2016, an ounce cost a little more than $ 1050, in July 2018 - $ 1220, and in October 2019 it is estimated at $ 1,500 thus in just over a short period of time your investment in a noble metal would bring you almost 50% of the income. 

<br/><br/>
However,  Xploretrading is not limited to buying/selling "gold assets" (including gold trading in the forex market) and it is directly involved in the process of their extraction from gold ores in Russia, Uzbekistan,  Indonesia and China.  Appropriate license and all necessary permits have been obtained.
<br/><br/>
<a href="login.php" class="theme-btn theme-btn-2 fadeInRight" data-wow-delay=".1s">Sign In</a>
</div>
</div>
</div>
</div>
</section>


<section id="service" class="service-section pt-150 pb-120">
<div class="container">
<div class="row">
<div class="col-xl-7 col-lg-8 col-md-10 mx-auto">
<div class="section-title text-center mb-55">
<h2 class="mb-20 fadeInDown" data-wow-delay=".2s">Our Awesome Features</h2>
<p class=" fadeInUp" data-wow-delay=".4s"> 
What makes our investment system distinguish us from others and is the best in the market?
</p>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-service fadeInUp" data-wow-delay=".2s">
 <div class="service-icon mb-30">
<i class="lni lni-money-protection"></i>
</div>
<h4>Secure Wallet</h4>
<p>We make every effort to ensure that your data and funds are 100% secured. We only use secure connections and top-class servers.</p>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-service fadeInUp" data-wow-delay=".4s">
<div class="service-icon mb-30">
<i class="lni lni-alarm"></i>
</div>
<h4>Fast 24/7 Customer Support</h4>
<p>Our agents are available and always ready to help you on chat 24/7. You can also contact us via email.</p>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-service fadeInUp" data-wow-delay=".6s">
<div class="service-icon mb-30">
<i class="lni lni-reload"></i>
</div>
<h4>Exchange Service</h4>
<p>Our asset management system works in such a way that our traders manage your funds and professionally invest them, providing you with a guaranteed daily profit. This is 100% passive income, regardless of your knowledge or skill.</p>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-service fadeInUp" data-wow-delay=".2s">
<div class="service-icon mb-30">
<i class="lni lni-cog"></i>
</div>
<h4>Daily ROI</h4>
<p>You will receive earnings every 24 hours on all days of the year. Your deposit is working all the time, even on weekends and holidays.</p>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-service fadeInUp" data-wow-delay=".4s">
<div class="service-icon mb-30">
<i class="lni lni-bolt-alt"></i>
</div>
<h4>Trading Bot</h4>
<p>By using AX TRADER you have a guaranteed daily profit of $_STATIC_MAP_MIN_RATE% depending on the chosen investment plan.</p>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-service fadeInUp" data-wow-delay=".6s">
<div class="service-icon mb-30">
<i class="lni lni-coin"></i>
</div>
<h4>Fast Withdrawals</h4>
<p>Your withdrawal will be processed by our operators as fast as possible. Maximum waiting time is up to 24 hours (7 days/week).</p>
</div>
</div>
</div>
</div>
</section>


<section id="roadmap" class="roadmap-section pt-100 pb-70 img-bg" style="background-image: url(assetsp/img/common-bg.jpg)">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
<div class="section-title text-center mb-55">
<h2 class="text-white mb-20 fadeInUp" data-wow-delay=".4s">Road Map</h2>
<p class="text-white fadeInUp" data-wow-delay=".6s">In order to reach our goal of being a major player in the crypto market, we have been working on a new utility crypto token that will enable anonymous transactions with characteristic speed of transactions as xlm. Hence we have partnered with Stella foundation in developing road map for our joint venture</p>
</div>
</div>
 </div>
<div class="roadmap-wrapper justify-content-center">
<div class="roadmap-item">
<span class="circle"></span>
<span>Quarter 1 2022</span>
<p>Exchange DAS to Bitcoin and other currency</p>
</div>
<div class="roadmap-item">
<span class="circle"></span>
<span>Quarter 2 2022</span>
<p>XLM mode of payment in DAS</p>
</div>
<div class="roadmap-item">
<span class="circle"></span>
<span>Quarter 3 2023</span>
<p>Develop eth token for DAS to allow easy smart contract integration</p>
</div>
<div class="roadmap-item">
<span class="circle"></span>
<span>Quarter 4 2022</span>
<p>Launch custom node for DAS on the mainnet protocol</p>
</div>
<div class="roadmap-item">
<span class="circle"></span>
<span>Quarter 1 2023</span>
<p>Coin Marketcap, World Coin Index</p>
</div>
</div>
</div>
</section>


<section class="grows-section pt-150">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-6">
<div class="grows-img mb-30">
<img src="assetsp/img/grows-img.png" alt="" class=" fadeInLeft" data-wow-delay=".5s">
</div>
</div>
<div class="col-xl-6 col-lg-6">
<div class="grows-content-wrapper mb-30">
<h2 class="mb-35 fadeInDown" data-wow-delay=".2s">Great Effeciency Like Never Before</h2>
<p class="mb-35 fadeInLeft" data-wow-delay=".4s">A solid pool of liquidity for the company's operations is provided by attracting private investments. By allocating a part of its profits to its investors, Future trade provides the company's professionals with the necessary funds to carry out trading transactions, investments, and conversions.Thanks to this, you can to distribute funds in various directions and not miss profitable projects and deals.
</p>
<p class="mb-35 fadeInLeft" data-wow-delay=".6s">Future trade serves as the trusted advisor and financial manager for working and retired professionals, multi-generational families, companies and charitable foundations.</p>
<a href="reg.php" class="theme-btn theme-btn-2 fadeInUp" data-wow-delay=".6s">SIGN UP</a>
</div>
</div>
</div>
</div>
</section>


<section id="team" class="team-section pt-120 pb-120">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-7 mx-auto">
<div class="section-title text-center mb-55">
<h2 class="mb-20 fadeInUp" data-wow-delay=".2s">Meet Our Experts</h2>
<p class="mb-55 fadeInLeft" data-wow-delay=".4s">Our experts consists of professionals with a wide array of skills</p>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="single-team text-center mb-120 fadeInUp" data-wow-delay=".2s">
 <div class="team-img mb-20">
<img src="assetsp/img/team-1.png" alt="">
<div class="team-social-links">
<ul>
<li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
<li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
</ul>
</div>
<div class="team-info">
<h5>Mdish Gilmore</h5>
<span>CEO</span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="single-team text-center mb-120 fadeInUp" data-wow-delay=".4s">
<div class="team-img mb-20">
<img src="assetsp/img/team-2.png" alt="">
<div class="team-social-links">
<ul>
<li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
<li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
</ul>
</div>
<div class="team-info">
<h5>Catherine Alisa</h5>
<span>Product Manager</span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="single-team text-center mb-120 fadeInUp" data-wow-delay=".4s">
<div class="team-img mb-20">
<img src="assetsp/img/team-2.png" alt="">
<div class="team-social-links">
<ul>
<li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
<li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
</ul>
</div>
<div class="team-info">
<h5>Catherine Alisa</h5>
<span>Product Manager</span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="single-team text-center mb-120 fadeInUp" data-wow-delay=".4s">
<div class="team-img mb-20">
<img src="assetsp/img/team-2.png" alt="">
<div class="team-social-links">
<ul>
<li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
<li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
</ul>
</div>
<div class="team-info">
<h5>Catherine Alisa</h5>
<span>Product Manager</span>
</div>
</div>
</div>
</div>

</section>


<section class="countdown-section pt-70 pb-70 img-bg" style="background-image: url(assetsp/img/common-bg.jpg)">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-6 col-lg-6">
<div class="countdown-img">
<img src="assetsp/img/countdown-img.svg" alt="" class=" fadeInLeft" data-wow-delay=".4s">
</div>
</div>
<div class="col-xl-6 col-lg-6">
<div class="countdown-content-wrapper">
<div class="countdown">
<ul id="countdown-example">
<li><span class="days">89</span>
<p class="days_text">DAYS</p>
</li>
<li><span class="hours">53</span>
<p class="hours_text">HOUR</p>
</li>
<li><span class="minutes">34</span>
<p class="minutes_text">MINS</p>
</li>
<li><span class="seconds">08</span>
<p class="seconds_text">SECS</p>
</li>
</ul>
</div>
<div class="countdown-content">
<h2 class="text-white mb-35  fadeInUp" data-wow-delay=".2s">Smart and Secure Way
to Invest in Crypto</h2>
<p class="text-white mb-30 fadeInUp" data-wow-delay=".4s">The main direction of the company's development will always be focused on social and financial security of customers. We continue to expedite all efforts in order to maintain the quality of our products and services at the maximum level.</p>
<a href="login.php" class="theme-btn fadeInUp" data-wow-delay=".6s">SIGN IN</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section id="contact" class="contact-section pt-120 pb-105">
<div class="container">
<div class="row align-items-end">
<div class="col-xl-6 col-lg-7">
<div class="contact-wrapper mb-30">
<h2 class="mb-20 fadeInDown" data-wow-delay=".2s">Cotact With Us</h2>
<p class="mb-55 fadeInUp" data-wow-delay=".4s">If you have any questions about our company or need help with our services, please don't hesitate to contact us. We will reply you as soon as possible.</p>
<ul class="list-unstyled text-center">

    <li class="mb-5"><i class="lni lni-map ini-2x mb-2"></i>
      <p>03-738, Mission District San Francisco</p>
    </li>

    <li class="mb-5"><i class="lni lni-phone ini-2x mb-2"></i>
      <p> <a href="https://api.whatsapp.com/send?phone=13025562253">Send WhatsApp Message</a> </p>
       
    </li>

    <li class="mb-5"><i class="lni lni-envelope ini-2x mb-2"></i>
      <p>$_STATIC_MAP_EMAIL</p>
    </li>

  </ul>
<form action="https://preview.uideck.com/items/crypto/assetsp/mail.php" method="POST" id="contact-form" class="contact-form d-none">
<div class="row">
<div class="col-lg-6 col-md-6">
<input type="text" id="name" name="name" placeholder="Name">
</div>
<div class="col-lg-6 col-md-6">
<input type="email" id="email" name="email" placeholder="Email">
</div>
<div class="col-lg-6 col-md-6">
<input type="text" id="phone" name="phone" placeholder="Phone">
</div>
<div class="col-lg-6 col-md-6">
<input type="text" id="subject" name="subject" placeholder="Subject">
</div>
<div class="col-lg-12">
<textarea name="message" id="message" rows="5" placeholder="Message"></textarea>
</div>
</div>
<button type="submit" class="theme-btn theme-btn-2">SEND MESSAGE</button>
</form>
</div>
</div>
<div class="col-xl-6 col-lg-5">
<div class="contact-map mb-30">
<div class="map-canvas">
<iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
</div>
</div>
</div>
</div>
</section>


<footer class="footer pt-100 img-bg" style="background-image: url(assetsp/img/common-bg.jpg)">
<div class="container">
<div class="row">
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="footer-widget mb-60 fadeInLeft" data-wow-delay=".2s">
<a href="" class="logo mb-40 text-white" style='font-weight:600; font-size:x-large;font-family:"Times New Roman",Helvetica, Arial, sans-serif; font-style:oblique;'><img src="assetsp/img/logo.png" height='50' width='50' alt="">$_STATIC_MAP_NAME</a>
<p class="mb-30">$_STATIC_MAP_NAME, your first step to financial freedom starts here.</p>
<div class="footer-social-links">
<ul>
<li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
<li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
<li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-2 col-md-6">
<div class="footer-widget mb-60 fadeInUp" data-wow-delay=".4s">
<h4>Company</h4>
<ul class="footer-links">
<li>
<a href="#home">Home</a>
</li>
<li>
<a href="#about">About</a>
</li>
<li>
<a href="#service">Service</a>
</li>
<li>
<a href="#team">Team</a>
</li>
<li>
<a href="#contact">Contact</a>
</li>
</ul>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="footer-widget mb-60 fadeInUp d-none" data-wow-delay=".6s">
<h4>About</h4>
<ul class="footer-links">
<li>
<a href="javascript:void(0)">Documentation</a>
</li>
<li>
<a href="javascript:void(0)">IOS & Android Apps</a>
</li>
<li>
<a href="javascript:void(0)">Privacy Policy</a>
</li>
<li>
<a href="javascript:void(0)">Support Forum</a>
</li>
<li>
<a href="javascript:void(0)">Terms Conditions</a>
</li>
</ul>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="footer-widget mb-60 fadeInRight" data-wow-delay=".8s">
<h4>Resource</h4>
<ul>
<li class="mb-30">
<p>Company No: C5B345 <br>
CSINE GROUP LTD.</p>
</li>
<li>
<p>Address: M-321 Volunt Ave, <br> Staten Islandm, NY 201526</p>
</li>
</ul>
</div>
</div>
</div>
<div class="copyright-area">
<p class="mb-0 text-white text-center">All rights reserved <a href="#" rel="nofollow" target="_blank">$_STATIC_MAP_NAME © 2019</a></p>
</div>
</div>
</footer>


<a href="#" class="scroll-top">
<i class="lni lni-chevron-up"></i>
</a>

<script src="assetsp/js/bootstrap.bundle-5.0.0.alpha-1-min.js"></script>
<script src="assetsp/js/contact-form.js"></script>
<script src="assetsp/js/wow.min.js"></script>
<script src="assetsp/js/main.js"></script>
</body>

</html>
END;
$utils->putSession('control-msg',null);
?>