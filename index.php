<?php require_once('header.php');

$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$resultats = $db->query('SELECT * From articles', PDO::FETCH_ASSOC);

?>
<article class="liste_livre">

    <div class="info_article flex ">

        <?php
        while ($row = $articles->fetch()) :
        ?>

            <div class="tout m-20">

                <div class="ima">
                    <img src="images/<?php echo $row['images']; ?>" width="200px">
                </div>


                <div class="infom-20 ">
                    <p class="nom_articles ">
                        <?php
                        echo $row['titre'];
                        ?>
                    </p>


                </div>
            </div>

        <?php endwhile ?>

    </div>

</article>

<?php require_once('footer.php'); ?>