<?php
require_once('header.php');

$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$idArticles = $_GET['idArticles'];
$suprime = $db->prepare("DELETE FROM articles WHERE idArticles = :idArticles");
$suprime->execute(array(':idArticles'  => $_GET['idArticles']));

$recupere = $suprime->fetchAll();
var_dump($recupere);

if(!$suprime){
    echo "<p class='alert alert-danger'>L'enregistrement n'a pas été supprimé</p>";
}
else {
    echo "<p class='alert alert-success'>L'articles ".$_GET['idArticles']." a bien été supprimé</p>";
}
?>