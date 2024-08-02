//- terms
window.onload = function() {
  var modal = document.getElementById('terms-termsModal');
  modal.style.display = 'block';

  var acceptBtn = document.getElementById('terms-acceptBtn');
  var rejectBtn = document.getElementById('terms-rejectBtn');

  acceptBtn.onclick = function() {
    modal.style.display = 'none';
  }
  rejectBtn.onclick = function() {
    window.location.href = 'https://www.google.com';
  }
}

//- navegation
document.querySelector(".menu-btn").addEventListener("click", () => {
  document.querySelector(".nav-menu").classList.toggle("show");
});

//- most s-products
const sliderWrapper = document.querySelector('.sp-slider-wrapper');
const slides = document.querySelectorAll('.sp-slider-wrapper img');
const totalSlides = slides.length;
const imageWidth = 350; 
const slideMargin = 20;

let index = 0;

function moveSlider() {
  const offset = index * (imageWidth + slideMargin);
  
  sliderWrapper.style.transform = `translateX(-${offset}px)`;
  
  if (index >= totalSlides - 1) {
    setTimeout(() => {
        sliderWrapper.style.transition = 'none'; 
        index = 0;
        sliderWrapper.style.transform = `translateX(0px)`;
        setTimeout(() => {
            sliderWrapper.style.transition = 'transform 0.5s ease';
            moveSlider();
        }, 50); 
    }, 3000); 
  } 
  else {
    index++;
    setTimeout(moveSlider, 3000);
  }
}

moveSlider();
