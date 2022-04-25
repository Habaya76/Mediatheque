<?php require_once('header.php');

$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$req = $db->prepare('SELECT * FROM categorie ');
$req->execute();
$resultat = $req->fetchAll();

$nom = $contenues = $categorie = "";
$nomError = $contenuesError = $image = "";
$isSuccess = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = verifyInput($_POST["nom"]);
    $contenues = verifyInput($_POST["contenues"]);
    $idcategorie = verifyInput($_POST['idcategorie']);
    $image = verifyInput($_POST['image']);
    $idusers = $_SESSION['idusers'];
    $isSuccess = true;


    if (empty($nom)) {
        $nomError = "le nom ne peut pas etre vide";
        $isSuccess = false;
    }
    if (empty($image)) {
        $imageError = "l'image ne peut pas etre vide";
        $isSuccess = false;
    }
    if (empty($contenues)) {
        $contenuesError = '"le contenues ne peut pas etre vide";';
        $isSuccess = false;
    }
    if ($isSuccess) {
        // la connexion basse de donnees
        $db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
        $resultats = $db->prepare("INSERT INTO `article`(`nom`, `image`, `idcategorie`, `idusers`, `contenues`) values (:nom, :image, :idusers, :idcategorie, :contenues)");
        $resultats->execute(['nom' => $nom, 'image' => $image, 'idcategorie' => $idcategorie, 'idusers' => $idusers, 'contenues' => $contenues]);
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

<article class="article_admin flex m-20">

    <div class="tout_les_article m-20">
        <div class="div-admin m-20">
            <h2> Ajouter des nouveaux Articles </h2>
            <form action="">
                <label for="">ID Article:</label>
                <input type="text" name="idarticle">
                <label for="">Titre</label>
                <input type="text" name="titre">
                <label for="">Nom de l'auteur</label>
                <input type="text" name="auteur">
                <button class="button_admin"><a href="ajout_article.php">Ajouter</a></button>
                <button class="button_admin"><a href="admin.php">Retour</a></button>
            </form>
        </div>
    </div>
</article>

<?php require_once('footer.php');
 ?>