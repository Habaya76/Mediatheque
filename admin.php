<?php
require_once("header.php");
$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$resultats = $db->query('SELECT * FROM `articles` INNER JOIN categories On categories.idcategories = articles.idcategories ', PDO::FETCH_ASSOC);
$resu = $resultats->fetchAll();
$select_users = $db->query('SELECT * FROM `users` ');
$sele = $select_users->fetchAll();

?>
<article class="article_admin flex p-20 ">


    <div class="tout_les_article p-20">

        <div class="tout_les_article">
            <button class="button_admin"><a href="ajout_article.php">Ajouter_article</a></button>
            <!-- 
        <button class="button_admin"><a href="modifier_user.php">Modifier_users</a></button>
        <button class="button_admin"><a href="sup_users.php">suprime_users</a></button> -->
        </div>
        <h2>Liste des article du Médiathèque</h2>
        <table>
            <thead>
                <tr>
                    <th name="idarticles">ID_articles</th>
                    <th name="titre">Titres</th>
                    <th name="auteur">Auteurs</th>
                    <th name="images">photos</th>
                    <th name="category">Catégories</th>
                    <th name="action">Actions</th>
                </tr>
            </thead>
            <tbody>











                <?php
                for ($i = 0; $i < count($resu); $i++) :
                ?>
                    <tr>
                        <td name="idArticles"><?php echo $resu[$i]['idArticles'] ?></td>
                        <td name="titre"><?php echo $resu[$i]['titre'] ?></td>
                        <td name="auteur"><?php echo $resu[$i]['auteur'] ?></td>
                        <td name="images"><?php echo $resu[$i]['images'] ?></td>
                        <td name="category"><?php echo $resu[$i]['categories'] ?></td>
                        <td>

                            <button class="button_admin"><a href="suprime.php">Suprimer</a></button>
                            <button class="button_admin"><a href="modif_article.php?idArticles=<?php echo $resu[$i]['idArticles']; ?>">Modifier</a></button>
                        </td>
                    </tr>
                <?php
                endfor;
                ?>

            </tbody>
        </table>
    </div>

    <div class="tout_les_article">


        <button class="button_admin"><a href="add_users.php">Création_users</a></button>


        <h2>Liste des users</h2>
        <table>
            <thead>
                <tr>
                    <th name="idarticles">ID_users</th>
                    <th name="nom">nom</th>
                    <th name="prenom">prenom</th>
                    <th name="email">email</th>
                    <th name="action">role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($sele); $i++) :
                ?>
                    <tr>
                        <td name="idusers"><?php echo $sele[$i]['idusers'] ?></td>
                        <td name="nom"><?php echo $sele[$i]['nom'] ?></td>
                        <td name="prenom"><?php echo $sele[$i]['prenom'] ?></td>
                        <td name="email"><?php echo $sele[$i]['email'] ?></td>
                        <td name="role"><?php echo $sele[$i]['role'] ?></td>
                        <td>

                            <button class="button_admin"><a href="suprime.php">Suprimer</a></button>
                            <button class="button_admin"><a href="modif_article.php?idArticles=<?php echo $sele[$i]['idusers']; ?>">Modifier</a></button>
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