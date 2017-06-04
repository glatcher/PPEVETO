<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Allo-Veto : clinique vétérinaire</title>

    <!-- Bootstrap Core CSS -->
    <link href="/veto1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/veto1/css/bootstrap.css" rel="stylesheet">

    <link href="/veto1/css/full-slider.css" rel="stylesheet">
</head>

    <!-- Bootstrap Core JavaScript -->
<body>
<script src="/veto1/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/veto1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="op-v-item"><a class="op-v-link" href="/veto1/gestion/indexv.php">Retour à l'index</a></li>
 </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="container">
<section id="profil">        
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                </br></br>
                <h1>Modifier un tarif</h1>
<?php
	#include'../utilities/secure.php';
	session_start();
	include'../utilities/connect_db.php';
	$_SESSION['url'] =$_SERVER['REQUEST_URI'];	
	$_SESSION['nums'] = $_GET['nums'];

    //RECUPERE LES INFOS DE CE QUI DOIT ETRE CHANGE

	$infos=array();
				$sql = $db ->query('SELECT soins.commentaires, soins.prixms
								FROM soins
								WHERE nums='.$_SESSION['nums'].'');
				while($data=$sql->fetch())
				{
					$info[]=$data;
				}

				foreach($info as $infos)
				{
					?>
					<form method='POST' action='./modtraitement.php'>
						<label for='commentaires'>Changer le libellé du soin :</label>
						<input required type="text" name="commentaires" style="width: 650px" value="<?php echo $infos['commentaires']; ?>"><br/><br/>
						<label for='prixms'>Changer le prix :</label>
						<input required type="number" name="prixms" value="<?php echo $infos['prixms']; ?>"><br/><br/>
						<input type='submit' value='Valider' name='Valider'>
					</form>
				<?php
				}
				$sql->CloseCursor();
				?>