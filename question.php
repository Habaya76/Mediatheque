<?php
require_once('header.php');
?>

<article class="liste_livre">

    <div class="info_article ">
        <div class="question">
            <div class="slideshow-container">
                <h1>ACTUALITE</h1>
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img src="images/slide.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="images/slide.jpeg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="images/slide.PNG" style="width:100%">
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dotes" onclick="currentSlide(1)"></span>
                <span class="dotes" onclick="currentSlide(2)"></span>
                <span class="dotes" onclick="currentSlide(3)"></span>
            </div>
        </div>

        <button class="button_liste m-20"><a href="register.php" class="p-20 block">S'inscrire</a></button>
        <button class="button_liste m-20"><a href="emprunt.php" class="p-20 block">Emprunter</a></button>

    </div>
</article>


<?php
require_once('footer.php');
?>