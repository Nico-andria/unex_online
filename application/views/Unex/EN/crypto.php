<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Crypto</title>
<!-- Stylesheets -->
<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/responsive.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/business-casual.css'); ?>" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-ENee-v1.0.0/icon-font.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css'); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
<style type="text/css">
	figure#slide{
		height: auto;
        width: 500px;
	}
	figure#detail{
		height: 250px;
	}
    #hero {
        width: 100%;
        height: 100vh;
        /*background: linear-gradient(45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url("images/resource/hero-bg.jpg") center center no-repeat;*/
        background: linear-gradient(45deg, rgba(68, 34, 167, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%), url("<?php echo base_url(); ?>assets/images/resource/hero-bg.jpg") center center no-repeat;
        background-size: cover;
    }
    #details{
        padding-top: 80px;
    }
    @media (max-width: 500px) {
        figure#slide{
            height: auto;
            width: auto;
        }
    }
</style>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="outer-container">
                <div class="clearfix">
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="<?php echo base_url(); ?>EN/Unex/home"><img src="<?php echo base_url(); ?>assets/<?php echo base_url('assets/images/logo.png') ?>" alt="" title="" width="70px"></a></div>
                    </div>
                    
                    <div class="nav-outer clearfix">
                    
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/home">Home</a></li>
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/wallet">Wallet</a></li>
                                    <li class="current"><a href="<?php echo base_url(); ?>EN/Unex/crypto">Crypto</a></li>
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/pricing">Pricing</a></li>
                                    <li><a href="<?php echo base_url(); ?>EN/Unex/blog">Blog</a></li>
                                    <li class="dropdown"><a href="#">Language</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/crypto">EN</a></li>
                                            <li><a href="<?php echo base_url(); ?>FR/Unex/crypto">FR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Help</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/faq">FAQ</a></li>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/tuto">Tutorial</a></li>
                                            <li><a href="<?php echo base_url(); ?>EN/Unex/contacte">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                    <a href="https://client.unex.online/Login" class="theme-btn btn-style-one" style="padding:15px 40px 15px; :hover{color:#f20487;}"><span class="fa fa-sign-in"></span> Sign-up</a>
                             
                            </div>
                        </nav>
                        
                        

                    </div>
                    <!--Outer Box-->
                    <div class="outer-box">
                        <!-- Nav Toggler -->
                        <div class="nav-toggler">
                            <button class="nav-btn"><span class="icon flaticon-arrows"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->
    </header>
    <!--End Main Header -->
 	
    

    <!--Form Back Drop-->
    <div class="form-back-drop"></div>
    
    <!-- Hidden Bar -->
    <section class="hidden-bar">
        <div class="inner-box">
            <div class="cross-icon"><span class="fa fa-times"></span></div>
            <div class="title">
                <h2>Contact Us</h2>
            </div>
            
            <!--Appointment Form-->
            <div class="appointment-form">
                <form method="POST" action="<?php echo base_url(); ?>EN/Unex/mail">
				<div class="form-group validate-input">
					<input id="name" class="input100" type="text" name="name" placeholder="Full name">
					<span class="focus-input100"></span>
				</div>


				<div class="form-group validate-input">
					<input id="email" class="input100" type="email" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>
                
                <div class="form-group validate-input">
                    <input id="subject" class="input100" type="text" name="subject" placeholder="Enter the subject">
                    <span class="focus-input100"></span>
                </div>

				<div class="form-group validate-input">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +44 12 34 567 89">
					<span class="focus-input100"></span>
				</div>


				<div class="form-group validate-input">
					<textarea id="message" class="input100" name="message" placeholder="Your message..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<input class="theme-btn btn-style-one" type="submit" name="send" value="Send now">
						<!-- Send Now
					</button> -->
				</div>
			</form>
            </div>
            
            <!--Contact Info Box-->
            <div class="contact-info-box">
                <ul class="info-list">
                    <li>contact@unex.online</li>
                    <li>+(44) 20 7097 3573</li>
                </ul>
                <ul class="social-list clearfix">
                    <li><a href="https://www.facebook.com/EquityMadagascar" target="_blank">Facebook</a></li>
                    <li><a href="https://www.linkedin.com/company/equitymadagascar/" target="_blank">Linkedin</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Hidden Bar -->

    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Access your cryptos via Unex</h1>
          <h2>Unex, a licensed financial institution, empowers its vast network of partners to accept the widest range of payment methods, including Visa, MasterCard, Apple Pay, SWIFT, SEPA, and more!</h2>
          <div><a href="#crypto" class="btn-get-started scrollto">More details</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="<?php echo base_url(); ?>assets/images/resource/btc-1.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features" data-aos="fade-up"> -->
    	<section class="about-section" data-aos="fade-up">
    	<div class="anim-icons">
            <span class="icon icon-cross-1"></span>
            <span class="icon icon-circle-9"></span>
        </div>
        <span class="float-text">Our features</span>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Our features</h2>
            </div>
      <div class="container">


        <div class="row content" id="details">
          <div class="col-md-5 wow slideInRight order-1 order-md-2" data-aos="fade-left">
            <img src="<?php echo base_url(); ?>assets/images/features/cryptocurrency.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1 wow slideInLeft" data-aos="fade-right">
            <h3>All Your Favorite Coins in One Place</h3>
            <p class="font-italic">
              Here you will find all major and most popular cryptocurrencies — Bitcoin (BTC), Ethereum (ETH), Litecoin (LTC), Dash (DASH), Ripple (XRP), Bitcoin Cash (BCH) — available for fast purchasing with a credit or debit card, converting one crypto to another and paying with your local bank.
            </p>
            <p>
              The process of buying or swapping crypto turns into a pleasant online shopping trip that goes hand in hand with simple workflow, fast transaction processing and proven reliability. Besides, all users have a perfect opportunity to sell cryptocurrencies for MGA (Ariary) and receive cash to their Unex account.
            </p>
          </div>
        </div>

        <div class="row content" id="details">
          <div class="col-md-5 wow slideInLeft" data-aos="fade-right" data-aos-delay="100">
            <img src="<?php echo base_url(); ?>assets/images/features/p2p.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4 wow slideInRight" data-aos="fade-left" data-aos-delay="100">
            <h3>Trading in cryptocurrencies</h3>
            <p class="font-italic">
              With Unex, trading in cryptocurrencies has never been easier.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Buy all varieties of cryptocurrency</li>
              <li><i class="icofont-check"></i> Sell the cryptocurrencies you have.</li>
            </ul>
          </div>
        </div>

        <div class="row content" id="details">
          <div class="col-md-5 wow slideInRight order-1 order-md-2" data-aos="fade-left">
            <img src="<?php echo base_url(); ?>assets/images/features/multiples_paiements.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1 wow slideInLeft" data-aos="fade-right">
            <h3>Multiple payment methods</h3>
            <p class="font-italic">
              Now buy your cryptos with any payment method
            </p>
            <p>
              Our platform offers a multitude of ways for you to get your cryptocurrencies
            </p>
            <ul>
              <li><i class="icofont-check"></i> By VISA and MasterCard debit/credit card</li>
              <li><i class="icofont-check"></i> By mobile money</li>
              <li><i class="icofont-check"></i> Payment in cash directly in our offices</li>
            </ul>
          </div>
        </div>

        <div class="row content" id="details">
          <div class="col-md-5 wow slideInLeft" data-aos="fade-right">
            <img src="<?php echo base_url(); ?>assets/images/features/wallet.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 wow slideInRight" data-aos="fade-left">
            <h3>Use your own e-wallets</h3>
            <p>We receive and send to all electronic wallets<br>Whether it is :</p>
            <ul>
              <li><i class="icofont-check"></i> Binance</li>
              <li><i class="icofont-check"></i> Blockchain wallet</li>
              <li><i class="icofont-check"></i> Coinbase</li>
              <li><i class="icofont-check"></i> Payeer</li>
              <li><i class="icofont-check"></i> Tronlink</li>
              <li><i class="icofont-check"></i> ...</li>
            </ul>
          </div>
        </div>

        <div class="row content" id="details">
          <div class="col-md-5 wow slideInRight order-1 order-md-2" data-aos="fade-left">
            <img src="<?php echo base_url(); ?>assets/images/features/f1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1 wow slideInLeft" data-aos="fade-right">
            <h3>Secured platform</h3>
            <p class="font-italic">
              Unex offers a KYC check according to European standards to prevent ENaud.<br>
              Your transaction history will be displayed directly in your back office when you make a transaction.
            </p>
            <p>
              The security of users' information and funds is our top priority.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- About Section -->
    <section class="about-section" id="crypto">
        <div class="anim-icons">
            <span class="icon icon-cross-1"></span>
            <span class="icon icon-circle-9"></span>
        </div>
        <span class="float-text">Network</span>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Network</h2>
            </div>

            <div class="about-carousel owl-carousel owl-theme">
                <!-- Slide Item -->
                <div class="slide-item clearfix">
                    <div class="image-box">
                        <figure class="image" id="slide"><img src="<?php echo base_url(); ?>assets/images/resource/blockchain.png" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <div class="inner-box">
                            <span class="title">Blockchain</span>  
                            <h3>Blockchain</h3>
                            <div class="text">
                                <p>
                                    In the blockchain, all transactions are grouped into blocks. Each block must then be validated by the network nodes using an algorithmic method. Once the block is validated, it is added to the blockchain and thus becomes visible to all users.
                                </p>
                                
                            </div>
                            <div class="btn-box"><a href="https://client.unex.online" class="theme-btn btn-style-one">More details</a></div>
                        </div> 
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item clearfix">
                    <div class="image-box">
                        <figure class="image" id="slide"><img src="<?php echo base_url(); ?>assets/images/resource/erc20.png" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <div class="inner-box">
                            <span class="title">ERC20</span>  
                            <h3>Ethereum</h3>
                            <div class="text" style="font-size: 15px;">The Ethereum Standard Token (ERC20) (for "Ethereum Request for Comment") is used for smart contracts on the Ethereum network. Developed in 2015, ERC20 defines a common list of rules that the Ethereum token must implement. It offers developers the ability to schedule the circulation of new tokens in the Ethereum ecosystem. The token has become popular with the participatory financing of companies via ICOs.</div>
                            <div class="btn-box"><a href="https://EN.wikipedia.org/wiki/ERC20" class="theme-btn btn-style-one">More details</a></div>
                        </div> 
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item clearfix">
                    <div class="image-box">
                        <figure class="image" id="slide"><img src="<?php echo base_url(); ?>assets/images/resource/bsc.png" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <div class="inner-box">
                            <span class="title">BSC</span>  
                            <h3>Binance Smart Chain</h3>
                            <div class="text">The Binance Smart Chain (BSC) can be described as a blockchain running in parallel to the Binance Chain. Unlike the Binance Chain, BSC allows for the programming of smart contracts and is compatible with the Ethereum Virtual Machine (EVM).</div>
                            <div class="btn-box"><a href="https://academy.binance.com/EN/articles/how-to-get-started-with-binance-smart-chain-bsc" class="theme-btn btn-style-one">More details</a></div>
                        </div> 
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="anim-icons">
            <span class="icon icon-circle-9"></span>
            <span class="icon icon-twist-line-3"></span>
        </div>
        <span class="float-text">Details</span>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Details</h2>
            </div>

            <div class="row">
                
                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/eth.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Ethereum</span>
                                <span class="author">ETH</span>
                            </div>
                            <h4><a href="blog-single.html">Ethereum is a global, open source platform for decentralised applications.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">ETH is a digital currency. It is purely digital and can be sent to anyone in the world, instantly. The ETH money supply is not controlled by any government or company. It is decentralised and limited. The whole world uses ETH to make payments, as a store of value or as collateral.</div>
                            <div class="link-box"><a href="https://ethereum.org"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/btc.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Bitcoin</span>
                                <span class="author">BTC</span>
                            </div>
                            <h4><a href="blog-single.html">Bitcoin is an innovative payment network and a new form of money.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">Bitcoin is a peer-to-peer technology operating without a central authority. The management of transactions and the creation of bitcoins is handled collectively by the network. Bitcoin is ENee and open. Its design is public, no one owns or controls Bitcoin and anyone can join. Thanks to several of its unique properties, Bitcoin makes possible promising uses that could not be covered by previous payment systems.
                            </div>
                            <div class="link-box"><a href="bitcoin.org"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/usdt.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Tether</span>
                                <span class="author">USDT</span>
                            </div>
                            <h4><a href="blog-single.html">Anything you can do with digital currencies, you can now do with digital money.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">Tether is a crypto-currency, stablecoin, issued by the company Tether Limited. Historically, the company claimed that each coin was backed by a US dollar, but as of March 14, 2019, it has changed its backing to include loans to affiliated companies</div>
                            <div class="link-box"><a href="https://tether.to"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/ltc.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Litecoin</span>
                                <span class="author">LTC</span>
                            </div>
                            <h4><a href="blog-single.html">Litecoin is an openly licensed electronic currency, inspired by and technically similar to Bitcoin.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden"> Litecoin can run on the same "mining" software as bitcoin. Each Litecoin is divided into one hundred million smaller units, defined by eight decimal places.Litecoin is a powerful, political and economic tool that anyone, anywhere, can use without permission to transact with anyone in the world and participate in a truly global economy.</div>
                            <div class="link-box"><a href="https://litecoin.com/en/"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/bnb.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Binance coin</span>
                                <span class="author">BNB</span>
                            </div>
                            <h4><a href="blog-single.html">The cryptocurrency deployed by the company that runs the virtual currency exchange platform Binance</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">The BNB is a crypto-currency created by Binance.
                            	It has several concrete use cases:
                            	<ul>
                            		<li>You can use it to pay transaction fees on Binance;</li>
                            		<li>It is used in token sales hosted on Binance Launchpad;</li>
                            		<li>More and more sellers are accepting it as a means of payment;</li>
                            		<li>It will soon be used for the operation of the future decentralised exchange platform of Binance;</li>
                            	</ul>
                            </div>
                            <div class="link-box"><a href="https://www.binance.com/EN/buy-BNB"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/xrp.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Ripple</span>
                                <span class="author">XRP</span>
                            </div>
                            <h4><a href="blog-single.html">It is the native digital asset of the XRP ledger, a decentralised, permissionless and open source blockchain technology</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">RippleNet makes it easier than ever to run a successful payments business.

								With the most advanced blockchain technology for global payments, financial institutions are able to expand into new markets around the world and even eliminate pre-funding by leveraging the power of XRP with RippleNet's on demand liquidity service.

								Together with our clients, we are building a more inclusive financial system where more people and SMEs have access to better financial services.</div>
                            <div class="link-box"><a href="https://www.ripple.com"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/ada.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Cardano</span>
                                <span class="author">ADA</span>
                            </div>
                            <h4><a href="blog-single.html">Cardano is a proof-of-stake blockchain platform that aims to enable "solution-makers, innovators and visionaries" to drive positive global change.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden;">Cardano is a blockchain platform for change-makers, innovators and visionaries, with the tools and technologies to create opportunities for the many, as well as the few, and bring about positive global change.</div>
                            <div class="link-box"><a href="https://cardano.org"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/xlm.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Stellar</span>
                                <span class="author">XLM</span>
                            </div>
                            <h4><a href="blog-single.html">The Stellar is an open network for moving and storing money.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden"><p>This network was created to be ENee to access, and most importantly, easily usable for all income levels and with low transaction costs (0.00001 stellar per transaction). Through their intermediate currency, lumens (XLM), a user can send any currency (fiat currency and cryptocurrency) to another person who may have a different currency. This currency is a centralised currency and does cross-platform transactions and micro-transactions like Ripple (payment protocol), another crypto-currency that is also centralised. It is also a payment technology that aims to link financial institutions together and significantly reduce the cost and time for cross-border transfers.</p></div>
                            <div class="link-box"><a href="https://www.stellar.org"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/doge.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Dogecoin</span>
                                <span class="author">DOGE</span>
                            </div>
                            <h4><a href="blog-single.html">The creators of Dogecoin envision it as a fun, lightweight cryptocurrency that could prove very attractive to Bitcoin's target audience, given that it is based on the dog meme</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">Dogecoin is a crypto-currency with an image of the Shiba Inu dog ENom the "Doge" meme as its logo. Introduced as a joke on 6 December 2013, Dogecoin quickly developed its own online community and reached a capitalisation of $60 million in January 2014.</div>
                            <div class="link-box"><a href="https://dogecoin.com"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>



                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/iota.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Miota</span>
                                <span class="author">IOTA</span>
                            </div>
                            <h4><a href="blog-single.html">IOTA's Tangle is an open, sensation-ENee, scalable distributed ledger designed to enable ENictionless data and value transfer.</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden"><p>IOTA is an experimental cryptocurrency and open-source protocol that aims to provide a secure means of payment for the monetisation of data between so-called Internet of Things devices.</p></div>
                            <div class="link-box"><a href="https://www.stellar.org"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>


                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/tron.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Tron</span>
                                <span class="author">TRX</span>
                            </div>
                            <h4><a href="blog-single.html">TRON is a blockchain-based operating system that aims to make this technology suitable for everyday use</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">TRON is a decentralised Blockchain-based operating system based on a system-native crypto-currency known as TRX</div>
                            <div class="link-box"><a href="https://tron.network"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" id="detail"><a href="blog-single.html"><img src="<?php echo base_url(); ?>assets/images/resource/tron.png" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">Others</span>
                                <span class="author">Others</span>
                            </div>
                            <h4><a href="blog-single.html">TRON is a blockchain-based operating system that aims to make this technology suitable for everyday use</a></h4>
                            <div class="text" style="height: 200px;overflow-y: scroll;overflow-x: hidden">TRON is a decentralised Blockchain-based operating system based on a system-native crypto-currency known as TRX</div>
                            <div class="link-box"><a href="https://tron.network"><span class="fa fa-angle-right"></span>Learn more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section -->

     <!-- Main Footer -->
    <div class="main-footer style-two">    
        <div class="anim-icons">
            <span class="icon icon-twist-line-1 wow zoomIn"></span>
            <span class="icon icon-circle-6 wow zoomIn" data-wow-delay="400ms"></span>
            <span class="icon icon-twist-line-2 wow zoomIn" data-wow-delay="800ms"></span>
            <span class="icon icon-circle-8 wow zoomIn" data-wow-delay="1200ms"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Get The Latest Offers</span>
                <h2>Subscribe To Newsletter</h2>
            </div>

            <!--Newsletter Form-->
            <div class="newsletter-form">
                <form method="post" action="<?php echo base_url(); ?>EN/Unex/comingSoon">
                    <div class="form-group">
                        <input type="email" name="field-name" value="" placeholder="email@gmail.com" required>
                        <button type="submit" class="theme-btn btn-style-three">Send</button>
                    </div>
                </form>
            </div>

            <!-- Social Links -->
            <div class="social-links">
                <ul>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
            </div>

            <!-- Footer Bottom -->
                <!-- <div class="copyright footer-nav" align="center"> -->
                <div class="social-links" align="center">
                    <ul>
                        <li><a href="<?php echo base_url('assets/docs/Website-Terms-Conditions.pdf') ?>"  style="color: #12114a;" target="_blank" id="copyright">Terms & Conditions</a></li>
                        <li>|</li>
                        <li><a href="<?php echo base_url('assets/docs/Website-Privacy-Policy.pdf') ?>"  style="color: #12114a;" target="_blank" id="copyright">Privacy Policy</a></li>
                        <li>|</li>
                        <li><a href="<?php echo base_url('assets/docs/Cookie-UNEX.pdf') ?>"  style="color: #12114a;" target="_blank" id="copyright">Cookies</a></li>
                    </ul> 
                </div>
            <p align="center" id="copyright">Copyright © Unex 2021. All Rights Reserved.</p>

            <p align="center">All content on the site, such as text, graphics, logos, button icons and images ("Content"), all software on these site, as well as the design, composition, selection, arrangement, and presentation of all materials on the site are the property of Equity MG LTD (Company number <a href="https://find-and-update.company-information.service.gov.uk/company/12277150" target="_blank"> <u> 12277150 </u></a>) or its content suppliers and is protected by applicable copyright laws. Except for the limited right to use the site set forth in these Terms of Use, all rights are reserved.</p>
            <!-- Copyright -->
        </div>
    </div>
    <!-- End Footer -->
    

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/magnific-popup.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/appear.js') ?>"></script>
<script src="<?php echo base_url('assets/js/owl.js') ?>"></script>
<script src="<?php echo base_url('assets/js/wow.js') ?>"></script>
<script src="<?php echo base_url('assets/js/countdown.js') ?>"></script>
<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
<script src="<?php echo base_url('assets/js/cookies.js') ?>"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="<?php echo base_url('assets/js/map-script.js') ?>"></script>
<!--End Google Map APi-->

<!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/waypoints/jquery.waypoints.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/counterup/counterup.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>
</html>