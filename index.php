<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>blog</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <h1>Mon blog !</h1>

    <h2>Derniers billets du blog :</h2>

<?php

require 'config.php';

$req = $bdd->query('SELECT  id, titre, contenu, date_creation FROM billets ORDER BY id DESC LIMIT 0,5');


while ($donnees = $req->fetch())
{
?>
<div class="news">
<h3>
  <?php echo htmlspecialchars($donnees['titre']) ?>
  <?php echo 'Le ' . htmlspecialchars($donnees['date_creation']) ?>
</h3>

  <p> <?php echo htmlspecialchars($donnees['contenu']) ?> </br>

    <a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a>

  </p>

</div>

<?php
}

$req->closeCursor();
?>


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
