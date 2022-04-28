<?php
include_once('header.php');

?>
<div class="autre flex m-20">
    <form method="POST" action="" class="form_inscri">
        <h1>Inscription</h1>
        <label for="">nom</label>
        <input type="text" name="nom" placeholder="votre nom" value="">
        <label for="">prenom</label>
        <input type="text" name="prenom" placeholder="votre prenom" value="">
        <label for="">E-mail</label>
        <input type="text" name="email" placeholder="votre E-mail" value="">
        <label for="">Mot de passe</label>
        <input type="password" name="password" placeholder="votre mot de passe" value="">
        <input type="submit" name="bouton" value="Inscription">
    </form>
</div>
<?php
require_once('footer.php');
?>