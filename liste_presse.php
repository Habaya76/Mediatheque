<?php
require_once('header.php');

$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');

$resultats = $db->query('SELECT * From articles where idcategories = 4', PDO::FETCH_ASSOC);


?>
<article class="liste_livre ">

    <div class="info_article flex ">

        <?php
        while ($row = $resultats->fetch()) :
        ?>
            <div class="tout flex m-20">

                <div class="ima">
                    <p class="nom_article ">
                        <?php
                        echo $row['titre'];
                        ?></p>
                    <img src="images/<?php echo $row['images']; ?>" width="200px">
                    <div class="info m-20 ">

                        <button class="button_liste m-20"><a class="plus_info p-20 block" href="article.php?idArticles=<?php echo $row['idArticles']; ?> ">plus d'infos</a></button>
                    </div>
                </div>

            </div>

        <?php endwhile ?>

    </div>

</article>

<?php
require_once('footer.php');
?>