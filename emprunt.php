<?php require_once("header.php");



function debugPrintVariableGET()
{
    global $Debug;
    if ($Debug) {
        debugPrintVariable("_GET");




        if (isset($_GET['button_emprunter'])) {
            $db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
            $emp = $db->prepare('SELECT * FROM livres WHERE nom = "' . $livres['nom'] . '" ');
            $emp->execute(array($_POST['button_emprunter']));
            $res = $emp->fetch();

            echo $res[0];

            if ($res[0] > 0) {
                $res[0]--;
                $emprunt = $db->prepare('UPDATE livre SET nbLivre ="' . $res[0] . '" AND nomLivre = "' . $livre['nomLivre'] . '"');
                $emprunt->execute(array($res[0]));

                $erreur = "Ce livre à bien était emprunté !";
            } else {
                $erreur = "Nous n'avons plus se livre en stock !";
            }
        }
    }
}
?>


<article class="article_emprunt">

    <div class="emprunt">

        <h2>Entrer vos informations</h2>

        <form action="" method="poste">
            <label for="">Nom</label>
            <input type="text" name="nom" placeholder="votre nom">
            <label for="">Prénom</label>
            <input type="text" name="prenom" placeholder="votre prenom">
            <label for="">Adresse</label>
            <input type="text" name="adresse" placeholder="votre adresse">
            <label for="">Téléphone</label>
            <input type="text" name="telephone" placeholder="Telephone">
            <label for="">E-mail</label>
            <input type="email" name="email" placeholder="votre e-mail">

        </form>
        <div class="mesbutton ">
            <button class="button_liste m-20"><a href="leslivres.php" class="p-20 block">Retour</a></button>
            <button class="button_liste m-20" name="button_emprunter"><a href="emprunt.php" class="p-20 block">Emprunter</a></button>
        </div>
    </div>
</article>


<?php require_once("footer.php"); ?>