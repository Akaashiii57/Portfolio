// document.addEventListener('DOMContentLoaded', function() {
//     const prevButton = document.querySelector('.carousel-control-prev');
//     const nextButton = document.querySelector('.carousel-control-next');
//     const carouselInner = document.querySelector('.carousel-inner');
//     const items = document.querySelectorAll('.carousel-item');
//     let currentIndex = 0;

//     function updateCarousel() {
//         carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
//         items.forEach((item, index) => {
//             item.classList.toggle('active', index === currentIndex);
//         });
//     }

//     prevButton.addEventListener('click', function() {
//         currentIndex = (currentIndex > 0) ? currentIndex - 1 : items.length - 1;
//         updateCarousel();
//     });

//     nextButton.addEventListener('click', function() {
//         currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0;
//         updateCarousel();
//     });

//     updateCarousel();
// });