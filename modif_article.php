<?php
require_once('header.php');

$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$req = $db->prepare('SELECT * FROM categories ');
$req->execute();
$resultat = $req->fetchAll();

// Réecriture des variables
if (isset($_POST['modifier'])) {

    // Réecriture des variables
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $image = $_POST['images'];
    $idArticles = $_GET['idArticles'];
    $resume = $_POST['resume'];
    $contenues = $_POST['contenues'];
    // Requête de modification d'enregistrement
    if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['screenshot']['size'] <= 2000000) {
            // Testons si l'extension est autorisée
            $fileInfo = pathinfo($_FILES['screenshot']['name']);
            $extension = $fileInfo['extension'];
            $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png', 'webp'];
            if (in_array($extension, $allowedExtensions)) {
                // On peut valider le fichier et le stocker définitivement
                $images = 'images/' . basename($_FILES['screenshot']['name']);
                move_uploaded_file($_FILES['screenshot']['tmp_name'], $images);
                // echo "L'envoi a bien été effectué !";
            }
        }
    }
    $Modifierarticles = $db->prepare("UPDATE articles SET titre = '$titre', auteur ='$auteur', images = '$images',resume = '$resume', contenues = '$contenues' WHERE idArticles = $idArticles");
    $Modifierarticles->execute();
} // Fin du test isset
$idArticles = $_GET['idArticles'];
$selec = $db->query("SELECT * FROM articles where idArticles = $idArticles");
$recupere = $selec->fetch();

?>
<article class=" liste_livre">
    <div class="info_article m-20 ">

        <form method="POST" action="#" enctype="multipart/form-data">

            <label for="">Titre</label>
            <input name="titre" type="text" value="<?php echo $recupere['titre'] ?>" placeholder="entre le titre de l'article">


            <label for="">Auteur</label>
            <input name="auteur" type="text" value="<?php echo $recupere['auteur'] ?>">



            <label for="" class="form-label">Images</label>
            <input type="file" class="form-control" id="screenshot" name="screenshot" value="<?php echo $recupere['images'] ?>" />


            <label for="">ID_categories</label>
            <input name="idcategories" type="text" value="<?php echo $recupere['idcategories'] ?>">


            <label for="">Resume</label>
            <textarea name="resume" id="message" cols="30" rows="10"><?php echo $contenues; ?><?php echo $recupere['resume'] ?></textarea>


            <label for="contenues">contenues</label>
            <textarea name="contenues" id="message" cols="30" rows="10"><?php echo $recupere['contenues'] ?></textarea>


            <button class="button_add" name="ajouter_article"><a href="admin.php">Retour</a></button>
            <input name="modifier" type="submit" value="modifier">


        </form>
    </div>
</article>

<?php
require_once('footer.php')
?>