<?php ?>

<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Viseo Digital</title>
        <!--Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@600&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!--Style Sheet (Figma)-->
        <link rel="stylesheet" href="./styles.css">
    </head>
    <body>
        <div class="container">
            <!--Header -->
            <div style="padding-top:10px; padding-bottom:10%;" class= "testHeader container-fluid">
                    <nav class="navbar">
                        <div>
                            <div class="navbar-header">
                                <div style="padding-top:10px;" ><a class="logo" href="#">Viseo Digital</a></div>
                            </div>

                            <!-- <button class="navbar-toggler" style="float:right;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button> -->

                            <ul id="navbarSupportedContent15" style="float:right" class="collapse navbar-collapse navbar-header nav navbar-nav">
                            <li class="active_page nav_items"><a href="#">Home</a></li>
                            <li class="nav_items"><a href="#AboutUs">About Us</a></li>
                            <li class="nav_items"><a href="#services">Services</a></li>
                            <li class="nav_items"><a href="#testimonials">Projects</a></li>
                            <li class="nav_items"><a href="#reachout">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div style="padding-top: 10%;" class="col_one">
                        <p id="headerimgs" class="ingenious_text">INGENIOUS DESIGN & DEVELOPMENT</p>
                        <!-- <img id="headerimgs" style="margin-left: 13%; padding-top:10%; max-width:100%" class="aboutusbutton" src="./about_us_button.png"> -->
                        <button style="padding:5%;margin: 13%; max-width:100%" class="aboutusbutton"><a href="#AboutUs">About Us</a></button>
                    </div>

                    <div style="padding-top:10%;" class="col_two">
                            <img style="max-width:100%;" class="laptopImg" src="./img_laptop.png">
                    </div>
                    <!-- <div style="height:200px;"></div> -->
            </div>
            <!--/ Header -->

            <!--ABOUT US-->
            <div style="padding-bottom:10%;" id="AboutUs">
                <img class="about_us_img" src="./about_us_img.png">
                <div class="col_two">
                    <img style="max-width:100%;" class="aboutustextcontainer" src="./about_us_text.png">
                    <p class="aboutustext aboutustextcontainer">We are a design & development studio with our teams in Canada and India. <span style="color:#4BD8F9;">Viseo Digital</span> is a our platform to showcase our skills to impact the design and development domains.</p>
                </div>
                <!-- <div style="height:200px; width:100%;"></div> -->
                
                
            </div>
            <!-- <div style="height:10px; width:100%; background-color:#F4F4F4;"></div> -->
            <!--/ABOUT US-->


            <!--Services-->
            <div id="services" class="servicesbackground">
                <div class="servicesheader" style="">
                    <img style="max-width:50%;" src="./services/services_header.png"/>
                </div>
                <!-- BOX 1 -->
                <div style="background-color: #F4F4F4;" class="col_one">
                    <div class="col_one" id="box1">
                        <div id="box1img" class="box_img">
                            <img id="box1reg" style="margin-top:60%;max-width:100%;" src="./services/box1.png">
                            <img id="box1hover" style="margin-top:60%;max-width:100%;" src="./services/box1_hover.png">
                        </div>
                        <div class="container2">
                            <div class="grey_text">
                                <p>FUNCTIONALITY FOCUSED</p>
                            </div>
                            <div class="heading">
                                <p id="hoverpurple">Design</p>
                            </div>
                            <div class="main_text">
                                <p>We focus on crafting design that just doesn’t look good, but also creates an impact.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /BOX 1 -->

                <!-- BOX 2 -->
                <div style="background-color: #F4F4F4;" class="col_two">
                    <div class="col_two" id="box2">
                        <div class="box_img">
                            <img id="box2reg" style="margin-top:60%;max-width:100%;" src="./services/box2.png">
                            <img id="box2hover" style="margin-top:60%;max-width:100%;" src="./services/box2_hover.png">
                        </div>
                        <div class="container2">
                            <div class="grey_text">
                                <p>BUILT FOR STABILITY</p>
                            </div>
                            <div class="heading">
                                <p id="hoverpurple">Development</p>
                            </div>
                            <div class="main_text">
                                <p>We use the best of available tech to ensure maximum stability and long-term functionality.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /BOX 2 -->


                <!-- BOX 3 -->
                <div style="background-color: #F4F4F4;padding-bottom:5%;" class="col_one">
                    <div class="col_one" id="box3">
                        <div class="box_img">
                            <img id="box3reg" style="margin-top:60%;max-width:100%;" src="./services/box3.png">
                            <img id="box3hover" style="margin-top:60%;max-width:100%;" src="./services/box3_hover.png">
                        </div>
                        <div class="container2">
                            <div class="grey_text">
                                <p>ENHANCED PRESENCE</p>
                            </div>
                            <div class="heading">
                                <p id="hoverpurple">SEO</p>
                            </div>
                            <div class="main_text">
                                <p>We also offer search engine optimization services to help boost your digital presence.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /BOX 3 -->


                <!-- BOX 4 -->
                <div style="background-color: #F4F4F4; padding-bottom:5%;" class="col_two">
                    <div class="col_two" id="box4">
                        <div class="box_img">
                            <img id="box4reg" style="margin-top:60%;max-width:100%;" src="./services/box4.png">
                            <img id="box4hover" style="margin-top:60%;max-width:100%;" src="./services/box4_hover.png">
                        </div>
                        <div class="container2">
                            <div class="grey_text">
                                <p>RESULTS ORIENTED</p>
                            </div>
                            <div class="heading">
                                <p id="hoverpurple">Free Consultation</p>
                            </div>
                            <div class="main_text">
                                <p>We offer free consultation to diagnose & identify the best possible solution.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /BOX 4 -->
                <!-- <div style="height:200px;"></div> -->
            </div>
            <!--/Services-->


            <!--Products-->
            <div class="products_background">
                
                <div class="img1 col_one">
                    <img style="width:100%;height:auto;max-width:100%;" src="./products/img1.png">
                </div>
                <div class="col_two products_header">
                    <img style="float:left;max-width:100%;" src="./products/header.png">
                    <p class="products_text">We have extensive experience working on various projects ranging from portfolios to corporate identities & web designs.</p>
                </div>
                
                <div class="img2 col_one">
                    <img style="width:100%;height:auto;max-width:100%;" src="./products/img3.png">
                    <!-- <div style="margin-top:-15%;z-index:-1;"class="greyspacev2"></div> -->
                </div>
                <div class="col_two">
                    <img style="width:90%;padding-left:10%;max-width:100%;" src="./products/img4.png">
                    <!-- <div class="greyspacev2"></div> -->
                    
                </div>
                <!-- <div class="greyspacev2"></div> -->
            </div>
            <!--/Products-->


            <!--Testimonials-->
            <div style="" id="testimonials">
                <img style="max-width:50%;float:left;clear:left;padding-left:5%;padding-top: 5%;padding-bottom: 5%;" src="./testimonials/testimonials_header.png">
                <div style="width:45%;" class="col_one card1">
                    <div class="innercontainer">
                        <div style="width:25%;height:100%;float:left;">
                            <img id="q_reg" style="max-width:100%;margin: 0 auto;vertical-align:center;padding-top:60%;" src="./testimonials/quotations.png">
                            <img id="q_hover" style="max-width:100%;margin: 0 auto;vertical-align:center;padding-top:60%;" src="./testimonials/quotations_hover.png">
                        </div>
                        <div style="width:75%;float:right;">
                            <div class="grey_text_testimonial">
                                <p>www.carvilleautosales.com</p>
                            </div>
                            <div class="heading_testimonial">
                                <p>John from Carville Auto</p>
                            </div>
                            <div class="main_text_testimonial">
                                <p>Velox Digital’s quick response towards an issue on my website is commendable. Highly recommend them!<p></p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_two card2">
                    <div class="innercontainer">
                        <div style="width:25%;height:100%;float:left;">
                            <img id="q_reg" style="max-width:100%;margin: 0 auto;vertical-align:center;padding-top:60%;" src="./testimonials/quotations.png">
                            <img id="q_hover" style="max-width:100%;margin: 0 auto;vertical-align:center;padding-top:60%;" src="./testimonials/quotations_hover.png">
                        </div>
                        <div style="width:75%;float:right;">
                            <div class="grey_text_testimonial">
                                <p>www.carvilleautosales.com</p>
                            </div>
                            <div class="heading_testimonial">
                                <p>John from Carville Auto</p>
                            </div>
                            <div class="main_text_testimonial">
                                <p>Velox Digital’s quick response towards an issue on my website is commendable. Highly recommend them!<p></p></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TrustPilot button-->
                <div class="trustpilot">
                    <button id="trustpilot_button" style="border: 1px solid #131B23;padding: 2.5%;"type="button">SEE MORE ON TRUSTPILOT</button>
                </div>
            </div>
            <!--/Testimonials-->



            <!--ReachOut-->
            <div style="padding-bottom:10%;" id="reachout">
                <div class="col_one">
                    <img style="max-width:100%;" src="./reach_out_text.png">
                    <p class="reach_out_question">Ready to upgrade your digital presence? Let’s get in touch.</p>
                    <p class="reach_out_main_text">We don’t need much information to start with, just tell us what you’re trying to achieve and we’ll figure out what’ll work best for you.</p>
                </div>
                <div class="col_two">
                    <form style="padding-left:10%;margin-top:25%;padding-right:5%;" action="https://formspree.io/xgenvypy" method="POST">
                        <div>
                            <input style="width:40%;padding:5%;margin-right:10%;" type="text" placeholder="Your Name" name="name">
                            <input style="width:45%;padding:5%;" type="email" placeholder="Your Email" name="_replyto">
                        </div>
                        <textarea style="padding:5%;position:relative;width:100%;margin-top:5%;" placeholder="Your Message" name="message"></textarea>
                        <button class="reachoutbutton" style="padding:5%;background: #2A1468;float:right;margin-top:10%;" type="submit">Send Message</button>
                    </form>                   
                </div>
                <!-- <div style="sheight:200px;"></div> -->
            </div>
            <!--/ReachOut-->

            <!--Footer-->
            <div>
                <div id="mainfooter">
                    <div class="getintouch">
                        <div>
                            <img style="max-width:100%;" src="./footer_img1.png">
                        </div>
                        <div style="float:left; padding-top:5%;">
                            <span style="width:50%; float:left;"><i class="fa fa-phone fa-2x" aria-hidden="true"><span class="number">+1 (517) 419 297</span></i></span>
                            <span style="width:50%; float:right;padding-left:1%;"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"><span class="email">hello@veloxdigital.co</span></i></span>
                        </div>
                    </div>
                    <div class="social_media">
                        <div>
                            <img style="max-width:100%;" src="./footer_img2.png">
                        </div>
                        <div style="float:left; padding-top:5%; width:100%;">
                            <!-- <i class="fa social_icons fa fa-facebook fa-3x" aria-hidden="true"></i> -->
                            <img style="padding-right:5%;max-width:100%;" src="./facebook 1.png">
                            <img style="padding-right:5%;max-width:100%;" src="./instagram 1.png">
                            <img style="max-width:100%;" src="./linkedin 1.png">
                        </div>
                    </div>
                </div>
                <div id="sidepurple"></div>
                
            </div>
            
            <div class="copyright_footer">
                <p class="copyright">Copyright Velox Digital - All Rights Reserved.</p>
            </div>
            <!--/Footer-->
        
        </div>
    </body>
</html>
