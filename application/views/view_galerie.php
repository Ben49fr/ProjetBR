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

  <!-- GOOGLE WEB FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,700,600,300,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.7";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- NAVIGATION -->
    <nav class="fixed-top-gallery" id="navigation">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 center">
                    <!-- LOGO -->
                    <a class="brand pull-left" href="./">
                        <img src="<?=base_url()?>Public/assets/images/logo_nav_br.png" alt="BRPhotographie">
                    </a>
                    <!-- END LOGO -->

                    <!-- MOBILE MENU BUTTON -->
                    <div class="mobile-menu" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <!-- END MOBILE MENU BUTTON -->

                    <!-- MAIN MENU -->
                    <ul id="main-menu" class="nav-collapse collapse">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="#page-contact">Contactez moi !</a></li>
                    </ul>
                    <!-- END MAIN MENU -->

                    <!-- SOCIAL ICONS -->
                    <div class="social-icons hover-big pull-right">
                        <!--a href="#" class="sicon-facebook"><i>Facebook</i></a-->
                        <a href="https://www.instagram.com/br_photographie/" target="_blank" class="sicon-instagram"><i>Instagram</i></a>
                        <a href="https://www.linkedin.com/in/benjamin-rauturier-6b324896?trk=nav_responsive_tab_profile_pic" target="_blank" class="sicon-linkedin"><i>LinkedIn</i></a>
                        <!--a href="#" class="sicon-youtube"><i>Youtube</i></a>
                        <a href="#" class="sicon-pinterest"><i>Pinterest</i></a-->
                    </div>
                    <!-- END SOCIAL ICONS -->
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION -->

    <!-- PAGE | GALERIE -->
    <div class="pages page-work" id="page-work">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Galerie</h4>
                <h1><?=$gallery->name?></h1>
                <!-- Short desciption about Work in general -->
                <div class="row">
                    <div class="span8 offset2">
                        <p><?=$gallery->shortDescription?></p>
                    </div>
                </div>
            </header>
            <!-- End Header -->

            <!-- Article -->
            <article>
                <ul class="thumbnails plugin-filter-elements portfolio-items">
                    <?php foreach ($pictures as $key => $picture) { ?>
                        <li class="span4 mix photography illustration mix_all" style="display:block; opacity:1;">
                            <a href="#picture/<?=$picture->id?>.html" data-destination="portfolio-items" data-insert="before">
                                <img src="<?=$picture->getLink()?>" alt="">
                                <div class="portfolio-overlay">
                                    <h4>Visualiser la photo</h4>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </article>
            <!-- End Article -->
        </div>
    </div>
    <!-- END PAGE | GALERIE -->

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
            <img src="<?=base_url()?>Public/assets/images/pages/contact/background_contact.jpg" alt="BRPhotographie">
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
    <script src="assets/js/application/application.min.js" type="text/javascript"></script>


    <!-- GOOGLE ANALYTICS -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44061294-1', 'gridelicious.net');
        ga('send', 'pageview');
    </script>
</body>
</html>
