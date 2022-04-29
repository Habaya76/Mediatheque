<?php require_once("header.php");
print_r(  $_SESSION['idusers'],);
// $db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$recup = $db->prepare('INSERT INTO emprunt (idusers, idArticles, dateEmprunt, dateRetour) VALUES (:idusers, :idArticles, now(), date_add(now(),interval 7 day))');
$recup->execute(array(
    ':idusers' => $_SESSION['idusers'],
    ':idArticles' => $_REQUEST['idArticles']
));
$Modifierarticle = $db->prepare("UPDATE articles SET status = 'indisponible' where idArticles = :idArticles");
$Modifierarticle->execute(array(':idArticles' => $_REQUEST['idArticles']));

