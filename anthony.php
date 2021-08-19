<?php
$firstname = "Uchechukwu";
$lastname = "Nwachukwu";
$middlename ="Anthony";
$name = $firstname.' '.$middlename.' '.$lastname
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
                
                <!-- =========================================
                   Work experiences
                ==========================================-->

                <section class="col s12 m12 l10 section">
                    <div class="row">
                        <div class="section-wrapper z-depth-1">                            
                            
                            <div class="custom-content col s12 m12 l12 wow fadeIn a1" data-wow-delay="0.1s">
                            <h2> Hello, my name is <?php echo $name?> and it's nice to meet you.</h2>
                                </div>
                                
                            </div>      
                      
                        </div>

                        <!-- ========================================
                         Education 
                        ==========================================-->

                        
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

                        <button type="button" class="btn btn-warning"><a href="index.php">Back to Homepage</a> </button>

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
