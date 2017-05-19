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
    <div class="generale">
        <div class="connexion">
            <h2>Connexion</h2>
        </div>
        <div>
            <?php if(isset($error)) {echo $error;} ?>
        </div>
        <FORM method="POST">
            <div class="login">
                <div id="log" >
                    <label for="pseudo_photographe">Login</label><br>
                    <input type="text" autofocus name="pseudo_photographe" value=""/><br>
                </div>
                <div  id="pass">
                    <label for="mot_passe_photographe">Password</label><br>
                    <input type="password" name="mot_passe_photographe" value=""/><br>
                </div>
            </div>
            <div class="bout">
                <div >
                    <INPUT type="submit" name="connexion" VALUE="Se Connecter" style="width:200">
                </div>
            </div>
        </FORM>
    </div>
</body>
</html>
