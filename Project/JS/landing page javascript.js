/*Slideshow*/

const images = document.querySelectorAll('.slideshow img');
const intervalTime = 5000;
let currentImageIndex = 0;
let slideshowInterval;

images[currentImageIndex].classList.add('active');

function startSlideshow() {
  slideshowInterval = setInterval(() => {
    images[currentImageIndex].classList.remove('active');

    currentImageIndex++;

    if (currentImageIndex >= images.length) {
      currentImageIndex = 0;
    }

    images[currentImageIndex].classList.add('active');
  }, intervalTime);
}

function stopSlideshow() {
  clearInterval(slideshowInterval);
}

startSlideshow();
