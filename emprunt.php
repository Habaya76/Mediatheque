<?php require_once("header.php");

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