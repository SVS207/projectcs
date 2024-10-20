// Toggle Dropdown Menu for Menu Burger
function toggleMenu() {
    const menuDropdown = document.getElementById("menu-dropdown");
    menuDropdown.style.display = menuDropdown.style.display === "block" ? "none" : "block";
}
// Carousel functionality
let currentSlideIndex = 0;
showSlide(currentSlideIndex);
function changeSlide(step) {
    currentSlideIndex += step;
    showSlide(currentSlideIndex);
}
function showSlide(index) {
    const slides = document.getElementsByClassName("carousel-slide");
    // Looping slides
    if (index >= slides.length) {
        currentSlideIndex = 0;
    } else if (index < 0) {
        currentSlideIndex = slides.length - 1;
    }
    // Hide all slides and show the current one
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[currentSlideIndex].style.display = "block";
}
// Switch between tracking, schedule, and contact location sections
function showContent(contentId) {
    const contents = document.getElementsByClassName("content");
    for (let i = 0; i < contents.length; i++) {
        contents[i].style.display = "none";
    }
    document.getElementById(contentId).style.display = "block";
}
// Handle Profile Button Click - Placeholder
document.getElementById('profile-button').addEventListener('click', function() {
    alert("Profile functionality coming soon!");
});
// Dismiss the dropdown menu when clicking outside
window.onclick = function(event) {
    const menuDropdown = document.getElementById("menu-dropdown");
    if (event.target !== menuDropdown && event.target !== document.querySelector(".menu-burger")) {
        menuDropdown.style.display = "none";
    }
};
let sliderIndex = 0;

document.querySelector('.next').addEventListener('click', () => {
  const cardSlider = document.querySelector('.card-slider');
  const cards = document.querySelectorAll('.card');
  const cardWidth = cards[0].offsetWidth;
  
  sliderIndex = (sliderIndex + 1) % cards.length;
  cardSlider.style.transform = `translateX(-${sliderIndex * cardWidth}px)`;
});

document.querySelector('.prev').addEventListener('click', () => {
  const cardSlider = document.querySelector('.card-slider');
  const cards = document.querySelectorAll('.card');
  const cardWidth = cards[0].offsetWidth;
  
  sliderIndex = (sliderIndex - 1 + cards.length) % cards.length;
  cardSlider.style.transform = `translateX(-${sliderIndex * cardWidth}px)`;
});

