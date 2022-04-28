<?php

session_start();
$db = new PDO('mysql:host=localhost;dbname=hbmedialbdd', 'root', 'root');

// $articles = $db->query('SELECT titre, auteur,images FROM articles ORDER BY idArticles DESC');
// if (isset($_GET['recherche'])) {

//     $q = htmlspecialchars($_GET['q']);
//     try {
//         $articles = $db->query('SELECT titre, auteur, images FROM articles WHERE titre LIKE "%' . $q . '%" ORDER BY idArticles DESC');

//         if ($articles->rowCount() == 0) {
//             $articles = $bdd->query('SELECT titre, auteur, images FROM articles WHERE CONCAT(titre, contenu) LIKE "%' . $idArticles . '%" ORDER BY idArticles DESC');
//         } else {
//         }
//     } catch (Exception $e) {
//         echo $e->getMessage();
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médiathèque</title>
    <script src="https://kit.fontawesome.com/f00c55aea5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <header>
        <div id="page_acceuil">
            <div class="nav_1">
                <img src="" alt="">

                <ul class="conne flex gap-10 ">
                    <? if (!empty($_SESSION['role'] && $_SESSION['role'] == 'user')) {
                        echo  '<li class="nav-item relative"><a href="logout.php" class="p-20 block">Déconnexion</a></li>';
                    } elseif (!empty($_SESSION['role'] && $_SESSION['role'] == 'admin')) {
                        echo  ' <li class="nav-item relative"><a href="admin.php " class="p-20 m-5 block">Admin</a></li>';
                        echo  '<li class="nav-item relative"><a href="logout.php" class="p-20 m-5 block">Déconnexion</a></li>';
                    } elseif (!isset($_SESSION['role'])) {
                        echo '<li class="nav-item relative"><a href="login.php" class="p-20 m-5 block">Connexion</a></li>';
                    }
                    ?>
                    <li class="nav-item relative"><a href="register.php" class="p-20 m-5 block">Inscription</a></li>
                </ul>
            </div>
            <div id="searchbar">
                <form action="" class="formulaire">
                    <input class="champ" type="text" value="Recherche....." name="q" />
                    <button class="bouton" type="submit" name="recherche">Rechercher</button>

                </form>
            
            </div>

            <div id="menu">
                <ul class="unlisted flex gap-20">
                    <li class="nav-item"><a href="index.php" class="p-20 block"><i class="fa-solid fa-house"></i></a></li>
                    <li class="nav-item relative">
                        <a href="#" class=" dropdown p-20 block">Pratique</a>
                        <ul class="unlisted absolute">
                            <li class="nav-item"><a href="pratique.php" class="p-20 block">emprunter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item relative">
                        <a href="#" class=" dropdown p-20 block">Numerique</a>
                        <ul class="unlisted absolute">
                            <li class="nav-item"><a href="liste_musique.php" class="p-20 block">Musique</a></li>
                            <li class="nav-item"><a href="liste_cinema.php" class="p-20 block"> Cinéma</a></li>
                            <li class="nav-item"><a href="liste_presse.php" class="p-20 block">La presse</a></li>
                            <li class="nav-item"><a href="liste_livre.php" class="p-20 block">Les livres</a></li>

                        </ul>
                    </li>

                    <li class="nav-item relative">
                        <a href="#" class=" dropdown p-20 block">Patrimoine</a>
                        <ul class="unlisted absolute">
                            <li class="nav-item"><a href="histoire.php" class="p-20 block"> Un peu d'histoire</a></li>
                            <li class="nav-item"><a href="precieu.php" class="p-20 block">Fonds précieux</a></li>
                        </ul>
                    </li>
                    <li class="nav-item relative">
                        <a href="contact.php" class=" p-20 block">contact</a>

                    </li>
                </ul>
            </div>
        </div>
    </header>