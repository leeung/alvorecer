<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body class="bg-cinza">
      <div class="header">
          <nav class="navbar navbar-default">
                <div class="container ">
                        <p class="text-center">Para doações <img class="" src="<?php echo get_template_directory_uri()?>/img/wa-icon.png"> 85 9-8585-8585
                        </p>
                    
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                        <a class="navbar-brand" href="#">
                             <img class="icone-logo" alt="Brand" src="<?php echo get_template_directory_uri()?>/img/logo.png">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <?php 
                            $args = array(
                                'menu'=>'MenuPrincipal',
                                'menu_class' =>'nav navbar-nav',
                                'container'=>''
                            );
                            wp_nav_menu($args); 
                          ?>
                        <!--<form class="navbar-form navbar-right">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Pesquisa">
                            </div>
                            <button type="button" class="btn btn-default" aria-label="Left Align">
                              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </form> -->
                    </div>
              </div>
          </nav>
      </div>
    
    <div class="container-fluid bg-magento">
        <div class="slideshow-principal bg-yellow">
            <div class="barra-topo-slideshow bg-laranja"></div>
            <?php dynamic_sidebar( 'wg_slidePrincipal' ); ?>
        </div>
    </div>
