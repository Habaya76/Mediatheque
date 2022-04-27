

// ********************************SLIDE 1****************************************

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(m) {
  showSlides(slideIndex += m);
}

// Thumbnail image controls
function currentSlide(m) {
  showSlides(slideIndex = m);
}

function showSlides(m) {
  let index;
  let slides = document.getElementsByClassName("mySlides");
  let dotes = document.getElementsByClassName("dotes");
  if (m > slides.length) {slideIndex = 1}
  if (m < 1) {slideIndex = slides.length}
  for (index = 0; index < slides.length; index++) {
    slides[index].style.display = "none";
  }
  for (index = 0; index < dotes.length; index++) {
    dotes[index].className = dotes[index].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dotes[slideIndex-1].className += " active";
} 


// ***********************************SLIDE 2************************************
let Index = 1;
show(Index);

// Next/previous controls
function Slides(n) {
  show(Index += n);
}

// Thumbnail image controls
function current(n) {
  show(Index = n);
}


function show(n) {
  let i;
  let slid = document.getElementsByClassName("Slides_1");
  let dots = document.getElementsByClassName("dot");
  if (n > slid.length) {Index = 1}
  if (n < 1) {Index = slid.length}
  for (i = 0; i < slid.length; i++) {
    slid[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slid[Index-1].style.display = "block";
  dots[Index-1].className += " active";
} 