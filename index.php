<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.PNG">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>AppReport</title>

  <!-- Bootstrap -->
  <link href="css1/bootstrap.min.css" rel="stylesheet">
  <link href="css1/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css1/font-awesome.min.css">
  <link href="css1/animate.min.css" rel="stylesheet">
  <link href="css1/animate.css" rel="stylesheet" />
  <link href="css1/prettyPhoto.css" rel="stylesheet">
  <link href="css1/style.css" rel="stylesheet">
  
  <!-- =======================================================
    Theme Name: OnePage
    Theme URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="row">
        <div class="site-logo">
		 <a class="brand" href="index.html"><img src="images/logo.PNG" width="90px" height="35px" alt="AppReport">  <!--<span>MIKHA</span> -->   </a>
          <a href="" class="brand">AppReport</a>
        </div>
		

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><i class="fa fa-home"></i>ACCUEIL</a></li>
            <li><a href="#about"> <i class="fa fa-edit"></i>A PROPOS</a></li>
            <li><a href="#portfolio"><!--<i class="fa fa-star-o">--></i>DETAIL</a></li>
			
            <li><a href="AccueilMembre.php"> <i class="fa fa-lock"></i>CONNEXION</a></li>
            
          </ul>
        </div>
        <!-- /.Navbar-collapse -->
      </div>
    </div>
  </nav>

  <div id="home">
    <div class="slider">
      <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="images/slide1.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="images/slide2.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="images/slide3.jpg" class="img-responsive" alt="">
            </div>
          </div>

          <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>

          <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        <!--/#carousel-slider-->
      </div>
      <!--/#about-slider-->
    </div>
  </div>

  <section id="about">
    <div class="container">
      <div class="center">
        <div class="col-md-6 col-md-offset-3">
          <h2>A PROPOS</h2>
          <hr>
          <p class="lead"></p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6 wow fadeInRight">
          <img src="images/1.jpg" class="img-responsive" />
          <p>En guise de rappel
pour la signalisation Premiere tache, prendre une photo (une seule !) du probleme, et c&nbsp;est une tache obligatoire Vous avez aussi la possibilite de decrire le materiel defectueux le plus precisement possible.(message).</p>

        </div>
        <!--/.col-sm-6-->

        <div class="col-sm-6 wow fadeInDown">
          <div class="accordion">
            <div class="panel-group" id="accordion1">
              <div class="panel panel-default">
                <div class="panel-heading active">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                      Web Design
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>

                <div id="collapseOne1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left">
                        <img class="img-responsive" src="images/accordion1.jpg">
                      </div>
                      <div class="media-body">
                        <h4></h4>
                        <p>Merci de nous signaler en temps reels le materiel defectueux</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                      Le signalement en temps reel
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseTwo1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>En guise de rappel <br>
					pour la signalisation Premiere tache, prendre
               une photo (une seule !) 
                 du probleme, et c�est
              une tache obligatoire
              Vous avez aussi la possibilite de decrire le materiel defectueux le plus precisement possible.(message).</p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                      Le signalement en temps reel
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseThree1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>En guise de rappel <br>
					pour la signalisation Premiere tache, prendre
               une photo (une seule !) 
                 du probleme, et c�est
              une tache obligatoire
              Vous avez aussi la possibilite de decrire le materiel defectueux le plus precisement possible.(message).</p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                      Le signalement en temps reel
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseFour1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>En guise de rappel <br>
					pour la signalisation Premiere tache, prendre
               une photo (une seule !) 
                 du probleme, et c�est
              une tache obligatoire
              Vous avez aussi la possibilite de decrire le materiel defectueux le plus precisement possible.(message).</p>
                  </div>
                </div>
              </div>
            </div>
            <!--/#accordion1-->
          </div>
        </div>

      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
	</section>
  <!--/#about-->

  <section id="portfolio">
  
    <div class="container">
      <div class="center">
        <div class="col-md-6 col-md-offset-3">
          <h2>DETAIL</h2>
          <hr>
          <p class="lead"></p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="col-lg-12">
        <ul class="portfolio-filter text-center">
          <li><a class="btn btn-default active" href="#" data-filter="*">Cathegorie materiels</a></li>
          <li><a class="btn btn-default" href="#" data-filter=".bootstrap">1</a></li>
          <li><a class="btn btn-default" href="#" data-filter=".html">2 </a></li>
          <li><a class="btn btn-default" href="#" data-filter=".wordpress">3</a></li>
        </ul>
        <!--/#portfolio-filter-->

        <div class="row">
          <div class="portfolio-items">
            <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item1.jpg" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Materiel theme</a></h3>
                    <p>signalement en temps reel les materiels defectueux</p>
                    <a class="preview" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                      View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item2.jpg" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Materiel theme</a></h3>
                    <p>signalement en temps reel les materiels defectueux</p>
                    <a class="preview" href="images/portfolio/full/item2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                      View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item3.jpg" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Materiel theme</a></h3>
                    <p>signalement en temps reel les materiels defectueux</p>
                    <a class="preview" href="images/portfolio/full/item3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                      View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item4.jpg" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Materiel theme</a></h3>
                    <p>signalement en temps reel les materiels defectueux</p>
                    <a class="preview" href="images/portfolio/full/item4.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                      View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item5.jpg" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Materiel theme</a></h3>
                    <p>signalement en temps reel les materiels defectueux</p>
                    <a class="preview" href="images/portfolio/full/item5.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                      View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item6.jpg" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Materiel theme</a></h3>
                    <p>signalement en temps reel les materiels defectueux</p>
                    <a class="preview" href="images/portfolio/full/item6.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                      View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item7.jpg" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Materiel theme</a></h3>
                    <p>signalement en temps reel les materiels defectueux</p>
                    <a class="preview" href="images/portfolio/full/item7.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                      View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item8.jpg" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Materiel theme</a></h3>
                    <p>signalement en temps reel les materiels defectueux</p>
                    <a class="preview" href="images/portfolio/full/item8.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                      View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#portfolio-item-->

  <section id="features">
    <div class="container">
      <div class="row">
        <div class="center">
          <div class="col-md-6 col-md-offset-3">
            <h2>Caracteristiques</h2>
            <hr>
            <p class="lead"></p>
          </div>
        </div>

        <div class="col-md-4 wow fadeInLeft">
          <h3>Materiel informatique</h3>
          <img src="images/portfolio/recent/item10.jpg" alt="">
          <p>Le materiel informatique comprend les ordinateurs
		  ainsi que d autres appareils semblables
		  et l equipement qui s y rattache. Il peut
		  s agir d ordinateurs individuels.</p>
        </div>

        <div class="col-md-4 wow fadeInUp">
          <h3>Video projecteur</h3>
          <img src="images/portfolio/recent/item11.jpg" alt="">
          <p>La gamme de videoprojecteurs 3M delivre
             des images d une tres grande qualite qui
            maintiennent l auditoire captif.
            Technologie Wifi, maintenance via le NET
            ou le reseau interne.</p>
        </div>

        <div class="col-md-4 wow fadeInRight">
          <h3>Armoire Bureau</h3>
          <img src="images/portfolio/recent/item7.jpg" alt="">
          <p>L armoire est un meuble de rangement de grande hauteur,
		    compose d une ou de deux portes battantes.
            Les portes sont generalement pleines 
		    ou recouvertes parfois d une glace.Des tiroirs completent
		    parfois le haut et le bas de l armoire.
          </p>
        </div>
      </div>
    </div>
  </section>
  
            </form>
          </div>
        </div>
        <!--/.row-->
      </div>
      <!--/.container-->
    </div>
    <!--/#contact-page-->
  </section>

  <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
            <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
          </div>
          &copy; AppReport Theme. 
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=OnePage
            -->
            Designed by <a href="https://bootstrapmade.com/"> &copy; All Rights Reserved.</a>
          </div>
        </div>

        <div class="top-bar">
          <div class="col-lg-12">
            <div class="social">
              <ul class="social-share">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/#footer-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/main.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
