<?php require_once('header.php');

$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$req = $db->prepare('SELECT * FROM article WHERE idarticle = :idarticle');
$req->execute(array('idarticle' => $_GET['idarticle']));
$resultat = $req->fetch();

?>

<article class="detail_livre">
    <div class="livre flex ">

    <div class="contenues m-20 ">
        <img src="images/<?php echo $resultat['images']; ?>" width="200px">
    </div>
    <div class="descri m-20">
        <p class="nom_article">
            <?php
            echo $resultat['nom'];
            ?></p>
        <p><?php echo $resultat['contenues']; ?></p>
    
      <button class="button_liste m-20"><a href="emprunt.php" class="p-20 block">Emprunter</a></button>
    </div>
    </div>
</article>

<?php require_once('footer.php'); ?>