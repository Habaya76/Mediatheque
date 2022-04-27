<?php require_once('header.php');

$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');

$resultats = $db->query('SELECT * From articles', PDO::FETCH_ASSOC);

?>
<articles class="liste_livre">

    <div class="info_article flex ">

        <?php
        while ($row = $resultats->fetch()) :
        ?>
        <div class="tout flex m-20">
            
            <div class="ima">
                <img src="images/<?php echo $row['images']; ?>" width="200px">
            </div>


            <div class="info m-20 ">
            <p class="nom_articles ">
                <?php
                echo $row['nom'];
                ?></p>
                <p><?php echo $row['resume']; ?></p>

                <button  class="button_liste m-20"><a class="p-20 block" href="livre.php?idArticles=<?php echo $row['idArticles']; ?> ">plus d'infos</a></button>
            </div>
        </div>
        <hr>
        <?php endwhile ?>

    </div>

</articles>

<?php require_once('footer.php'); ?>