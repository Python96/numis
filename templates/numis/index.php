<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- NAVBAR -->
    
    
    
    
    <header id="header">
						<h1><a href="#">Future Imperfect</a></h1>
						<nav class="links">
							<ul>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">Ipsum</a></li>
								<li><a href="#">Feugiat</a></li>
								<li><a href="#">Tempus</a></li>
								<li><a href="#">Adipiscing</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#" class="">
										<input type="text" name="query" placeholder="Search">
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>
    
    
    
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