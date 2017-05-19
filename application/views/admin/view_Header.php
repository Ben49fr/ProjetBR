<html>
 <head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="description" content="Treble theme - One Page Responsive Theme - Gridelicious.net">
    <title>BR Photographie</title>

    <link rel="shortcut icon" href="<?=base_url()?>Public/assets/images/ico/br.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="<?=base_url()?>Public/assets/admin/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?=base_url()?>Public/assets/admin/css/style.css" type="text/css" />
    <script type="text/javascript" src="<?=base_url()?>Public/assets/admin/js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="<?=base_url()?>Public/assets/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>Public/assets/admin/js/dashboard.js"></script>

    <!-- GOOGLE WEB FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,700,600,300,800' rel='stylesheet' type='text/css'>

    <div class="container" role="main">
    <!-- affichage des messages -->
    <?php if(isset($array_message)) : ?>
    <div class="alert alert-<?= $array_message['type'] ?>"><?= $array_message['text'] ?></div>
    <?php endif; ?>

</head>
<body>
    <!-- NAVIGATION -->
    <nav id="navigationm">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 center">
                    <!-- MAIN MENU -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="brand pull-left logoadmin" href="./">
                                <img src="<?=base_url()?>Public/assets/images/logo_nav_br.png">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li><a href="<?=base_url()?>admin/galeries"">Liste des galleries<span class="sr-only">(current)</span></a></li>
                            <li><a href="<?=base_url()?>admin/galeries/ajouter">Ajouter une gallerie</a></li>
                            <li><a href="<?=base_url()?>admin/actualites">Actualités</a></li>
                          </ul>
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?=base_url()?>admin/dashboard/deconnexion"">Déconnexion</a></li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                    <!-- END MAIN MENU -->
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION -->
