<?php
    session_start();
    require_once '../utilities/secure.php';
    require_once '../utilities/connect_db.php';
        
        echo "<table class='nomanimal' border=1> ";

        $sql = $db ->query('SELECT animal.noma FROM animal');
        $nb=$sql->rowCount();
        echo "<tr>
                <th><center>Nom des animaux</center></th>
            </tr>";

        while($data = $sql->fetch())
        {
            echo "<tr>";
            echo "<td>".$data['noma'] ."</td>";
            echo "<tr>";
        }
        echo "</table>";

        echo "<table class='nomprop' border=1> ";

        $sql = $db ->query('SELECT proprietaire.nom, proprietaire.prenom FROM proprietaire');
        $nb=$sql->rowCount();
        echo "<tr>
                <th><center>Nom des proprietaires</center></th>
                <th><center>Prénom des proprietaires</center></th>
            </tr>";

        while($data = $sql->fetch())
        {
            echo "<tr>";
            echo "<td>".$data['nom'] ."</td>";
            echo "<td>".$data['prenom'] ."</td>";
            echo "<tr>";
        }
        echo "</table>";

         echo "<table class='nomveto' border=1> ";

        $sql = $db ->query('SELECT veterinaire.nom, veterinaire.prenom FROM veterinaire');
        $nb=$sql->rowCount();
        echo "<tr>
                <th><center>Nom des vétérinaires</center></th>
                <th><center>Prénom des vétérinaires</center></th>
            </tr>";

        while($data = $sql->fetch())
        {
            echo "<tr>";
            echo "<td>".$data['nom'] ."</td>";
            echo "<td>".$data['prenom'] ."</td>";
            echo "<tr>";
        }
        echo "</table>";


        $sql->CloseCursor();

?>


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
                    <li class="op-v-item"><a class="op-v-link" href="/veto1/gestion/indexs.php">Retour à l'index</a></li>
 </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="container">
<section id="animauxajout">        
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                </br></br>
                <h1>Ajouter une consultation</h1>
<form method="POST" action='register.php'>
	<label for="noma">Animal : </label>
	<input required type="text" name ="noma"></br>

	<label for ="nomP">Nom du propriétaire : </label>
	<input required type="text" name="nomP"></br>

    <label for ="prenomP">Prénom du propriétaire : </label>
    <input required type="text" name="prenomP"></br>

    <label for ="nomV">Nom du vétérinaire : </label>
    <input required type="text" name="nomV"></br>

    <label for ="prenomV">Prénom du vétérinaire : </label>
    <input required type="text" name="prenomV"></br>

	<label for="datec">Date (aaaa/mm/jj): </label>
	<input required type="datetime" name ="datec"></br>

	<label for="heurec">Heure (hh:mm:ss) : </label>
	<input required type="time" name ="heurec"></br>

    <label for="motif">Motif : </label>
    <input required type="text" name ="motif"></br>

	<input type="submit" name ="Valider" value="Valider" />
</form>
</div>
</div>
</section>
 <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Allo-Veto, </p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
</body>

</html>