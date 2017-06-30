<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                    <li><jdoc:include type="modules" name="position-1" /></li>
                   <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>-->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- NAVBAR -->

    <!-- SLIDER CAROUSEL -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url(https://source.unsplash.com/category/nature/weekly);">
                <div class="carousel-caption">
                    <h3>Slide 1 lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc felis, viverra vitae risus ac, tempor scelerisque enim.
                       Duis ultrices ligula vel est fermentum tincidunt.
                       Morbi augue justo, gravida quis elementum in, laoreet in lorem. Morbi mollis vel lectus eu venenatis. </p>
                </div>
            </div>
            <div class="item" style="background-image: url(https://source.unsplash.com/category/buildings);">
                <div class="carousel-caption">
                    <h3>Slide 2 lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc felis, viverra vitae risus ac, tempor scelerisque enim.
                        Duis ultrices ligula vel est fermentum tincidunt.
                        Morbi augue justo, gravida quis elementum in, laoreet in lorem. Morbi mollis vel lectus eu venenatis. </p>
                </div>
            </div>
            <div class="item" style="background-image: url(https://source.unsplash.com/category/food);">
                <div class="carousel-caption">
                    <h3>Slide 2 lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc felis, viverra vitae risus ac, tempor scelerisque enim.
                        Duis ultrices ligula vel est fermentum tincidunt.
                        Morbi augue justo, gravida quis elementum in, laoreet in lorem. Morbi mollis vel lectus eu venenatis. </p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- SLIDER CARUSEL -->




<jdoc:include type="modules" name="top" />
    <div class="container">
        <div class="row">
            <div class=" col-md-9">
                <jdoc:include type="component" />
            </div>
            <div class=" col-md-3 col-md-push-3" id="modules">
                <!--<jdoc:include type="modules" name="position-8" />-->
            </div>
        </div>
    </div>

    <div id="footerWrap" class="voffset5">
        <footer class="container">
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce justo metus</p>
        </footer>
    </div>

    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
</body>
</html>