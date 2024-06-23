// Array of image URLs (to be fetched from database)
let images = [
    { src: 'image1.jpg', description: 'Description for image 1' },
    { src: 'image2.jpg', description: 'Description for image 2' },
    { src: 'image3.jpg', description: 'Description for image 3' },
    { src: 'image4.jpg', description: 'Description for image 4' },
    { src: 'image5.jpg', description: 'Description for image 5' },
    { src: 'image6.jpg', description: 'Description for image 6' },
    { src: 'image7.jpg', description: 'Description for image 7' },
    { src: 'image8.jpg', description: 'Description for image 8' }
];

// Index to track current image
let currentIndex = 0;

// DOM elements
const galleryImage = document.getElementById('galleryImage');
const imageDescription = document.getElementById('imageDescription');
const prevButton = document.getElementById('prevButton');
const nextButton = document.getElementById('nextButton');
const finishButton = document.getElementById('finishButton');

// Function to update the displayed image
function updateImage() {
    galleryImage.src = images[currentIndex].src;
    imageDescription.textContent = images[currentIndex].description;

    // Show/hide next, back, and finish buttons based on current index
    if (currentIndex === 0) {
        prevButton.style.display = 'none';
        nextButton.style.display = 'inline-block';
        finishButton.style.display = 'none';
    } else if (currentIndex > 0 && currentIndex < images.length - 1) {
        prevButton.style.display = 'inline-block';
        nextButton.style.display = 'inline-block';
        finishButton.style.display = 'none';
    } else if (currentIndex === images.length - 1) {
        prevButton.style.display = 'inline-block';
        nextButton.style.display = 'none';
        finishButton.style.display = 'inline-block';
    }
}

// Event listener for previous button
prevButton.addEventListener('click', function() {
    if (currentIndex > 0) {
        currentIndex--;
        updateImage();
    }
});

// Event listener for next button
nextButton.addEventListener('click', function() {
    if (currentIndex < images.length - 1) {
        currentIndex++;
        updateImage();
    }
});

// Event listener for finish button (redirects to final page)
finishButton.addEventListener('click', function() {
    // Replace with your final page URL
    window.location.href = 'final-page.html';
});

// Initial image display
updateImage();
