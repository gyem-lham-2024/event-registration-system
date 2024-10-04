let currentSlide = 0; // Index of the current slide
const slides = document.querySelectorAll('.slide'); // Get all slides
const totalSlides = slides.length; // Total number of slides

// Function to show the current slide
function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = (i === index) ? 'block' : 'none'; // Show current slide, hide others
    });
}

// Function to move to the next or previous slide
function moveSlide(direction) {
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides; // Calculate new index
    showSlide(currentSlide); // Show the new slide
}

// Automatically change slides every 5 seconds
setInterval(() => {
    moveSlide(1); // Move to the next slide automatically
}, 10000);

// Show the first slide initially
showSlide(currentSlide);

// Function to handle event registration
function registerEvent(eventName) {
    alert("You have registered for " + eventName + "!");
}
// Get the search input and event cards
const searchInput = document.getElementById('event-search');
const eventCards = document.querySelectorAll('.event-card');

// Listen for input in the search bar
searchInput.addEventListener('input', function () {
    const searchTerm = searchInput.value.toLowerCase(); // Convert input to lowercase for comparison

    eventCards.forEach(card => {
        const eventKeywords = card.getAttribute('data-event'); // Get event keywords from data attribute
        if (eventKeywords.toLowerCase().includes(searchTerm)) {
            card.style.display = 'block'; // Show event if it matches
        } else {
            card.style.display = 'none'; // Hide event if it doesn't match
        }
    });
});


