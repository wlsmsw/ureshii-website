<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Ure-Shii - Best Quality. Lead Time. Low Cost">
        <meta name="author" content="Ure-Shii Technologies, Inc.">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url('assets/img/ureshii-favicon.png')?>" type="image/x-icon">
        <link rel="icon" href="<?=base_url('assets/img/ureshii-favicon.png')?>" type="image/x-icon">

        <link href="<?=base_url('assets/css/tagsinput.css')?>" rel="stylesheet">
        <link href="<?=base_url('assets/css/cookie.css')?>" rel="stylesheet">

        <title>Ure-Shii Technologies Inc.</title>

        <!-- font family -->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/aos.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/animate.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/hover.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/navik.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/stylesheet.css')?>">

        <link rel="stylesheet" href="<?=base_url('assets/css/homeslider-custom.css')?>">

    </head>
    <body>
        <div class="trigger"><a href="#menu-desk"><span></span></a></div>

        <div class="navik-header header-opacity header-shadow viewport-lg">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="navik-header-container">
                          
                            <div class="logo" data-mobile-logo="<?=base_url('assets/img/ureshii-logo.png')?>" data-sticky-logo="<?=base_url('assets/img/ureshii-logo.png')?>">
                                <a href="<?=base_url()?>"><img src="<?=base_url('assets/img/ureshii-logo.png')?>" alt="logo"/></a>
                            </div>

                            <div class="burger-menu">
                                <div class="line-menu line-half first-line"></div>
                                <div class="line-menu"></div>
                                <div class="line-menu line-half last-line"></div>
                            </div>

                            <nav class="navik-menu menu-caret submenu-top-border submenu-scale">
                                <ul>
                                    <li class="<?=($page == 'About') ? 'active' : ''?>">
                                        <a class="" href="<?=base_url('about')?>">About</a>
                                    </li>
                                    <li class="<?=($page == 'Products') ? 'active' : ''?>">
                                        <a class="" href="<?=base_url('products')?>">Products</a>
                                    </li>
                                    <li class="<?=($page == 'Solutions') ? 'active' : ''?>">
                                        <a class="" href="#">Solutions</a>
                                    </li>
                                    <li class="<?=($page == 'Careers') ? 'active' : ''?>">
                                        <a class="" href="<?=base_url('careers')?>">Careers</a>
                                    </li>
                                    <li class="<?=($page == 'News') ? 'active' : ''?>">
                                        <a class="" href="<?=base_url('news')?>">News</a>
                                    </li>
                                    <li class="<?=($page == 'Contact Us') ? 'active' : ''?>">
                                        <a class="" href="<?=base_url('contact-us')?>">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="wf-banner">
            <div class="banner-content" >
                   <div class="carousel">
                        <div class="list">
                            <div class="item">
                                <img src="<?=base_url('assets/img/homepage/product1.jpg')?>">
                                <div class="content">
                                    <div class="topic">CHEMICALS</div>
                                    <div class="des">Acids, Plating, Solvent</div>
                                    <div class="buttons">
                                        <a href="<?=base_url('products/chemicals')?>">VIEW MORE</a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="item">
                                <img src="<?=base_url('assets/img/homepage/product2.jpg')?>">
                                <div class="content">
                                    <div class="topic">CLEANROOM CONSUMABLES</div>
                                    <div class="des">Gloves, Shoes, Tapes</div>
                                    <div class="buttons">
                                        <a href="<?=base_url('products/cleanroom-consumables')?>">VIEW MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?=base_url('assets/img/homepage/product3.jpg')?>">
                                <div class="content">
                                    <div class="topic">FACEMASKS</div>
                                    <div class="des">4-ply Carbon Facemask</div>
                                    <div class="buttons">
                                        <a href="<?=base_url('products/facemasks')?>">VIEW MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?=base_url('assets/img/homepage/product4.jpg')?>">
                                <div class="content">
                                    <div class="topic">SEMICONDUCTOR PRODUCTS / SERVICES </div>
                                    <div class="des">Inspection and Measuring Instruments</div>
                                    <div class="des">Machine Shop and Standard Equipment</div>
                                    <div class="buttons">
                                        <a href="<?=base_url('products/sub/semiconductor-products-and-services')?>">VIEW MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="thumbnail">
                            
                            
                            <div class="item">
                                <img src="<?=base_url('assets/img/homepage/product1.jpg')?>">
                            </div>
                            <div class="item">
                                <img src="<?=base_url('assets/img/homepage/product2.jpg')?>">
                            </div>
                            <div class="item">
                                <img src="<?=base_url('assets/img/homepage/product3.jpg')?>">
                            </div>
                            <div class="item">
                                <img src="<?=base_url('assets/img/homepage/product4.jpg')?>">
                            </div>
                            
                        </div>

                        <div class="arrows">
                            <button id="prev"><</button>
                            <button id="next">></button>
                        </div>

                        <div class="time"></div>
                   </div>  
            </div>
        </div>
        
        

        <section id="wf-features">
            <div class="container">
                <div class="justify-content-md-center row">
                    <div class="col-md-9">
                        <div class="features-content">
                            <h2 data-aos="fade-up" class="aos-init aos-animate">Who we are?</h2>

                            <p data-aos="fade-up" class="aos-init aos-animate"><strong>Ure-shii Technologies Incorporated</strong> was established by March 26, 2008 as Cleanroom /ESD Consumables, Tooling and Fabrication Supplier for Semiconductors, Electronics, medical devices, food processing and pharmaceutical companies.<br/></br/>

                            As a result of the diversification during the period, we are presently dealing in other Electronics / Semiconductor–products such as cutting tools, Test Sockets, System Spare Parts and other products that are indispensable in an information-dependent society.<br/></br/>

                            Our Policy, moreover, is to create a Global perspective as a solution provider responding to the needs of our customer with<br/>
                            <strong>BEST QUALITY, LEAD TIME AND LOW COST</strong></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section id="wf-services">
            <div class="container">
                <div class="justify-content-md-center row">
                    <div class="col-md-9">
                        <div class="service-content">
                            <h2 data-aos="fade-up" class="aos-init aos-animate">Products</h2>
                        </div>
                    </div>

                <div class="clearfix">&nbsp;</div>

                <div class="row"> 
                    
                    <div class="col-md-6">
                        <a href="<?=base_url('products/chemicals')?>" title="Chemicals" />
                            <div class="service-item aos-init aos-animate" data-aos="fade-down">
                                <img src="<?=base_url('assets/img/homepage/prodcard1.jpg')?>">
                                <div class="prodcard"><h3>CHEMICALS</h3></div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="<?=base_url('products/cleanroom-consumables')?>" title="Cleanroom Consumables" />
                            <div class="service-item aos-init aos-animate" data-aos="fade-down">
                                <img src="<?=base_url('assets/img/homepage/prodcard2.jpg')?>">
                                <div class="prodcard"><h3>CLEANROOM CONSUMABLES</h3></div>
                            </div>
                        </a>
                    </div>

                
                </div>

                 <div class="row"> 
                    
                    <div class="col-md-6">
                        <a href="<?=base_url('products/facemasks')?>" title="Facemasks" />
                            <div class="service-item aos-init aos-animate" data-aos="fade-down">
                                <img src="<?=base_url('assets/img/homepage/prodcard3.jpg')?>">
                                <div class="prodcard"><h3>FACEMASKS</h3></div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="<?=base_url('products/semiconductor-products-and-services')?>" title="Semiconductor Products and Services" />
                            <div class="service-item aos-init aos-animate" data-aos="fade-down">
                                <img src="<?=base_url('assets/img/homepage/prodcard4.jpg')?>">
                                <div class="prodcard"><h3>SEMICONDUCTOR PRODUCTS</h3></div>
                            </div>
                        </a>
                    </div>

                
                </div>

                <div class="clearfix">&nbsp;</div>
                </div>
            </div>
        </section>


        <section id="wf-clients">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="clients-title">
                            <h2 data-aos="fade-up" class="aos-init aos-animate">Companies we&#39;ve worked with</h2>

                            <div class="clients-slider" data-aos="fade-down">
                                <div class="citem">
                                    <img src="<?=base_url('assets/img/company-logos/company1.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company2.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company3.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company4.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company5.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company6.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company7.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company8.jfif')?>" /> 
                                </div>

                                <div class="citem">
                                    <img src="<?=base_url('assets/img/company-logos/company9.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company10.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company11.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company12.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company13.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company14.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company15.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company16.jfif')?>" /> 
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <div id="wf-footer">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="footer-contact">
                            <h2>Contact us</h2>

                            <p><strong>Our Office</strong><br />
                            5th St., Blk 7 Lot 6, Golden Mile Business Park, Brgy. Maduya, Carmona, Cavite</p>

                            <p><strong>Telephone</strong><br />
                            +63 (46) 482-0731<br />
                            +63 (46) 404-8025<br />
                            +63 (46) 482-0742<br />
                            +63 (46) 404-5071<br />

                            <p><strong>E-mail</strong><br />
                            Sales: <a href="mailto:sales@ureshii-tech.com">sales@ureshii-tech.com</a><br />
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="footer-sitemap">
                            <h2>About Us</h2>

                            <ul>
                              <li><a href="<?=base_url('about')?>">Corporate Milestones</a></li>
                            </ul>

                            <h2>Products</h2>

                            <ul>
                              <li><a href="<?=base_url('products/chemicals')?>"/>Chemicals</a></li>
                              <li><a href="<?=base_url('products/cleanroom-consumables')?>"/>Cleanroom Consumables</a></li>
                              <li><a href="<?=base_url('products/facemasks')?>"/>Facemasks</a></li>
                              <li><a href="<?=base_url('products/sub/semiconductor-products-and-services')?>"/>Semiconductor Products and Services</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="footer-follow">
                            <h2>Social Media</h2>
                            
                            <p>Follow us on our social media accounts</p>
                            
                            <ul>
                              <li><a href="#" target="_blank"><span class="fa fa-facebook"></span></a></li>
                              <li><a href="#" target="_blank"><span class="fa fa-twitter"></span></a></li>
                              <li><a href="#" target="_blank"><span class="fa fa-instagram"></span></a></li>
                              <li><a href="#" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                              <li><a href="#" target="_blank"><span class="fa fa-youtube"></span></a></li>
                            </ul>
                            
                            
                       
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-follow">
                            <div class="logos">
                                <p><img alt="" src="<?=base_url('assets/img/footer-img1.png')?>">
                                </p>
                                <p><img alt="" src="<?=base_url('assets/img/footer-img2.png')?>">
                                </p>
                                <p><img alt="" src="<?=base_url('assets/img/footer-img3.png')?>">
                                </p>
                            </div>
                           
                        </div>
                    </div>

                    <div class="clearfix">&nbsp;</div>
                </div>
            </div>
        </div>


        <div id="wf-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright-content">
                            <ul>
                              <li><a href="news.php">News</a></li>
                              <li><a href="contact-us.php">Contact Us</a></li>
                              <li><a href="<?=base_url('cookie-policy')?>">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="copyright-content">
                            <p>&copy; Ure-Shii Technologies, Inc. | 2025 All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--scripts-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="https://cdn.plyr.io/2.0.15/plyr.js"></script>

        <script type="text/javascript" src="<?=base_url('assets/js/jquery-1.11.3.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/script.js')?>"></script>

        <script src="<?=base_url('assets/js/navik.menu.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/owl.carousel.js')?>"></script>

        <script type="text/javascript" src="<?=base_url('assets/js/aos.js')?>"></script>

        <script type="text/javascript" src="<?=base_url('assets/js/homeslider-custom.js')?>"></script>

        <script> AOS.init(); </script>


        <!--privacy notice-->
        <div class="privacy-notice" id="ns-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-9">
                        <p><strong>Privacy & Cookie Policy</strong></p>
                        <p>By continuing to browse our site, you are agreeing to our Privacy Policy and Terms of Use.
                    &nbsp;<a href="<?=base_url('cookie-policy')?>"><span class="underlined-text">Read more</span></a></p>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <div class="privacy-button">
                            <button class="btn btn-danger btn-sm" onclick="ns_hide()">Agree</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.privacy-notice').slideDown(500);
            });

            $(".privacy-notice button").click(function () {
                $(".privacy-notice").slideUp(500);
                $( "div#js-header" ).animate({
                  top: "0",
                }, 500, function() {
                // Animation complete.
                });
            });

            function ns_hide() {
                var date = new Date()
                document.cookie = "cookie_policy=true; Max-Age=50400; path=/";
            }

            function ns_show(){
                var isClicked = document.cookie.replace(/(?:(?:^|.*;\s*)cookie_policy\s*\=\s*([^;]*).*$)|^.*$/, "$1");
                if(isClicked==""){ isClicked = false; }else{ isClicked = true; }
                return isClicked;
            }

            $(document).ready(function(){
                if(ns_show()){
                  document.getElementById("ns-box").style.display = "none";
                }
            });
        </script>

    </body>
</html>