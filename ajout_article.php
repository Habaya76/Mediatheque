<?php
require('header.php');

$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$req = $db->prepare('SELECT * FROM categories ');
$req->execute();
$resultat = $req->fetchAll();

$titreError = $contenuesError = $imageError = $auteurError = $resumeError = "";
$titre = $contenues = $categories = $resume = $auteur = $images = "";
$isSuccess = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = verifyInput($_POST["titre"]);
    $auteur = VerifyInput($_POST["auteur"]);
    $images = verifyInput($_POST['images']);
    $idcategories = verifyInput($_POST['idcategories']);
    $idusers = $_SESSION['idusers'];
    $resume = verifyInput($_POST["resume"]);
    $contenues = verifyInput($_POST["contenues"]);
    $isSuccess = true;

    if (empty($titre)) {
        $titreError = "le nom ne peut pas etre vide";
        $isSuccess = false;
    }

    if (empty($auteur)) {
        $auteurError = "le nom ne peut pas etre vide";
        $isSuccess = false;
    }

    if (empty($resume)) {
        $resumeError = "le nom ne peut pas etre vide";
        $isSuccess = false;
    }
    if (empty($contenues)) {
        $contenuesError = "le nom ne peut pas etre vide";
        $isSuccess = false;
    }
    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['screenshot']['size'] <= 1000000) {
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
    } else {
        $imagesError = "le nom ne peut pas etre vide";
        $isSuccess = false;
    }
    if ($isSuccess) {
        // la connexion basse de donnees
        $db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
        $resultats = $db->prepare("INSERT INTO `articles`(`titre`, `auteur`,`images`,  `idcategories`, `idusers`,`resume`, `contenues`) values (:titre, :auteur, :images,  :idcategories, :idusers, :resume, :contenues)");
        $resultats->execute(['titre' => $titre, 'auteur' => $auteur, 'images' => $images,  'idcategories' => $idcategories, 'idusers' => $idusers, 'resume' => $resume, 'contenues' => $contenues]);
    }
}

function verifyInput($var)
{
    $var = trim($var);              //enlever les space suplementaiere
    $var = stripslashes($var);      //enlever tout les anti_slass
    $var = htmlspecialchars($var); //securiter
    return $var;
}

?>
<article class="liste_livre">
    <div class="info_article m-20 ">

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
            <label for="">Titre</label>
            <input name="titre" type="text" value="<?php echo $titre; ?>" placeholder="entre le titre de l'article">
            <p class="error"><?php echo $titreError; ?></p>
            <label for="">Auteur</label>
            <input name="auteur" type="text" value="<?php echo $auteur; ?>">
            <p class="error"><?php echo $auteurError; ?></p>

            <label for="screenshot" class="form-label"></label>
            <input type="file" class="form-control" id="screenshot" name="screenshot" />
            <br>
            <label for="">ID_categories</label>
            <input name="idcategories" type="text" value="<?php echo $idcategories; ?>"><br>

            <label for="">Resume</label>
            <textarea name="resume" id="message" cols="30" rows="10"><?php echo $contenues; ?></textarea>
            <p class="error"><?php echo $resumeError; ?></p>
            <label for="contenues">contenues</label>
            <textarea name="contenues" id="message" cols="30" rows="10"><?php echo $contenues; ?></textarea>
            <p class="error"><?php echo $contenuesError; ?></p>
            <a href="admin.php" class="">Retour</a>
            <button class="button_add" name="ajouter_article">Ajouter</button>
            <p class="merci" style="display:<?php if ($isSuccess) echo 'block';
                                            else echo 'none'; ?>">Article a été Ajouter:)</p>
        </form>

    </div>
</article>
<?php
require('footer.php');
?>