const carousel = document.querySelector('.carousel');
const carouselInner = document.querySelector('.carousel-inner');
const carouselItems = document.querySelectorAll('.carousel-item');
let currentIndex = 0;

function updateCarouselPosition() {
  carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
}

setInterval(() => {
  currentIndex = (currentIndex + 1) % carouselItems.length;
  updateCarouselPosition();
}, 3000); // Cambiar de imagen cada 3 segundos (ajusta el valor según tus preferencias)
mix.js('resources/js/script.js', 'public/js');