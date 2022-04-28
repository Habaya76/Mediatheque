<?php require_once('header.php');

$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$resultats = $db->query('SELECT * From articles', PDO::FETCH_ASSOC);


$articles = $db->query('SELECT titre, auteur,images FROM articles ORDER BY idArticles DESC');
if (isset($_GET['recherche'])) {
   
    $q = htmlspecialchars($_GET['q']);
    try {
        $articles = $db->query('SELECT titre, auteur, images FROM articles WHERE titre LIKE "%' . $q . '%" ORDER BY idArticles DESC');
        
        if ($articles->rowCount() == 0) {
            $articles = $bdd->query('SELECT titre, auteur, images FROM articles WHERE CONCAT(titre, contenu) LIKE "%' . $idArticles . '%" ORDER BY idArticles DESC');
        }
        else{
            
        }
    } catch(Exception $e) {
        echo $e->getMessage();
    }
}

?>
<articles class="liste_livre">
   
    <div class="info_article flex ">

        <?php
        while ($row = $articles ->fetch()) :
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

</articles>

<?php require_once('footer.php'); ?>