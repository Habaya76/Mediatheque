<?php require_once('header.php');

$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$resultats = $db->query('SELECT * From articles ', PDO::FETCH_ASSOC);

?>
<article class="articles_index">

    <div class="classement">
        <div class="mon_element">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">
                        <h1>ACtualiter</h1>
                    </div>
                    <img src="images/slide2.jpeg" style="width:100%">

                </div>

                <div class="mySlides fade">
                    <div class="numbertext">
                        <h1>ACtualiter</h1>
                    </div>
                    <img src="images/ActuCulture.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">ACtualiter</div>
                    <img src="images/slide3.jpg" style="width:100%">
                </div>
            </div>
        </div>
        <?php if (isset($_SESSION['idusers'])) : ?>
        <div class="info_article flex">
            <?php
            while ($row = $articles->fetch()) :
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
        <?php endif; ?>
    </div>


</article>

<?php require_once('footer.php'); ?>