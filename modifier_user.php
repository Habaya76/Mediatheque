<?php
include_once('header.php');

// $db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$req = $db->prepare('SELECT * FROM users ');
$req->execute();
$resultat = $req->fetchAll();
var_dump($resultat);
// Réecriture des variables
if (isset($_POST['modifier'])) {

    // Réecriture des variables
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $idusers = $_GET['idusers'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $Modifierarticles = $db->prepare("UPDATE users SET nom = '$nom', prenom ='$prenom', email = '$email', password = '$password' WHERE idusers = $idusers");
    $Modifierarticles->execute();
?>
<div class="autre flex m-20">
    <div class="div-admin m-20">

        <h2>modification users</h2>
        <form action="">
            <label for="">Nom</label>
            <input type="text" name="nom" value="<?php echo $resultat['nom'] ?>" >
            <label for="">Prenom</label>
            <input type="text" name="prenom" value="<?php echo $resultat['prenom'] ?>">
            <label for="">Email</label>
            <input type="email" name="email" value="<?php echo $resultat['email'] ?>">
            <label for="">Password</label>
            <input type="email" name="password" value="<?php echo $resultat['password'] ?>">
            <input name="modifier" type="submit" value="modifier">
            <button class="button_add" name="ajouter_article"><a href="admin.php">Retour</a></button>
        </form>
    </div>

</div>

<?php
require_once('footer.php');
?>