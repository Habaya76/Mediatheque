<?php
require_once("header.php");
// $db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$resultats = $db->query('SELECT * FROM `articles` INNER JOIN categories On categories.idcategories = articles.idcategories ', PDO::FETCH_ASSOC);
$resu = $resultats->fetchAll();
$select_users = $db->query('SELECT * FROM `users` ');
$sele = $select_users->fetchAll();
?>
<article class="article_admin">
    <h1>Pages Administrateur</h1>
    <div class="infon_admin flex m-20">

        <div class="tout_les_article flex m-20">
            <div class="div_article m-20">
                <h2>Liste des article du Médiathèque</h2>
                <div id="scroller">
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
                                        <a href="suprime.php?idArticles=<?php echo $resu[$i]['idArticles'] ?>" class="button_add ">
                                            <button id="lien_admin m_10">Suprimer</button>
                                        </a>
                                        <a href="modif_article.php?idArticles=<?php echo $resu[$i]['idArticles'] ?>" class="button_add ">
                                            <button id="lien_admin"> Modifier</button>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            endfor;
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="tout_les_article m-20">
                    <a href="ajout_article.php" class="button_add m-20">
                        <button id="lien_admin"> Ajouter_article </button>
                    </a>
                </div>
            </div>
            <div class="div_users">
                <div class="tout_les_article m-20">
                    <h2>Liste des users</h2>
                    <div id="scroller">
                        <table>
                            <thead>
                                <tr>
                                    <th name="idusers">ID_users</th>
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
                                            <a href="suprime.php?idusers=<?php echo $sele[$i]['idusers'] ?>" class="button_add">
                                                <button id="lien_admin">Suprimer</button>
                                            </a>
                                            <a href="modif_article.php?idusers=<?php echo $sele[$i]['idusers'] ?>" class="button_add">
                                                <button id="lien_admin">Modifier</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                endfor;
                                ?>

                            </tbody>
                        </table>

                        <div class="m-20">
                            <a href="add_users.php" class="button_add m-20">
                                <button id="lien_admin">Création_users</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
</article>

<?php
require_once("footer.php");
?>