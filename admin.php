<?php
require_once("header.php");
$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$resultats = $db->query('SELECT * FROM `articles` INNER JOIN categorie On categorie.idcategorie = articles.idcategorie ', PDO::FETCH_ASSOC);
$resu = $resultats->fetchAll();

?>
<article class="article_admin flex m-20">

    <div class="tout_les_article m-20">
        <h2>Liste des article du Médiathèque</h2>
        <table>
            <thead>
                <tr>
                    <th name="idarticles">id</th>
                    <th name="Nom">Titre</th>
                    <th name="category">Catégorie</th>
                    <th name="auteur">Auteur</th>
                    <th name="action">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($resu); $i++) :
                ?>
                    <tr>
                        <td name="idArticles"><?php echo $resu[$i]['idarticles'] ?></td>
                        <td name="Nom"><?php echo $resu[$i]['nom'] ?></td>
                        <td name="category"><?php echo $resu[$i]['categorie'] ?></td>
                        <td name="auteur"><?php echo $resu[$i]['auteur'] ?></td>
                        <td>
                            <button class="button_admin"><a href="ajout_article.php">Ajouter</a></button>
                            <button class="button_admin"><a href="suprime.php">Suprimer</a></button>
                            <button class="button_admin"><a href="modif_article.php">Modifier</a></button>
                        </td>
                    </tr>
                <?php
                endfor;
                ?>

            </tbody>
        </table>
    </div>



</article>

<?php
require_once("footer.php");
?>