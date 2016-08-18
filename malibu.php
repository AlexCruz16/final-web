<?php
  require('conexion.php');
  
  $query="SELECT *  FROM tabla_productos";

  $resultado=$mysqli->query($query);
  
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Malibu Rum</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
    <link href="css/animatedtext.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Malibu Rum</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#bebidas">Nuestras Bebidas</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#comprar">Dónde Comprar</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
  <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/slide1.jpg');"></div>
                <div class="carousel-caption">
                     <section class="cd-intro">
                        <h1 class="cd-headline letters type">
                            <span>Malibu</span> 
                            <span class="cd-words-wrapper waiting">
                                <b class="is-visible">Original</b>
                                <b>Black</b>
                                <b>Red</b>
                            </span>
                        </h1>
                    </section> <!-- cd-intro -->
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Bebidas Section -->
    <section class="productos" id="bebidas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Nuestras Bebidas</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row"><br><br>

                    <?php while($row=$resultado->fetch_assoc()){ ?>
                      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <a href="productos.php?id=<?php echo $row['id_prod'];?>">
                        <div class="thumbnail">
                          <img src="productos/<?php echo $row['imagen'];?>">
                          <div class="caption">
                            <h3 class="tituloImagen text-center"><?php echo $row['nombre'];?></h3>
                          </div>
                        </div>
                      </a>
                      </div>
                    <?php } ?>
                               
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- Donde Comprar Section -->
    <section class="donde" id="comprar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Dónde Comprar</h2>
                    <hr class="star-primary">
                    <div id="map"></div>
                </div>
            </div>          
            </div>
            </div>          
        </div>
    </section>

    <!-- Contacto Section -->
    <section  class="contact" id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Escríbenos</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row"><br><br>
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" action="contacto-validate.php" method="POST">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="nombre" required data-validation-required-message="Please enter your name." name="nombre">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address." name="email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Mensaje" id="mensaje" required data-validation-required-message="Please enter a message." name="mensaje"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Roma</h2>
                            <hr class="star-primary"> 
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="embed-responsive embed-responsive-4by3">
                                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1rxXmjTvFoIjQlUMkGgbAfN3Rugo" width="640" height="480"></iframe>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p>Descripción</p>
                                </div>
                            </div> <br><br>                         
                            <button type="button" class="btn btn-default2" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <img src="img/coco.png" class="img-responsive center-block">
                    </div>
                    <div class="footer-col col-md-4">
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                    
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <img src="img/coco.png" class="img-responsive center-block">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Malibu&copy; 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/yearnumber.js"></script>
     <script src="js/freelancer.js"></script>
     <script src="js/main.js"></script>
     <script src="js/grayscale.js"></script>
     <script src="js/map.js"></script>

     <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSaa74ovAj3EFSVM7Zkapr-NQ1tgjaTuA&signed_in=true&callback=initMap"></script>
  </body>
</html>