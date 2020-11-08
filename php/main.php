<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Breaking Blog: the breaking bad community</title>
    <style>
        @font-face {
            font-family: bad;
            src: url('../bad.otf') format('opentype');
        }
        
        .navbar-brand {
            font-family: bad;
            font-weight: 200;
        }
    </style>
    <!-- Bootstrap -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<html>

<body>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./js/scroll-animate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
	<!DOCTYPE html>
	<html lang="fr" style="background-image: url('background.jpg');">

	<head>
		<meta charset="utf-8" />
		<!--Declarationdu type d'encodage -->

		<link href="contact.css" type="text/css" rel="stylesheet" media="screen" />
		<link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/breaking-bad-2-569429.png">


		<title>Breaking Blog</title>
		<!--Titre de la page dans la fenetreou l'onglet du navigateur -->

		<div>
			<nav class="indexsub">
				<ol>
					<li class="dex"><a href="../main.html">Acceuil</a></li>
					<li class="dex"> > Fiche de contact</a></li>
				</ol>
			</nav>
		</div>


	</head>

<body style="position: relative;">


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./js/scroll-animate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<nav id="menu" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="align-items: center;">

    <link href="../css/bar.css" rel="stylesheet">
    <a class="navbar-brand" href="../main.html">Breaking Blog</a>

    <link href="../css/bootstrap.css" rel="stylesheet">
</nav>
</br>
				<div class="indexsub" style="position: relative; top: auto; left: 750px; border-radius: 20px;">
					</br>
					nom: <?php echo ($_POST['nom']); ?>

					</br>
					Adresse e-mail : <?php echo ($_POST['mail']); ?>

					</br>
					numéro de téléphone : <?php echo ($_POST['num']); ?>

					</br>

					<?php echo ($_POST['presence']); ?>
</br>
					<?php if ($_POST['yn'] != 'y') {
                        $reps = "Ce n'est votre 1ère fois sur le site";
					} else {
						$reps = "C'est votre 1ère fois sur le site";
					} ?>
					<?php echo ($reps); ?>
					</br>
					Votre demande : <?php echo ($_POST['texte']); ?>
					</br>


				</div>
				<div style="min-height: 500px;"></div>



</body>


<footer style="align-self: center;">
    Site web par Yorick geoffre groupe 8. Breaking bad AMC tous droits réservés
</footer>

	</html>