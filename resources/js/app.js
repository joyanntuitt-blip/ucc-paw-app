// Initialize the global slide index tracker
let slideIndex = 1;
let slideTimer;

// Next/previous manual controls
function plusSlides(n) {
  clearInterval(slideTimer); // Clear the auto-timer temporarily when a user clicks manually
  showSlides(slideIndex += n);
  startAutoSlides();         // Restart the automatic loop timer
}

// Thumbnail circle indicator controls
function currentSlide(n) {
  clearInterval(slideTimer);
  showSlides(slideIndex = n);
  startAutoSlides();
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  
  // Guard clause: Prevents script errors if elements aren't loaded yet
  if (!slides.length) return;
  
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  
  
  // Clean off the "active" label from all indicator dots
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  
  // Mount the current slide and highlight its tracking dot indicator
  slides[slideIndex-1].style.display = "block";
  if (dots[slideIndex-1]) {
    dots[slideIndex-1].className += " active";
  }
}

// Function to kick off the automatic looping tracker
function startAutoSlides() {
  slideTimer = setInterval(() => {
    showSlides(slideIndex += 1);
  }, 4000); // 4000ms = changes slides automatically every 4 seconds
}

// Safety Wrapper: Wait until the HTML markup loads completely before running
document.addEventListener("DOMContentLoaded", () => {
  showSlides(slideIndex);
  startAutoSlides();
});
