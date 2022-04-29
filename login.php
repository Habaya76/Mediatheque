<?php
require_once('header.php');

$email = $password = "";
$Error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        // $db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
        $req = $db->prepare('SELECT * FROM users WHERE email = :email');
        $req->execute(array('email' => $_POST['email']));
        $user = $req->fetchAll();


        if (isset($user[0]) && $user[0]["password"] == password_verify($password, $user[0]["password"]) && $user[0]["email"] == $email) {
            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['email'] = $user[0]['email'];
            $_SESSION['password'] = $user[0]['password'];
            $_SESSION['idusers'] = $user[0]['idusers'];
            $_SESSION['role'] = $user[0]['role'];
            header('location:index.php');
        } else {
            $Error = 'mot de passe ou E-mail incorrecte';
        }
    }
}
?>
<main>
    <section class="section_connexion">
        <article class="article_connexion">
            <div id="container">
                <!-- zone de connexion -->
                <form id="form_connexion" action="" method="POST" class="form_inscri">
                    <h1>Connexion</h1>
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="user ou E-mail" name="email" value="<?php echo $email; ?>" required>
                    <p class="error"><?php echo $Error; ?></p>
                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                    <p class="error"><?php echo $Error; ?></p>
                    <input type="submit" id='submit' value='Connexion'>
                    <p class="register" style = 'font-size: small';>Vous êtes nouveau ? cliquez ici pour <a href="register.php"> S'inscrire </a>
                </form>
            </div>
        </article>
    </section>
</main>
<?php
require_once('footer.php');
?>
