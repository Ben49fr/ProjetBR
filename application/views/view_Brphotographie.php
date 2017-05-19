<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="description" content="Treble theme - One Page Responsive Theme - Gridelicious.net">
    <title>BR Photographie</title>

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>Public/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>Public/assets/images/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>Public/assets/images/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>Public/assets/images/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?=base_url()?>Public/assets/images/ico/br.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="<?=base_url()?>Public/assets/style/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?=base_url()?>Public/assets/style/style.css" type="text/css" />

    <!-- GOOGLE WEB FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,700,600,300,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- NAVIGATION -->
    <?php include ("view_header.php"); ?>
    <!-- END NAVIGATION -->

    <!-- PAGE | ACCUEIL -->
    <div class="pages white paralax page-welcome" id="page-welcome">
        <div class="overlay"></div>
        <!-- Centralized content -->
        <div class="centralized">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12 center">
                        <!-- Animated logo -->
                        <div class="logo">
                            <div class="scrollNormal">
                                <a href="#page-about">
                                    <img src="<?=base_url()?>Public/assets/images/pages/welcome/logo2_welcome.png" width="140" height="140" alt="">
                                </a>
                            </div>
                            <div class="scrollDown">
                                <a href="#page-about">
                                    <img src="<?=base_url()?>Public/assets/images/pages/welcome/logo2_welcome.png" width="140" height="140" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="line-divider" id="welcome-messages">
                            <ul class="slides">
                                <li>
                                    <h1>BR Photographie</h1>
                                </li>
                            </ul>
                        </div>
                        <p>Photographe automobile</p>
                        <div class="social-icons sicon-white bordered">
                            <!--a href="#" class="sicon-facebook"><i>Facebook</i></a-->
                            <a href="https://www.instagram.com/br_photographie/" target="_blank" class="sicon-instagram"><i>Instagram</i></a>
                            <a href="https://www.linkedin.com/in/benjamin-rauturier-6b324896?trk=nav_responsive_tab_profile_pic" target="_blank" class="sicon-linkedin"><i>LinkedIn</i></a>
                            <!--a href="#" class="sicon-youtube"><i>Youtube</i></a>
                            <a href="#" class="sicon-pinterest"><i>Pinterest</i></a-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE | ACCUEIL -->

	<!-- PAGE | GALERIE -->
    <div class="pages page-about" id="page-about">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider"><img src="<?=base_url()?>Public/assets/images/pages/welcome/logo_br.png"></h4>

                <h1>Galerie photo</h1>
				<!-- Short desciption about Work in general -->
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            TestDécouvrez à travers la galerie photo les albums des différentes manifestations automobiles réalisés par BR Photographie.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            .
                        </p>
                    </div>
                </div>
            </header>
            <!-- End Header -->

            <!-- Article -->
            <article>
                <!-- List of people and description with their contact details which are visable on hover -->
                <?php $i = 0; foreach ($galleries as $gallery) { $i++; ?>
                    <?=($i%3 == 1) ? '<ul class="thumbnails about-items">' : ''?>
                    <li class="span4 center">
                         <a class="item" href="<?=$gallery->getLink()?>">
                            <!-- Team member image -->
                            <img src="<?=$gallery->getGaleriePicture()?>">
                            <h5><?=$gallery->name?></h5>
                            <p class="smallFontBy08"><?=$gallery->shortDescription?></p>
                        </a>
                    </li>
                    <?=(($i%3 == 0) || $i == count($galleries)) ? '</ul>' : ''?>
                <?php } ?>
            </article>
            <!-- End Article -->
        </div>
    </div>
    <!-- END PAGE | GALERIE -->

    <!-- PAGE | FEATURES  -->
    <div class="pages white paralax page-features" id="page-features">
        <div class="overlay"></div>
        <div class="container">
             <!-- Header -->
            <header>

                <h1>Actualites</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            Suivez le fil d'actualité afin de connaître les photos à venir ainsi que les prochains événements où sera présent BR Photographie.
                        </p>
                    </div>
                </div>
            </header>
             <!-- End Header -->

             <!-- Article -->
            <article>
                <!-- Testemonials -->
                <div class="row-fluid">
                    <div class="span8 offset2">
                        <div class="quote center">
                            <div id="quote-slider" class="slide">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <?php foreach ($news as $key => $new) { ?>
                                        <div class="<?=($key == 0) ? 'active ' : ''?>item">
                                            <h5><?=$new->title?></h5>
                                            <?=$new->content?>
                                            <br><br>
                                        </div>
                                    <?php } ?>
                                </div>
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#quote-slider" data-slide-to="0" class="active"></li>
                                    <li data-target="#quote-slider" data-slide-to="1"></li>
                                    <li data-target="#quote-slider" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <!-- End Article -->
        </div>
    </div>
    <!-- END PAGE | FEATURES -->

    <!-- PAGE | CONTACT -->
    <div class="pages black-bg white page-contact" id="page-contact">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider"><img src="<?=base_url()?>Public/assets/images/pages/welcome/logo_br.png"></h4>
                <h1>Contactez moi !</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            Vous souhaitez me contacter, me laisser un commentaire ... </br> N'hésitez pas !
                        </p>
                    </div>
                </div>
            </header>
            <!-- End Header -->

            <!-- Start Article -->
            <article>
                <div class="row-fluid">
                    <div class="span4 offset3">
                        <h5>Réseaux Sociaux</h5>
                        <div class="social-icons sicon-white bordered">
                            <!--a href="#" class="sicon-facebook"><i>Facebook</i></a-->
                            <a href="https://www.instagram.com/br_photographie/" target="_blank" class="sicon-instagram"><i>Instagram</i></a>
                            <a href="https://www.linkedin.com/in/benjamin-rauturier-6b324896?trk=nav_responsive_tab_profile_pic" target="_blank" class="sicon-linkedin"><i>LinkedIn</i></a>
                            <!--a href="#" class="sicon-youtube"><i>Youtube</i></a>
                            <a href="#" class="sicon-pinterest"><i>Pinterest</i></a-->
                        </div>
						<div class="media">
                            <div class="media-body smallFontBy08">
                                Instagram : @br_photographie
                            </div>
                        </div>
                    </div>
                    <div class="span4 ">
                        <h5>Contact</h5>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-phone"><i>Phone</i></a>
                            </div>
                            <div class="media-body smallFontBy08">
                                06 75 19 74 04
                            </div>
                        </div>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-place"><i>Location</i></a>
                            </div>
                            <div class="media-body smallFontBy08">
                                31 rue Savary 49100 Angers FRANCE
                            </div>
                        </div>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-mail"><i>email</i></a>
                            </div>
                            <div class="media-body smallFontBy08">
                                contact@brphotographie.com
                            </div>
                        </div>
                    </div>
                    <!-- End Contact information -->
                </div>
            </article>
            <!-- End Article -->

        </div>

        <!-- Background map image -->
        <div id="map-image">
            <img src="<?=base_url()?>Public/assets/images/pages/contact/map_bck.jpg" alt="BRPhotographie">
        </div>
    </div>
    <!-- END PAGE | CONTACT -->


    <!-- JQUERY -->
    <script src="<?=base_url()?>Public/assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>


    <!-- TWITTER BOOTSTRAP -->
    <script src="<?=base_url()?>Public/assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
        <script src="assets/js/bootstrap/html5shiv.js"></script>
    <![endif]-->


    <!-- PLUGINS -->
    <script src="<?=base_url()?>Public/assets/js/plugins/jquery.bxslider.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Public/assets/js/plugins/jquery.centralized.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Public/assets/js/plugins/jquery.fixedonlater.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Public/assets/js/plugins/jquery.hashloader.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Public/assets/js/plugins/jquery.mixitup.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Public/assets/js/plugins/jquery.nav.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Public/assets/js/plugins/jquery.parallax-1.1.3.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Public/assets/js/plugins/jquery.responsivevideos.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Public/assets/js/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Public/assets/js/plugins/jquery.tweet.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>Public/assets/js/plugins/jquery.tweetCarousel.min.js" type="text/javascript"></script>


    <!-- INITIALIZE -->
    <script src="<?=base_url()?>Public/assets/js/application/application.min.js" type="text/javascript"></script>

</body>
</html>
