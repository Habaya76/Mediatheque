<?php
require_once("header.php");
$resultats = $db->query('SELECT * FROM `article` INNER JOIN categorie On categorie.idcategorie = article.idcategorie ', PDO::FETCH_ASSOC);
$resu = $resultats->fetchAll();
?>

<article class="admin">
    <div id="table">
        <table>
            <table>
                <thead>
                    <tr>
                        <th name="idarticle">id</th>
                        <th name="Nom">Titre</th>
                        <th name="category">Catégorie</th>
                        <th>Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($resu); $i++) :
                    ?>

                        <tr>
                            <td name="idArticle"><?php echo $resu[$i]['idarticle'] ?></td>
                            <td name="Nom"><?php echo $resu[$i]['nom'] ?></td>
                            <td name="category"><?php echo $resu[$i]['categorie'] ?></td>
                            <td>

                                <button action="ModiferArticle" class="button"><a class="ajou" href="modifie_article.php?idarticle=<?php echo $resu[$i]['idarticle']; ?>">Modifier</a></button>
                                <button action="SupprimerArticle" class="button"><a class="ajou" href="suprime.php?idarticle=<?php echo $resu[$i]['idarticle']; ?>">Suprimer</a></button>

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