<?php
$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$idArticles = $_GET['idArticles'];
$suprime_articles = $db->prepare("DELETE FROM articles WHERE idArticles = :idArticles");
$suprime_articles->execute(array(':idArticles'  => $_GET['idArticles']));
$recupere = $suprime_articles->fetchAll();

$idusers = $_GET['idusers'];
$suprime_users = $db->prepare("DELETE FROM users WHERE idusers = :idusers");
$suprime_users->execute(array(':idusers'  => $_GET['idusers']));
$recup = $suprime_users->fetchAll();

if (!$suprime_users) {
    echo "
    <script> alert('L'enregistrement n'a pas été supprimé') </script>
    <script> window.location = 'admin.php' </script>
    ";
} else {
    echo "
    <script> alert('L'articles " . $_GET['idusers'] . " a bien été supprimé') </script>
    <script> window.location = 'admin.php' </script>
    ";
}

if (!$suprime_articles) {
    echo "
    <script> alert('L'enregistrement n'a pas été supprimé')</script>
    <script>window.location = 'admin.php'</script>
    ";
} else {
    echo "
    <script> alert('L'articles " . $_GET['idArticles'] . " a bien été supprimé') </script>
    <script> window.location = 'admin.php' </script>
    ";
}
