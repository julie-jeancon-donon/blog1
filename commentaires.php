
<?php

require 'config.php';

// preparation requete select en fonction de l'id transmis dans l'url
$req = $bdd->prepare('SELECT auteur, commentaire, date_commentaire FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
$req->execute(array($_GET['billet']));

while ($donnees = $req->fetch() ) {
?>
<p>  <?php echo htmlspecialchars($donnees['auteur']); ?>
  le <?php echo $donnees['date_commentaire']; ?> </p>
<p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?> </p>
<?php
}
$req->closeCursor();
?>
</body>
</html>
