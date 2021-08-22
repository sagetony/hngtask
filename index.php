<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    if(!empty($email)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
             header("Location: page.php?email=".$email);
        }else{
            $msg = "Please put a valid email";
        }
       
    }else{
        $msg = "Field can not be empty";
    }
}

$name = "Uchechukwu Anthony Nwachukwu";
?>
<!DOCTYPE html>

<html lang="en">
    

<head>
        <meta charset="utf-8">
        
        <!-- TITLE OF SITE-->
        <title> <?php echo $name;?> </title>
        
        <!-- META TAG -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CV, Portfolio, Resume">
        <meta name="author" content="Md. Siful Islam, Desiver Web">
        
        

        <!-- ========================================
                Stylesheets
        ==========================================--> 
        
        <!-- MATERIALIZE CORE CSS -->
        <link href="assets/css/materialize.min.css" rel="stylesheet">
        

        <!-- ADDITIONAL CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">
        

        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,400italic,700italic' rel='stylesheet' type='text/css'>
        

        <!--FONTAWESOME CSS-->
        <link href="assets/icons/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
        

        <!-- CUSTOM STYLE -->
        <link href="assets/css/style.css" rel="stylesheet">
        

        <!-- RESPONSIVE CSS-->
        <link href="assets/css/responsive.css" rel="stylesheet">

        <!-- COLORS -->        
        <link rel="alternate stylesheet" href="assets/css/colors/red.css" title="red">
        <link rel="alternate stylesheet" href="assets/css/colors/purple.css" title="purple">
        <link rel="alternate stylesheet" href="assets/css/colors/orange.css" title="orange">
        <link rel="alternate stylesheet" href="assets/css/colors/green.css" title="green">
        <link rel="stylesheet" href="assets/css/colors/lime.css" title="lime">

        
        <!-- STYLE SWITCH STYLESHEET ONLY FOR DEMO -->
        <link rel="stylesheet" href="assets/css/demo.css">
        
        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif] -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <!-- Start Container-->
        <div class="container">
            <!-- row -->
            <div class="row">
            <!-- =========================================
                           SIDEBAR   
            ==========================================-->
                <!-- Start Sidebar -->
                <aside class="col l4 m12 s12 sidebar z-depth-1" id="sidebar">
                    <!--  Sidebar row -->
                    <div class="row">                      
                        <!--  top section   -->
                        <div class="heading">                            
                            <!-- ====================
                                      IMAGE   
                            ==========================-->
                            <div class="feature-img">
                                <a href="index.php"><img src="assets/images/t.jpg" class="responsive-img" alt=""></a> 
                            </div>                            
                            <!-- =========================================
                                       NAVIGATION   
                            ==========================================-->
                                                  
                            <!-- ========================================
                                       NAME AND TAGLINE
                            ==========================================-->
                            <div class="title col s12 m12 l9 right  wow fadeIn" data-wow-delay="0.1s">   
                                <h3><?php echo $name;?></h3> <!-- title name -->
                                <span>Back-end Developer</span>  <!-- tagline -->
                            </div>                         
                        </div>
                         <!-- sidebar info -->
                        
                        <!-- MOBILE NUMBER -->
                        <div class="col l12 m12 s12  mobile sidebar-item">
                            <div class="row">                                
                                <div class="col m12 s12 l3 icon">
                                    <i class="fa fa-phone"></i> <!-- icon -->
                                </div>                                
                                <div class="col m12 s12 l9 info wow fadeIn a2" data-wow-delay="0.2s" >
                                    <div class="section-item-details">
                                        <div class="personal">
                                            <h4><a href="tel:234-81-02983659">+234-81-02983659</a></h4> <!-- Number -->             
                                            <span>mobile</span> 
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>             
                        </div>
                        <!--  EMAIL -->
                        <div class="col l12 m12 s12  email sidebar-item ">
                            <div class="row">                                
                                <div class="col m12 s12 l3 icon">
                                    <i class="fa fa-envelope"></i> <!-- icon -->
                                </div>                                
                                <div class="col m12 s12 l9 info wow fadeIn a3" data-wow-delay="0.3s">
                                    <div class="section-item-details">
                                        <div class="personal">                                    
                                            <h4><a href="mailto:suchetony224@gmail.com">uchetony224@gmail.com</a></h4> <!-- Email -->
                                            <span>Personal</span> 
                                        </div>
                                       
                                    </div>
                                </div> 
                            </div>          
                        </div>
                        <!-- ADDRESS  -->
                        <div class="col l12 m12 s12  address sidebar-item ">
                            <div class="row">                                
                                <div class="col l3 m12  s12 icon">
                                    <i class="fa fa-home"></i> <!-- icon -->
                                </div>                                
                                <div class="col m12 s12 l9 info wow fadeIn a4" data-wow-delay="0.4s">
                                    <div class="section-item-details">
                                        <div class="address-details"> <!-- address  -->
                                             <h4>St Ann Catholic Church <span>  </span><br>
                                                Monac, Enugu State.<br>
                                        </div>                         
                                    </div>
                                </div>
                            </div>            
                        </div>
                        <div class="col l12 m12 s12  skills sidebar-item" >
                            <div class="row">
                                <div class="col m12 l3 s12 icon">
                                    <i class="fa fa-calendar-o"></i> <!-- icon -->
                                </div>
                                 <!-- Skills -->
                                <div class="col m12 l9 s12 skill-line a5 wow fadeIn" data-wow-delay="0.5s">
                                    <h3>Professional Skills </h3>
                                    
                                    <span>HTML</span>
                                    <div class="progress">
                                        <div class="determinate"> 95%</div>
                                    </div>
                                    
                                    <span>CSS</span>
                                    <div class="progress">
                                        <div class="determinate">90%</div>
                                    </div>

                                    <span>Laravel</span>
                                    <div class="progress">
                                        <div class="determinate">85%</div>
                                    </div>

                                    <span>PHP</span>
                                    <div class="progress">
                                        <div class="determinate">90%</div>
                                    </div>

                                    <span>SQL</span>
                                    <div class="progress">
                                        <div class="determinate">80%</div>
                                    </div>
                                    <span>Wordpress</span>
                                    <div class="progress">
                                        <div class="determinate">90%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l12 m12 s12   address sidebar-item ">
                            <div class="row">                                
                                <div class="col l3 m12  s12 icon">
                                </div>                                
                                <div class="col m12 s12 l9 info wow fadeIn a4" data-wow-delay="0.4s">
                                    <div class="section-item-details">
                                        <div class="address-details"> <!-- address  -->
                                             <h3>Please Subcribe</h3>
                                             <form action="" method="post">
                                             <?php if(isset($msg)){?>
                                            <div for="formGroupExampleInput" style="margin: 20px;color:red"><?php echo $msg;?></div>
                                            <?php }else{?>
                                        <div for="formGroupExampleInput" style="margin: 20px;">Subscribe</div>
                                                <?php }?>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label" style="color: white; font-size: 16px;">Email address</label>
                                                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                                                  </div>
                                                  
                                                  <button type="submit" class="btn btn-danger" name="submit">Submit</button>

                                             </form>
                                        </div>                         
                                    </div>
                                </div>
                            </div>            
                        </div>
                        <!-- SKILLS -->
                     
                    </div>   <!-- end row -->
                </aside><!-- end sidebar -->

                <!-- =========================================
                   Work experiences
                ==========================================-->

                <section class="col s12 m12 l8 section">
                    <div class="row">
                        <div class="section-wrapper z-depth-1">                            
                            <div class="section-icon col s12 m12 l2">
                                <i class="fa fa-suitcase"></i>
                            </div>
                            <div class="custom-content col s12 m12 l10 wow fadeIn a1" data-wow-delay="0.1s">
                                <h2>Work Experience</h2>

                                <div class="custom-content-wrapper wow fadeIn a2" data-wow-delay="0.2s">
                                    <h3>Full-stack Developer <span>@Tectarii International</span></h3>
                                    <span>JAN 2020 - MAY 2021 </span>
                                    <p>Created over 7 different project including Ecommerce, LMS system, business portfolios Blogs etc
                                     </p>
                                </div>
                                <div class="custom-content-wrapper wow fadeIn a3" data-wow-delay="0.3s">
                                    <h3>Full-stack Developer <span>@Techocraft  International</span></h3>
                                    <span>AUGUST 2020 - MAY 2021 </span>
                                    <p>Improved on some of my programming skill.
                                     </p>
                                </div>
                                
                            </div>                            
                        </div>

                        <!-- ========================================
                         Education 
                        ==========================================-->

                        <div class="section-wrapper z-depth-1">
                            <div class="section-icon col s12 m12 l2">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="custom-content col s12 m12 l10 wow fadeIn a1" data-wow-delay="0.1s" >
                                <h2>Education </h2>
                                
                                <div class="custom-content-wrapper wow fadeIn a2" data-wow-delay="0.2s" >
                                    <h3>Economics <span>@UNIVERSITY OF NIGERIA, NSUKKA</span></h3>
                                    <span>JAN 2015 - DEC 2019 </span>
                                    <p>		Class Representative overseen my classmate for the period of 4 year. </p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="section-wrapper z-depth-1">                           
                        <div class="section-icon col s12 m12 l2">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="interests col s12 m12 l10 wow fadeIn" data-wow-delay="0.1s"> 
                            <h2>Personal Project </h2>
                            <marquee behavior="" direction="">Please click on the images it will direct you to the project</marquee>
                                <ul>
                                    
                                    <li>   <a href="http://lightgates.app/" ></a>School Management System</li>
                                                                 <li>   <a href="https://itradefund.com/" ></a>Investment Website</li>

                                    <li><a href="https://www.bitnetrade.com/" ></a>Investment Website</li>
                                    <li> <a href="http://ampleyheartstonecapital.com/" ></a>Business Website</li>
                                    
                                </ul> 
                            </div>                          
                        </div>
                        <!-- ========================================
                              Intertests 
                        ==========================================-->

                        <div class="section-wrapper z-depth-1">                           
                            <div class="section-icon col s12 m12 l2">
                                <i class="fa fa-plane"></i>
                            </div>
                            <div class="interests col s12 m12 l10 wow fadeIn" data-wow-delay="0.1s"> 
                                <h2>Social Media </h2>
                                <ul> <!-- interetsr icon start -->
                                    <li><a href="https://github.com/sagetony"><i class="fa fa-github tooltipped" data-position="top" data-delay="50" data-tooltip="Github"></i></a></li>
                                    <li><a href="https://twitter.com/sagetony224"><i class="fa fa-twitter tooltipped" data-position="top" data-delay="50" data-tooltip="Twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/anthony-uche"></a><i class="fa fa-facebook-square tooltipped" data-position="top" data-delay="50" data-tooltip="Facebook"></i></li>
                                    
                                </ul> 
                            </div>                          
                        </div>
                        <!-- =======================================
                          portfolio Website
                        ==========================================-->
                        <div class="section-wrapper z-depth-1">                           
                            
                            <div class="interests col s12 m12 l10 wow fadeIn" data-wow-delay="0.1s"> 
                                
                                <ul>
                                    <li><a href="http://ingressive.org/" ><img src="zuri.jpg" alt="" width="40px" height="40px" srcset=""></a></li>
                                    <li>   <a href="http://hng.tech" ><img src="hng.jpg" width="40px" height="40px" srcset=""></a></li>
                                    <li> <a href="http://ingressive.org/" ><img src="zuri.jpg" alt="" width="40px" height="40px" srcset=""></a></li>
                                    
                                </ul> 
                            </div>                          
                        </div>

                        
                    </div><!-- end row -->
                </section><!-- end section -->
            </div> <!-- end row -->
        </div>  <!-- end container -->
        
 <!--=====================
                JavaScript
        ===================== -->
        <!-- Jquery core js-->
        <script src="assets/js/jquery.min.js"></script>
        
        <!-- materialize js-->
        <script src="assets/js/materialize.min.js"></script>
        
        <!-- wow js-->
        <script src="assets/js/wow.min.js"></script>
        
        <!-- Map api -->
        <script src="http://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        
        <!-- Masonry js-->
        <script src="assets/js/masonry.pkgd.js"></script>

        <script src="assets/js/validator.min.js"></script>
        
        <!-- Customized js -->
        <script src="assets/js/init.js"></script>
    
        <!-- =========================================================
            STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
        ===========================================================-->
        
        <!-- Style switter js -->
        <script src="assets/js/styleswitcher.js"></script>
        
      

    </body>


</html>
