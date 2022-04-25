 <?php require_once("header.php"); ?>

 <article class="acceuil">
     <!--********************************** SLIDE ACTUALITE****************************************** -->
     <!-- Slideshow container -->
     <div class="div_acceuil">

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

         <!--********************************** SLIDE A LA UNE****************************************** -->
         <div class="font">

             <div class="slides_ala_une">
                 <h1>A la une</h1>
                 <!-- Full-width images with number and caption text -->
                 <div class="Slides_1 fade">
                     <img src="images/slide.jpg" style="width:100%">
                 </div>

                 <div class="Slides_1 fade">
                     <img src="images/slide.jpeg" style="width:100%">
                 </div>

                 <div class="Slides_1 fade">
                     <img src="images/slide.PNG" style="width:100%">
                 </div>
                 <!-- Next and previous buttons -->
                 <a class="prev" onclick="Slides(-1)">&#10094;</a>
                 <a class="next" onclick="Slides(1)">&#10095;</a>
             </div>
             <!-- The dots/circles -->
             <div style="text-align:center">
                 <span class="dot" onclick="current(1)"></span>
                 <span class="dot" onclick="current(2)"></span>
                 <span class="dot" onclick="current(3)"></span>
             </div>
         </div>
     </div>
 </article>

 <?php require_once("footer.php"); ?>