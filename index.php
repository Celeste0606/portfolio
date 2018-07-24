<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Celeste Nunez | Web Designer & Web Developer</title>
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/site.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <script>
        
        if (window.history.replaceState){
            window.history.replaceState (null, null, window.location.href);
        
        }
        
    </script>
    
    </head>
    <body>

    <div class="loader">
        <div class="loader__figure"></div>
    </div>
    <!-- ./ Loader -->

    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="assets/images/logo-black.png" alt="logo">
            </a>
            <ul class="nav navbar-nav">
                <li>
                    <a href="#Experience">Experience</a>
                </li>
                <li>
                    <a href="#Skills">Skills</a>
                </li>
                <li>
                    <a href="#Services">Services</a>
                </li>
                <!--<li>
                    <a href="#Pricing">Pricing</a>
                </li>-->
                <li>
                    <a href="#Portfolio">Portfolio</a>
                </li>
                <li>
                    <a href="#References">References</a>
                </li>
                <!--<li>
                    <a href="#Blog">Blog</a>
                </li>-->
                <li>
                    <a href="#Contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ./ Navbar -->

    <section class="hero hero-full-height overlay darken-2" data-image-src="assets/images/header-image.jpg">

        <!--
        <div class="hero-video">
            <video autoplay="" loop="">
                <source src="assets/media/video.mp4" type="video/mp4">
            </video>
        </div>
        -->

        <!--
        <div class="hero-slide">
            <div class="item" style="background: url(assets/images/portfolio-one.jpg)"></div>
            <div class="item" style="background: url(assets/images/portfolio-two.jpg)"></div>
        </div>
        -->

        <div class="container">
            <img src="assets/images/headshot2.jpg" alt="...">
            <h2 style="margin: 0 auto;">Hello! I'm a <span data-string='["Web Designer", "Web Developer", "Seo Consultant"]' class="typed-js text-primary"></span></h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <p style="margin: 0 auto;margin-bottom: 16px;margin-top: 3px;">Design | Develop | Maintain</p>
                </div>
            </div>
            <ul>
                <li>
                    <a href="assets/pdf/Celeste_Nunez-042018.pdf" target="_blank" class="btn"><i class="md-download m-r-10"></i>Download</a>
                </li>
                <li>
                    <a href="#contact" class="btn btn-outline">Contact me</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- ./ Hero -->


    <!-- <section id="About">
        <div class="container">
            <div class="row about card">
                <div class="col-sm-5 about-photo">
                    <img src="assets/images/avatar.jpg" alt="">
                </div>
                <div class="col-sm-7 about-body">
                    <h3>I'm <span class="text-primary">John Doe</span></h3>
                    <p>Web Design and Software Developer</p>
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="table">
                                <li>
                                    <span><strong>Age</strong></span>
                                    <span>19</span>
                                </li>
                                <li>
                                    <span><strong>Address</strong></span>
                                    <span>1234 Street, W3 Island</span>
                                </li>
                                <li>
                                    <span><strong>Email</strong></span>
                                    <span>contact@domain.com</span>
                                </li>
                                <li>
                                    <span><strong>Phone</strong></span>
                                    <span>+0123 456 789</span>
                                </li>
                                <li>
                                    <span><strong>Website</strong></span>
                                    <span>
                                        <a href="#">http://www.envato.com</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="social-buttons">
                        <li><a class="facebook" href=""><i class="md-facebook"></i></a></li>
                        <li><a class="twitter" href=""><i class="md-twitter"></i></a></li>
                        <li><a class="google" href=""><i class="md-google"></i></a></li>
                        <li><a class="skype" href=""><i class="md-skype"></i></a></li>
                        <li><a class="linkedin" href=""><i class="md-linkedin"></i></a></li>
                        <li><a class="flickr" href=""><i class="md-flickr"></i></a></li>
                        <li><a class="whatsapp" href=""><i class="md-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ./ About -->

    <section class="bg-white">
        <div class="container">
            <div class="row">
                <!--<div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <h3>
                            <span class="animate-number" data-number="547">1</span>
                        </h3>
                        <div class="counter-title">Happy Customer</div>
                    </div>
                </div>-->
                <!--<div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <h3>
                            <span class="animate-number" data-number="5894">1</span>
                        </h3>
                        <div class="counter-title">Delivered job</div>
                    </div>
                </div>-->
                <!--<div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <h3>
                            <span class="animate-number" data-number="58142">1</span>
                        </h3>
                        <div class="counter-title">Good Reviews</div>
                    </div>
                </div>-->
                <div class="col-md-12 col-sm-6">
                    <div class="counter">
                        <h3>
                            <span class="animate-number" data-number="7">1</span>
                        </h3>
                        <div class="counter-title">Years of Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ Counter -->

    <section id="Experience">
        <div class="container">
            <header class="section-header">
                <h4>My experience</h4>
            </header>
            <div class="timeline">
                <div class="timeline-item">
                    <div data-effect="fadeInLeft" class="timeline-item-body card">
                        <h6 class="timeline-item-date">May 2017 - Present</h6>
                        <h6 class="timeline-item-date">Jan 2010 - June 2015</h6>
                        <div class="timeline-item-title">Freelance Full-Stack Web Developer</div>
                        <p>Responsible for designing, developing, testing, implementing, and maintaining web-based application systems, such as user interface, e-commerce applications, site animation. I would troubleshoot and solve the software related issues. Researches technical problems and suggest improvements for my client(s) web applications. I would analyze and integrate new web products / technologies to the existing web application and improve the web design and application functionality. I have knowledge of multiple commonly-used web developing languages like CSS, HTML, Javascript, jQuery, PHP, Ruby, etc.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div data-effect="fadeInRight" class="timeline-item-body card">
                        <h6 class="timeline-item-date">June 2015 - May 2017</h6>
                        <div class="timeline-item-title">Programmer / Technical Support Contractor</div>
                        <p>Front-end / UI development, ongoing website general maintenance, web server management and maintenance, assisted with new technology research and recommendations and implementation of new products and tools.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div data-effect="fadeInLeft" class="timeline-item-body card">
                        <h6 class="timeline-item-date"> 2012 - 2016</h6>
                        <div class="timeline-item-title">Bachelors of Science in Web Design and Development</div>
                        <p>Focused on knowledge and understanding needed to integrate and deploy modern websites and web applications. Used industry-standard tools, including modern client-side and server-side languages, relational and non-relational database structures, and frameworks used in modern web stacks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ Experience -->

    <!--
    <section id="Skills">
        <div class="container">
            <header class="section-header">
                <h4>My talents</h4>
            </header>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-3 progress progress-vertical visible">
                        <div class="progress-text">Php<span>45%</span></div>
                        <div class="progress-item">
                            <div class="progress-bar" data-level="45" style="height: 45%;"></div>
                        </div>
                    </div>
                    <div class="col-md-3 progress progress-vertical visible">
                        <div class="progress-text">HTML5<span>80%</span></div>
                        <div class="progress-item">
                            <div class="progress-bar" data-level="80" style="height: 80%;"></div>
                        </div>
                    </div>
                    <div class="col-md-3 progress progress-vertical visible">
                        <div class="progress-text">CSS3<span>95%</span></div>
                        <div class="progress-item">
                            <div class="progress-bar" data-level="95" style="height: 95%;"></div>
                        </div>
                    </div>
                    <div class="col-md-3 progress progress-vertical visible">
                        <div class="progress-text">Javascript<span>65%</span></div>
                        <div class="progress-item">
                            <div class="progress-bar" data-level="65" style="height: 65%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, eu his alia vide persequeris, sed in quis verear habemus, duo omnium rationibus no.Lorem ipsum dolor sit amet, eu his alia vide persequeris, sed in quis verear habemus, duo omnium rationibus no.</p>
                    <p>Lorem ipsum dolor sit amet, eu his alia vide persequeris, sed in quis verear habemus, duo omnium rationibus no.Lorem ipsum dolor sit amet, eu his alia vide persequeris, sed in quis verear habemus, duo omnium rationibus no.Lorem ipsum dolor sit amet, eu his alia vide persequeris, sed in quis verear habemus, duo omnium rationibus no.</p>
                </div>
            </div>
        </div>
    </section>
    -->

   <!-- <section id="Skills" class="bg-white p-b-60">
        <div class="container">
            <header class="section-header">
                <h4>My talents</h4>
                <p>My skills as of now</p>
            </header>
            <div class="row">
                <div class="col-sm-6">
                    <div class="progress">
                        <div class="progress-text">Web Design<span>45%</span></div>
                        <div class="progress-item">
                            <div class="progress-bar" data-level="45"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-text">Seo Optimization<span>80%</span></div>
                        <div class="progress-item">
                            <div class="progress-bar" data-level="80"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-text">Advertising Works<span>65%</span></div>
                        <div class="progress-item">
                            <div class="progress-bar" data-level="65"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="progress">
                        <div class="progress-text">Graphic Design<span>80%</span></div>
                        <div class="progress-item">
                            <div class="progress-bar" data-level="80"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-text">Social Media<span>95%</span></div>
                        <div class="progress-item">
                            <div class="progress-bar" data-level="95"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-text">Software<span>65%</span></div>
                        <div class="progress-item">
                            <div class="progress-bar" data-level="65"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ Skills -->

    <section id="Services">
        <div class="container">
            <header class="section-header">
                <h4>Skills</h4>
            </header>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service">
                        <i class="md-roller icon circle-icon"></i>
                        <h5>Web Design</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service">
                        <i class="md-landscape icon circle-icon"></i>
                        <h5>Web Development</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div data-delay="200" class="service">
                        <i class="md-graduation-cap icon circle-icon"></i>
                        <h5>Seo Optimization</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div data-delay="400" class="service">
                        <i class="md-layers icon circle-icon"></i>
                        <h5>Website Maintainance</h5>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ./ Services -->

    <!--
    <section id="Pricing" class="section-price">
        <div class="container">
            <header class="section-header">
                <h4>Price table</h4>
            </header>
            <div class="row">
                <div class="col-md-4">
                    <div class="price-box visible">
                        <header class="price-box-header">
                            <div class="title">Starter</div>
                            <div class="price">
                                <p>Per Month</p>
                                <span>Free</span>
                                <p>Ad posse doctus deterruisset usu, eam nostro albucius ea.</p>
                            </div>
                        </header>
                        <div class="price-box-body">
                            <ul>
                                <li>First time consultation</li>
                                <li>Dental cleaning</li>
                                <li>Filling 1 surface</li>
                                <li>
                                    <del>Surgical extraction</del>
                                </li>
                                <li>
                                    <del>Parcial resin (1–3 teeth)</del>
                                </li>
                                <li>
                                    <del>Apicectomy</del>
                                </li>
                            </ul>
                            <a href="#" class="btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box visible">
                        <header class="price-box-header">
                            <div class="title">Basic</div>
                            <div class="price">
                                <p>Per Month</p>
                                <span>$99</span>
                                <p>Ad posse doctus deterruisset usu, eam nostro albucius ea.</p>
                            </div>
                        </header>
                        <div class="price-box-body">
                            <ul>
                                <li>First time consultation</li>
                                <li>Dental cleaning</li>
                                <li>Filling 1 surface</li>
                                <li>Surgical extraction</li>
                                <li>Parcial resin (1–3 teeth)</li>
                                <li>
                                    <del>Apicectomy</del>
                                </li>
                            </ul>
                            <a href="#" class="btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box visible">
                        <header class="price-box-header">
                            <div class="title">Premium</div>
                            <div class="price">
                                <p>Per Month</p>
                                <span>$399</span>
                                <p>Ad posse doctus deterruisset usu, eam nostro albucius ea.</p>
                            </div>
                        </header>
                        <div class="price-box-body">
                            <ul>
                                <li>First time consultation</li>
                                <li>Dental cleaning</li>
                                <li>Filling 1 surface</li>
                                <li>Surgical extraction</li>
                                <li>Parcial resin (1–3 teeth)</li>
                                <li>Apicectomy</li>
                            </ul>
                            <a href="#" class="btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

   <!-- <section id="Pricing" class="bg-white section-price">
        <div class="container">
            <header class="section-header">
                <h4>Price table</h4>
                <p>Choose one that suits you</p>
            </header>
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-md-3 col-sm-4 price-box price-box-2 p-0 hidden-xs hidden-sm">
                        <header class="price-box-header"></header>
                        <div class="price-box-body">
                            <ul>
                                <li>First time consultation</li>
                                <li>Dental cleaning</li>
                                <li>Filling 1 surface</li>
                                <li>Surgical extraction</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 price-box price-box-2 p-0">
                        <header class="price-box-header">
                            <div class="title">Starter</div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </header>
                        <div class="price-box-body">
                            <ul>
                                <li>
                                    <div class="check-mark"></div>
                                    <p class="visible-xs visible-sm">First time consultation</p>
                                </li>
                                <li>
                                    <div class="cross-mark"></div>
                                    <p class="visible-xs visible-sm">Dental cleaning</p>
                                </li>
                                <li>
                                    <div class="cross-mark"></div>
                                    <p class="visible-xs visible-sm">Filling 1 surface</p>
                                </li>
                                <li>
                                    <div class="cross-mark"></div>
                                    <p class="visible-xs visible-sm">Surgical extraction</p>
                                </li>
                            </ul>
                            <a href="#" class="btn">Start Now</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 price-box price-box-2 p-0">
                        <header class="price-box-header">
                            <div class="title">Basic</div>
                            <div class="price">
                                <span><sup>$</sup>139</span>
                            </div>
                        </header>
                        <div class="price-box-body">
                            <ul>
                                <li>
                                    <div class="check-mark"></div>
                                    <p class="visible-xs visible-sm">First time consultation</p>
                                </li>
                                <li>
                                    <div class="check-mark"></div>
                                    <p class="visible-xs visible-sm">Dental cleaning</p>
                                </li>
                                <li>
                                    <div class="cross-mark"></div>
                                    <p class="visible-xs visible-sm">Filling 1 surface</p>
                                </li>
                                <li>
                                    <div class="cross-mark"></div>
                                    <p class="visible-xs visible-sm">Surgical extraction</p>
                                </li>
                            </ul>
                            <a href="#" class="btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 price-box price-box-2 p-0">
                        <header class="price-box-header">
                            <div class="title">Premium</div>
                            <div class="price">
                                <span><sup>$</sup>289</span>
                            </div>
                        </header>
                        <div class="price-box-body">
                            <ul>
                                <li>
                                    <div class="check-mark"></div>
                                    <p class="visible-xs visible-sm">First time consultation</p>
                                </li>
                                <li>
                                    <div class="check-mark"></div>
                                    <p class="visible-xs visible-sm">Dental cleaning</p>
                                </li>
                                <li>
                                    <div class="check-mark"></div>
                                    <p class="visible-xs visible-sm">Filling 1 surface</p>
                                </li>
                                <li>
                                    <div class="check-mark"></div>
                                    <p class="visible-xs visible-sm">Surgical extraction</p>
                                </li>
                            </ul>
                            <a href="#" class="btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ Pricing -->

    <section id="Portfolio">
        <div class="container">
            <header class="section-header">
                <h4>My work</h4>
            </header>
            <div class="portfolio">
                <nav class="portfolio-filter">
                    <ul>
                        <li>
                            <a href="#" data-filter="*">All</a>
                        </li>
                        <!--<li>
                            <a href="#" data-filter=".a">Graphic Design</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".b">Web Design</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".c">Agency</a>
                        </li>-->
                    </ul>
                </nav>
                <div class="portfolio-gallery">
                    <div class="portfolio-item a">
                        <a href="work-detail-one.html" target="_blank">
                            <div class="hover-effect">
                                <img src="assets/images/portfolio-images/portfolio-one.jpg" alt="...">
                                <div class="hover-effect-item">
                                    <h5>Miami Holistic Chiropractors</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item b">
                        <a href="work-detail-two.html" target="_blank">
                            <div class="hover-effect">
                                <img src="assets/images/portfolio-images/portfolio-two.jpg" alt="...">
                                <div class="hover-effect-item">
                                    <h5>Phil Spool - Real Estate Appraiser</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item a c">
                        <a href="work-detail-three.html" target="_blank">
                            <div class="hover-effect">
                                <img src="assets/images/portfolio-images/portfolio-three.jpg" alt="...">
                                <div class="hover-effect-item">
                                    <h5>Yatted Up</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item b">
                        <a href="work-detail-four.html" target="_blank">
                            <div class="hover-effect">
                                <img src="assets/images/portfolio-images/portfolio-four.jpg" alt="...">
                                <div class="hover-effect-item">
                                    <h5>The Veezzz</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item b">
                        <a href="work-detail-five.html" target="_blank">
                            <div class="hover-effect">
                                <img src="assets/images/portfolio-images/portfolio-five.jpg" alt="...">
                                <div class="hover-effect-item">
                                    <h5>Dario's Painting Services</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item a">
                        <a href="work-detail-six.html" target="_blank">
                            <div class="hover-effect">
                                <img src="assets/images/portfolio-images/portfolio-six.jpg" alt="...">
                                <div class="hover-effect-item">
                                    <h5>Lawn 33647</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ Portfolio -->

    <section id="References" class="bg-white">
        <div class="container">
            <header class="section-header">
                <h4>Testimonials</h4>
            </header>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="references">
                        <div>
                            <!--<img class="references-img" src="assets/images/avatar.jpg" alt="...">
                            <ul class="star">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li class="disabled"></li>
                            </ul>-->
                            <blockquote><blockquote>Celeste was a pleasure to work with. Her knowledge on web development and digital best practice, along with her professionalism and attention to detail is admirable. The digital realm is constantly changing, and Celeste is well aware of that. She keeps up to date with this ever-changing environment, which makes her a great asset to any team. We collectively worked on multiple web projects, and she was ahead of the game, presenting best options with optimal results.- <strong>Shaneeva Yassin</strong></blockquote>
                        </div>
                        <div>
                            <!--<img class="references-img" src="assets/images/avatar.jpg" alt="...">
                            <ul class="star">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li class="disabled"></li>
                                <li class="disabled"></li>
                            </ul>-->
                            <blockquote>Experience knowledge and professionalism is how I describe the work performed by Celeste. Very devoted and passionate and always going the extra mile. She pays attention to details and is very creative. I will use her services again and recommend her to anyone. - <strong>Henry Norman (Lawn33647)</strong></blockquote>
                        </div>
                        <div>
                            <!--<img class="references-img" src="assets/images/avatar.jpg" alt="...">
                            <ul class="star">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>-->
                            <blockquote>. I had the pleasure of working with Ms. Nunez for over a year in the Digital Marketing department at The Greater Miami Convention and Visitors Bureau back in 2016. Ms. Nunez not only created a workable and amazing timeline for website projects, but she also was able to go back and close out over a years worth of open intra website and server issues as well. She gives her all to each and every project she works on while also finding better and more efficient ways to manage projects. She is a very intelligent, personable, considerate and an extremely talented web designer.  It is with great confidence and pride that I recommend her to anyone who is looking for a skilled web designer that will go that extra mile for an employer or client in need. - <strong>Dinnelle Oddie</strong></blockquote>
                        </div>
                        <div>
                            <!--<img class="references-img" src="assets/images/avatar.jpg" alt="...">
                            <ul class="star">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>-->
                            <blockquote>Im very happy with Celeste's work on my website. The webpage came out very clean and appealing on the eyes. Perhaps the best part is the continuing customer service. Whenever theres a problem the webpage is quickly updated . Its great to know you are working with a real human that speaks english! - <strong>Dr. Matt Pollack (Miami Holistic Chiropractors)</strong></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ References -->

    <section class="help-block">
        <div class="container">
            <div class="help-block-body">
                <h4 class="help-block-title">Do you need support or have any questions?</h4>
                <p>Feel free to contact me and I will get back to you within 24-48 hours.</p>
            </div>
            <a href="#contact" class="btn bg-white text-grey">Contact Me</a>
        </div>
    </section>
    <!-- ./ Support -->

    <!--<section id="Blog">
        <div class="container">
            <header class="section-header">
                <h4>Latest blog</h4>
                <p>The latest news appears here</p>
            </header>
            <div class="row">
                <div class="col-sm-4">
                    <a href="blog-detail.html">
                        <div class="post card">
                            <img src="assets/images/post1.jpg" alt="...">
                            <div class="post-body">
                                <h5>New Developments in Software World</h5>
                                <ul class="list-inline">
                                    <li>
                                        <i class="md-time m-r-5"></i>34 minutes ago
                                    </li>
                                    <li>
                                        <h6>Photography</h6>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, eu eum nostrud salutandi consequuntur, suavitate effician...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="blog-detail.html">
                        <div class="post card">
                            <img src="assets/images/post2.jpg" alt="...">
                            <div class="post-body">
                                <h5>New Developments in Software World</h5>
                                <ul class="list-inline">
                                    <li>
                                        <i class="md-time m-r-5"></i>50 minutes ago
                                    </li>
                                    <li>
                                        <h6>Software</h6>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, eu eum nostrud salutandi consequuntur, suavitate effician...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="blog-detail.html">
                        <div class="post card">
                            <img src="assets/images/post3.jpg" alt="...">
                            <div class="post-body">
                                <h5>New Developments in Software World</h5>
                                <ul class="list-inline">
                                    <li>
                                        <i class="md-time m-r-5"></i>3 hours ago
                                    </li>
                                    <li>
                                        <h6>Business</h6>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, eu eum nostrud salutandi consequuntur, suavitate effician...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ Blog -->

    <!--<section id="Subscription" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <header class="section-header">
                        <h4>Subscription</h4>
                        <p>Lorem ipsum dolor sit amet, eu eum nostrud salutandi consequuntur, suavitate efficiantur te qui.</p>
                    </header>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email address" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-block">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- ./ Subscription -->

    <section class="section-map">
        <div id="map"></div>
    </section>
    <!-- ./ Map -->

    <section id="contact" class="map-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-title">Contact</div>
                        <div class="card-body">
                            <h6>
                                <i class="md-pin m-r-10"></i>New Tampa, FL
                            </h6>
                            <!--<p>10318 Venetia Real Ave. Tampa, FL 33647</p>-->
                            <ul class="simple">
                                <li><i class="md-phone m-r-10"></i> (+1) 754 317 6465</li>
                                <li><i class="md-email m-r-10"></i> ecncommunication@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('form_process.php'); ?>
    <section id="Contact" class="bg-white">
        <div class="container">
            <header class="section-header">
                <h4>Contact Me</h4>
            </header>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name" name="name" value="<?= $name ?>" tabindex="1" required>
                                    <span class="error"><?= $name_error ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email" value="<?= $email ?>" tabindex="2" required>
                            <span class="error"><?= $email_error ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?= $phone ?>" tabindex="3" required>
                            <span class="error"><?= $phone_error ?></span>
                        </div>
                        <div class="form-group">
                            <textarea rows="5" id="message" class="form-control" placeholder="Message" value="<?= $message ?>" name="message" tabindex="5"></textarea>
                        </div>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn">Submit</button>
                        <div class="success"><?= $success ?></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ Contact Us -->
    
  

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <a href="#" class="footer-logo">
                        <img src="assets/images/logo-black.png" alt="logo">
                    </a>
                    
                    <ul class="social-buttons sm">
                        <!--<li><a class="facebook" href=""><i class="md-facebook"></i></a></li>-->
                        <!--<li><a class="twitter" href=""><i class="md-twitter"></i></a></li>-->
                        <!--<li><a class="google" href=""><i class="md-google"></i></a></li>-->
                        <!--<li><a class="skype" href=""><i class="md-skype"></i></a></li>-->
                        <li><a class="linkedin" href=""><i class="md-linkedin"></i></a></li>
                        <!--<li><a class="flickr" href=""><i class="md-flickr"></i></a></li>
                        <li><a class="whatsapp" href=""><i class="md-whatsapp"></i></a></li>-->
                    </ul>
                    <span>2018 &copy; All Rights Reserved</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- ./ Footer -->

    <!-- ======= Script files ======= -->
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap-3.3.7/bootstrap.min.js"></script>
    <script src="assets/js/viewportchecker.min.js"></script>
    <script src="assets/js/slick/slick.min.js"></script>
    <script src="assets/js/animateNumber/jquery.animateNumber.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/typed.min.js"></script>
    <script src="assets/js/site.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- Google map -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1eWEaeB_NarePgjRdIpzrYcLh_RwhfU4&callback=initMap"></script>
</body>
</html>