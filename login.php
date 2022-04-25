<?php
require_once('header.php');


if (isset($_POST['submit'])) {

    if ($_POST['email'] != "" || isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
        $req = $db->prepare(" SELECT * FROM users WHERE email=? ");
        $req->execute(array($email));
        $count = $req->rowCount();
        $user = $req->fetch();

        if ($count > 0) {
            if (password_verify($password, $users['password'])) {
                $_POST['password'];
                $_SESSION['email'] = $email;
                header("location: index.php");
            } else {
                echo "
     				<script>alert('Invalid username or password')</script>
     				<script>window.location = 'login.php'</script>
     				";
            }
        } else {
            echo "
            			<script>alert('Please complete the required field!')</script>
        				<script>window.location = 'login.php'</script>
            	";
        }
    }
}

?>

<div id="container">
    <!-- zone de connexion -->

    <form action="" method="POST" class="form_inscri">
        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="email" placeholder="email ou d'utilisateur" name="email" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" id='submit' value='Connexion'>
        <?php
        if (isset($_GET['erreur'])) {
            $err = $_GET['erreur'];
            if ($err == 1 || $err == 2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</div>
<?php
require_once('footer.php');
?>