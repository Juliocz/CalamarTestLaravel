
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>Calamar home</title>
        
        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		
        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="<?php echo e(asset('homeres/css/font-awesome.min.css')); ?>">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo e(asset('homeres/css/bootstrap.min.css')); ?>">
        <!-- Fancybox -->
        <link rel="stylesheet" href="<?php echo e(asset('homeres/css/jquery.fancybox.css')); ?>">
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo e(asset('homeres/css/owl.carousel.css')); ?>">
        <!-- Animate -->
        <link rel="stylesheet" href="<?php echo e(asset('homeres/css/animate.css')); ?>">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo e(asset('homeres/css/main.css')); ?>">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="<?php echo e(asset('homeres/css/responsive.css')); ?>">
		
		
		<!-- Modernizer Script for old Browsers -->
        <script src="<?php echo e(asset('homeres/js/vendor/modernizr-2.6.2.min.js')); ?>"></script>
		
    </head>
	
    <body>

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="#body">
                            <img src="<?php echo e(asset('img/iconhome.png')); ?>" alt="Kasper Logo" height="50px">
                        </a>
                    </h1>
                    <!-- /logo -->

                    </div>

                    <!-- main nav -->
                    <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                        <ul id="nav" class="nav navbar-nav">
                            <li class="current"><a href="#home">Inicio</a></li>
                            <li><a href="<?php echo e(Route('grupos')); ?>">Ver grupos</a></li>
                            <li><a href="<?php echo e(Route('modificarjugador')); ?>">Modificar</a></li>
                            <li><a href="#consultar">Consultar jugador</a></li>
                            <li><a href="<?php echo e(Route('registrarjugador')); ?>">Registrar jugador</a></li>
                       
                        </ul>
                    </nav>
                    <!-- /main nav -->
                </div>

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->


        <!--
        Home Slider
        ==================================== -->
        <section id="home">     
            <div id="home-carousel" class="carousel slide" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-carousel" data-slide-to="1"></li>
                    <li data-target="#home-carousel" data-slide-to="2"></li>
                </ol>
                <!--/.carousel-indicators-->

                <div class="carousel-inner">

                    <div class="item active"  style="background-image: url(<?php echo e(asset('homeres/img/slider/bg2.jpg')); ?>)">
                        <div class="carousel-caption">
                            <div class="animated bounceInRight">
                                <h2>Bienvenido al juego <br>¿Unirte?</h2>
                                <p>Squid Game, El Juego del calamar en España, es una serie drama de suspense que sigue la historia de cientos de personas que aceptas una extraña invitación para jugar a un juego para niños. Pero una vez dentro, no sabían que cada juego tiene su precio: la de su vida..</p>
                            </div>
                        </div>
                    </div>              


                    <div class="item"  style="background-image: url(<?php echo e(asset('homeres/img/slider/bg1.jpg')); ?>)">
                        <div class="carousel-caption">
                            <div class="animated bounceInRight">
                                <h2>¿PREPARADO?<br></h2>
                                <p>Squid Game, El Juego del calamar en España, es una serie drama de suspense que sigue la historia de cientos de personas que aceptas una extraña invitación para jugar a un juego para niños. Pero una vez dentro, no sabían que cada juego tiene su precio: la de su vida..</p>
                            </div>
                        </div>
                    </div> 
                    <div class="item"  style="background-image: url(<?php echo e(asset('homeres/img/slider/bg1.jpg')); ?>)">
                        <div class="carousel-caption">
                            <div class="animated bounceInRight">
                                <h2>¿Listo?<br></h2>
                                <p>Squid Game, El Juego del calamar en España, es una serie drama de suspense que sigue la historia de cientos de personas que aceptas una extraña invitación para jugar a un juego para niños. Pero una vez dentro, no sabían que cada juego tiene su precio: la de su vida..</p>
                            </div>
                        </div>
                    </div> 
                    
                    
                </div>
                <!--/.carousel-inner-->
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a class="sl-next" href="#home-carousel" data-slide="next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>

            </div>
        </section>
        <!--
        End #home Slider
        ========================== -->

        
        <!--
        #service
        ========================== -->
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown">
                            <h2>Ultimos jugadores registrados: </h2>    
                            <p>En el juego del calamar aceptamos jugadores competentes, espero que no te arrepientas...</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php $__currentLoopData = $jugadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jugador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <?php if($loop->index%2==0): ?>
                    <div class="col-md-6 col-sm-12 wow fadeInLeft">
                    <?php else: ?> <div class="col-md-6 col-sm-12 wow fadeInRight">
                    <?php endif; ?>
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img src="<?php echo e(asset('img/perfil.jpg')); ?>" with="75px" height="75px"class="media-object" alt="Monitor">
                            </a>
                            <div class="media-body">
                                <h3><?php echo e($jugador->nombre); ?></h3>
                                <p>Apellido: <?php echo e($jugador->apellido); ?></p>
                                <p>Edad: <?php echo e($jugador->edad); ?></p>
                            </div>
                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </section>
        <!--
        End #service
        ========================== -->

        

       

        <!--
        #about
        ========================== -->
        <section id="about">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInUp">
                        <h2>Acerca de</h2>    
                        <p>En el juego del calamar, no puedes echarte atras, visitanos para poder ver este nuevo proyecto.</p>
                    </div>
                    
                    <div class="about-us text-center wow fadeInDown">
                        <img src="img/about.png" alt="About Us" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #about
        ========================== -->
        

        <!--
        #count
        ========================== -->
        <!--
        End #count
        ========================== -->

        <!--
        #about-us
        ========================== -->

        <!--
        End #about-us
        ========================== -->

        <!--
        #quotes
        ========================== -->
        <section id="quotes">
            <div class="container" id="consultar">
                <div class="row wow zoomIn">
                    <div class="col-lg-12">
                        <div class="call-to-action text-center">
                            <p>Consultar jugador</p>
                            <span>Ingrese nombre y apeliidos: </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #quotes
        ========================== -->

        <!--
        #pricing
        ========================== -->

        <!--
        End #pricing
        ========================== -->


        <!--
        #subscribe
        ========================== -->
        <section id="subscribe">
            <div class="container">
                <div class="row">

                    <div class="col-md-7 wow fadeInLeft">
                        <form action="<?php echo e(route('jugadorinfo')); ?>" method="post" class="subscription-form">
                            <?php echo csrf_field(); ?>
                            <!-- <i class="fa fa-envelope-o fa-lg"></i> -->
                            <input type="text" name="nombre" class="subscribe" placeholder="Nombre" required="">
                            <input type="text" name="apellido" class="subscribe" placeholder="Apellido" required="">
                            <input type="submit" value="Consultar jugador" id="mail-submit">
                        </form>
                    </div>

                    <div class="col-md-4 text-left wow fadeInRight">
                        <p>Verifica en que grupo te pertenece. Si estas habilitado y detalles</p>
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #subscribe
        ========================== -->


        <!--
        #contact
        ========================== -->
        <section id="contact">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInDown">
                        <h2>Contact Us</h2>
                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                    </div>
                    
                    <div class="col-md-8 col-sm-9 wow fadeInLeft">
                        <div class="contact-form clearfix">
                            <form action="index.html" method="post">
                                <div class="input-field">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                                </div>
                                <div class="input-field">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                </div>
                                <div class="input-field message">
                                    <textarea name="message" class="form-control" placeholder="Your Message" required=""></textarea>
                                </div>
                                <input type="submit" class="btn btn-blue pull-right" value="SEND MESSAGE" id="msg-submit">
                            </form>
                        </div> <!-- end .contact-form -->
                    </div> <!-- .col-md-8 -->

                    <div class="col-md-4 col-sm-3 wow fadeInRight">
                        <div class="contact-details">
                            <span>GET IN TOUCH</span>
                            <p>+00 123.456.789 <br> <br> +00 123.456.789</p>
                        </div> <!-- end .contact-details -->

                        <div class="contact-details">
                            <span>GET IN TOUCH</span>
                            <p>+00 123.456.789 <br> <br> +00 123.456.789</p>
                        </div> <!-- end .contact-details -->
                    </div> <!-- .col-md-4 -->

                </div>
            </div>
        </section>
        <!--
        End #contact
        ========================== -->

        <!--
        #footer
        ========================== -->
        <footer id="footer" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="footer-logo wow fadeInDown">
                            <img src="<?php echo e(asset('img/iconhome.png')); ?>" height="50px" alt="logo">
                        </div>

                        <div class="footer-social wow fadeInUp">
                            <h3>Redes sociales</h3>
                            <ul class="text-center list-inline">
                                <li><a href="http://goo.gl/RqhEjP"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/hUfpSB"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/r4xzR4"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/k9zAy5"><i class="fa fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>

                        <div class="copyright">
                           
                            <p>Theme by <a href="http://graphberry.com">GraphBerry.com</a> Developed by <a target="_blank" href="http://www.themefisher.com">Themefisher</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!--
        End #footer
        ========================== -->


        <!--
        JavaScripts
        ========================== -->
        
        <!-- main jQuery -->
        <script src="<?php echo e(asset('homeres/js/vendor/jquery-1.11.1.min.js')); ?>"></script>
        <!-- Bootstrap -->
        <script src="<?php echo e(asset('homeres/js/bootstrap.min.js')); ?>"></script>
        <!-- jquery.nav -->
        <script src="<?php echo e(asset('homeres/js/jquery.nav.js')); ?>"></script>
        <!-- Portfolio Filtering -->
        <script src="<?php echo e(asset('homeres/js/jquery.mixitup.min.js')); ?>"></script>
        <!-- Fancybox -->
        <script src="<?php echo e(asset('homeres/js/jquery.fancybox.pack.js')); ?>"></script>
        <!-- Parallax sections -->
        <script src="<?php echo e(asset('homeres/js/jquery.parallax-1.1.3.js')); ?>"></script>
        <!-- jQuery Appear -->
        <script src="<?php echo e(asset('homeres/js/jquery.appear.js')); ?>"></script>
        <!-- countTo -->
        <script src="<?php echo e(asset('homeres/js/jquery-countTo.js')); ?>"></script>
        <!-- owl carousel -->
        <script src="<?php echo e(asset('homeres/js/owl.carousel.min.js')); ?>"></script>
        <!-- WOW script -->
        <script src="<?php echo e(asset('homeres/js/wow.min.js')); ?>"></script>
        <!-- theme custom scripts -->
        <script src="<?php echo e(asset('homeres/js/main.js')); ?>"></script>
    </body>
</html>
<?php /**PATH E:\Users\Julio\Documents\LaravelProjects\calamar\resources\views/home.blade.php ENDPATH**/ ?>