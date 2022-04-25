<?php
require_once('header.php');
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
                <button class="button_admin"><a href="ajout_article.php">Modifier</a></button>
                <button class="button_admin"><a href="admin.php">Retour</a></button>
            </form>
        </div>
    </div>
</article>



<?php
require_once('footer.php')
?>