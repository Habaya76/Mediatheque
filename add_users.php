<?php
include_once('header.php');

$pwdh = ['cost ' => 14];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$nom = $prenom = $password = $email = "";
$nomError = $prenomError = $pseudoError = $passwordError = $emailError = $roleError = "";
$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = verifyInput($_POST["nom"]);
    $prenom = verifyInput($_POST["prenom"]);
    $password = verifyInput($_POST["password"]);
    $email = verifyInput($_POST["email"]);
    $isValid = true;

    if (empty($nom)) {
        $nomError = "Le nom ne peut pas etre vide";
        $isValid = false;
    }
    if (empty($prenom)) {
        $prenomError = "Le prenom ne peut pas etre vide";
        $isValid = false;
    }

    if (empty($email)) {
        $emailError = "Le mail ne peut pas etre vide";
        $isValid = false;
    }
    if (empty($password)) {
        $passwordError = "Le mot de passe ne peut pas etre vide";
        $isValid = false;
    }
    if ($isValid) {
        $db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
        $resultats = $db->prepare("INSERT INTO `users` ( `nom`, `prenom`,`password`, `email`, `role`) values (:nom, :prenom,  :password, :email, :role)");
        $resultats->execute(['nom' => $nom, 'prenom' => $prenom, 'password' => $hashed_password, 'email' => $email, 'role' => 'user']);
    }
}
function verifyInput($var)
{
    $var = trim($var);              //enlever les space suplementaiere
    $var = stripslashes($var);      //enlever tout les anti_slass
    $var = htmlspecialchars($var); //securiter
    return $var;
}

function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

?>
<article class="article_users">
<div class="add_users">
    <form method="POST" action="" class="form_add_users">
        <h1>Création users</h1>
        <label for="">nom</label>
        <input type="text" name="nom" placeholder="votre nom" value="">
        <p id="error"><?php echo $nomError; ?></p>

        <label for="">prenom</label>
        <input type="text" name="prenom" placeholder="votre prenom" value="">
        <p id="error"><?php echo $prenomError; ?></p>

        <label for="">E-mail</label>
        <input type="text" name="email" placeholder="votre E-mail" value="">
        <p id="error"><?php echo $emailError; ?></p>

        <label for="">Mot de passe</label>
        <input type="password" name="password" placeholder="votre mot de passe" value="">
        <p id="error"><?php echo $passwordError; ?></p>

        <input type="submit" name="bouton" value="Création_users" class="input_add">
        <button class="button_admin"><a href="admin.php">Retour</a></button>
      

        
    </form>
</div>
</article>

<?php
require_once('footer.php');
?>