let currentIndex = 0;
const images = document.querySelectorAll('.slider-image');

function showImage(index) {
    images.forEach((image, i) => {
        image.style.transform = `translateX(${100 * (i - index)}%)`;
    });
}

function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
}

setInterval(nextImage, 6000);
showImage(currentIndex);