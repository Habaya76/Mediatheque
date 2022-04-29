<?php
require('header.php');

$date = new DateTime();
$email = $messages = "";
$emailError = $messagesError = "";
$isSuccess = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = verifyInput($_POST["email"]);
    $messages = verifyInput($_POST["messages"]);
    $isSuccess = true;

    if (empty($email)) {
        $emailError = "saisir email balala";
        $isSuccess = false;
    }
    if (empty($messages)) {
        $messagesError = 'veillez saissir un messages';
        $isSuccess = false;
    }
    if ($isSuccess) {

        // $db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
        //controler la connexion
        $resultats = $db->prepare("INSERT INTO `contact` (`email`, `messages`, `date`) values (:email, :messages, :date)");
        $resultats->execute(['email' => $email, 'messages' => $messages, 'date' => $date->format('Y-m-d H:m:s')]);
    }
}
function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

// FONCTION POUR VERIFIER NOS INPUT
function verifyInput($var)
{
    $var = trim($var);              //enlever les space suplementaiere
    $var = stripslashes($var);      //enlever tout les anti_slass
    $var = htmlspecialchars($var); //securiter
    return $var;
}
?>
<article class="article_contact">
    <div class="info_contact">
        <form id="contact_form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
            <h2>Nous contactez</h2>
            <label classe="labelmail" for="email">E-mail*</label>
            <input type="text" id="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
            <p class="error"><?php echo $emailError; ?></p>
            <label class="labelmessages" for="messages">messages*</label>
            <textarea name="messages" id="messages" cols="30" rows="10"><?php echo $messages; ?></textarea>
            <p class="error"><?php echo $messagesError; ?></p>
            <input type="submit" value="Envoyer" class="button">
            <p class="merci" style="display:<?php if ($isSuccess) echo 'block';
                                            else echo 'none'; ?>">votre messages à bien été envoyé.Merci de m'avoir contacter :)</p>
        </form>
    </div>
</article>
<?php
require('footer.php');
?>