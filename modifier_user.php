<?php
include_once('header.php');

?>
<div class="autre flex m-20">
    <div class="div-admin m-20">

        <h2>Inscription des abonnés de la Médiathèque</h2>
        <form action="">
            <label for="">Nom</label>
            <input type="text" name="nom">
            <label for="">Prenom</label>
            <input type="text" name="prenom">
            <label for="">Email</label>
            <input type="email" name="contact">
            <button class="button_admin"><a href="register_adm.php">Inscription</a></button>
            <button class="button_admin"><a href="suprime.php">Suprimer</a></button>
            <button class="button_admin"><a href="modifier.php">Modifier</a></button>
        </form>
    </div>

</div>
<?php
require_once('footer.php');
?>