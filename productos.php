<?php
  require('conexion.php');
  
  $query="SELECT *  FROM tabla_productos";

  $resultado=$mysqli->query($query);
  
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Productos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
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
      
<body>
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
                <a class="navbar-brand" href="malibu.php#page-top">Malibu Rum</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="malibu.php#bebidas">Nuestras Bebidas</a>
                    </li>
                    <li class="page-scroll">
                        <a href="malibu.php#comprar">Dónde Comprar</a>
                    </li>
                    <li class="page-scroll">
                        <a href="malibu.php#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav> 


<!-- Producto Section -->
    <section class="productos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Bebida</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row"><br><br>
                  <?php           
                      require('connect_db.php');
                      $id=$_GET['id'];
                      $sqlw = "select * from tabla_productos where id_prod='$id'";
                      $result = mysql_query($sqlw);
                      while ($registro = mysql_fetch_array($result)){ ?>

                <div class="col-sm-6 col-md-6 col-lg-5">
                    <img src="productos/<?php echo $registro['imagen'];?>" class="img-responsive center-block">
                </div> 

                <div class="col-sm-6 col-md-6 col-lg-7">
                    <p class="text-nombre"><?php echo $registro['nombre'];?></p>
                    <p class="text-descripcion"><?php echo $registro['descripcion'];?></p>
                    <p class="text-precio"> $ <?php echo $registro['precios'];?></p>
                </div> 

                <?php }?> 

            </div>
        </div>
    </section>

   <!-- Bebidas Section -->
    <section class="productos" id="bebidas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Nuestras Bebidas</h2>
                    <hr class="star-light">
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
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/grayscale.js"></script>
  </body>
</html>