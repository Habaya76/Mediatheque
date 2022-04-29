<?php
require_once('header.php');

// $db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');

$resultats = $db->query('SELECT * From articles where idcategories = 2', PDO::FETCH_ASSOC);

?>
<article class="article_music">

    <div class="info_music flex ">

        <?php
        while ($row = $resultats->fetch()) :
        ?>
            <div class="tout m-20">

                <div class="ima">
                    <img src="<?php echo $row['images']; ?>">
                </div>
                <div class="info m-20 ">
                    <h3 class="nom_articles m-20">
                        <?php
                        echo $row['titre'];
                        ?>
                    </h3>
                    <a href="article.php?idArticles=<?= $row['idArticles']; ?>">
                        <button class="lien">Voir plus</button>
                    </a>
                </div>


            </div>

        <?php endwhile ?>

    </div>

</article>

<?php
require_once('footer.php');
?>