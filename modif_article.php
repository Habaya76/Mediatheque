<?php
require_once('header.php');

$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$req = $db->prepare('SELECT * FROM categories ');
$req->execute();
$resultat = $req->fetchAll();


$idArticles = $_GET['idArticles'];
$selec = $db->prepare("SELECT * FROM articles where idArticle = $idArticles ");
$selec->execute();
$resultats = $selec->fetchAll();
 var_dump($resultats);
// Réecriture des variables
if (isset($_POST['modifier'])) {

    // Réecriture des variables
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $images = $_POST['images'];
    $idArticles = $_GET['idArticles'];
    $idusers = $_GET['idusers'];
    $auteur = $_POST['resume'];
    $contenues = $_POST['contenues'];
  
    
    // Requête de modification d'enregistrement
    $Modifierarticles = $db->prepare("UPDATE articles SET titre = '$titre', auteur = '$auteur', images = '$images', idusers = $idusers,resume = '$resume', contenues = '$contenues' WHERE idArticles = $idArticles");
    $Modifierarticles->execute();
} // Fin du test isset


?>
<article class=" liste_livre">
    <div class="info_article m-20 ">

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

            <label for="">Titre</label>
            <input name="titre" type="text" value="<?php echo $recupere['titre'] ?>" placeholder="entre le titre de l'article">
          

            <label for="">Auteur</label>
            <input name="auteur" type="text" value="<?php echo $recupere['auteur'] ?>">
          

            <label for="">images</label>
            <input name="images" type="text" value="<?php echo $recupere['images'] ?>">
          

            <label for="">ID_categories</label>
            <input name="idcategories" type="text" value="<?php echo $recupere['idcategories'] ?>">


            <label for="">ID_users</label>
            <input name="idusers" type="text" value="<?php echo $recupere['idusers'] ?>">


            <label for="">Resume</label>
            <textarea name="resume" id="message" cols="30" rows="10"><?php echo $contenues; ?><?php echo $recupere['resume'] ?></textarea>
            

            <label for="contenues">contenues</label>
            <textarea name="contenues" id="message" cols="30" rows="10"><?php echo $recupere['contenues'] ?></textarea>
          

            <button class="button_add" name="ajouter_article"><a href="admin.php">Retour</a></button>
            <input name="modifier" type="submit" value="modifier">

            <p class="merci" style="display:<?php if ($isSuccess) echo 'block';
                                            else echo 'none'; ?>">Article a été modifier:)</p>
        </form>
    </div>
</article>

<?php
require_once('footer.php')
?>