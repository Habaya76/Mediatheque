<?php
require_once('header.php');
$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$req = $db->prepare('SELECT * FROM articles WHERE idarticles = :idarticles');
$req->execute(array('idarticles' => $_GET['idarticles']));
$resultat = $req->fetch();
$req = $db->prepare('SELECT * FROM articles ');

$idarticles = $_GET['idarticles'];
$idusers = $_SESSION['idusers'];


?>

<article class="liste_livre">

    <div class="info_articles ">
        <img src="images/<?php echo $resultat['images']; ?>">
        <p>
            <?php
            echo $resultat['titre'];

            ?>
        </p>
        <p>
            <?php
            echo $resultat['resume'];

            ?>
        </p>
    </div>
</article>

<?php
require_once('footer.php');
?>