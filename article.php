<?php require_once('header.php');
session_start();
$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$req = $db->prepare('SELECT * FROM articles WHERE idArticles = :idArticles');
$req->execute(array('idArticles' => $_GET['idArticles']));
$resultat = $req->fetch();
$req = $db->prepare('SELECT * FROM articles ');
$req->execute();
$resul = $req->fetch();
$idarticle = $_GET['idArticles'];
$idusers = $_SESSION['idusers'];

?>

<articles class="liste_livre">
    <div class="info_article ">

        <div class="tout flex m-20">
            <div class="ima m-20">
                <img src="images/<?php echo $resultat['images']; ?>" width="400px">
            </div>
            <div class="resu m-20">
                <p class="nom_article ">
                    <?php
                    echo $resultat['titre'];
                    ?></p>

                <?php
                echo $resultat['resume'];
                ?></p>
                <div class="info m-20 ">

                    <button class="button_liste m-20"><a href="emprunt.php" class="p-20 block">Emprunter</a></button>
    
                </div>
            </div>
        </div>
</articles>

<?php require_once('footer.php'); ?>