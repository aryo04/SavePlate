let currentIndex = 0;
const images = [
    '../images/promomcd.jpg',
    '../images/promofo.jpg',
    '../images/promokfc.jpg',
];

function changeImage(direction) {
    currentIndex += direction;

    if (currentIndex < 0) {
        currentIndex = images.length - 1; // Loop to last image
    } else if (currentIndex >= images.length) {
        currentIndex = 0; // Loop to first image
    }

    document.getElementById('carousel-image').src = images[currentIndex];
}