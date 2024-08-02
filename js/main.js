// navegation
document.querySelector(".menu-btn").addEventListener("click", () => {
  document.querySelector(".nav-menu").classList.toggle("show");
  document.querySelector(".fa-house").classList.toggle("hidden");
  document.querySelector(".fa-cart-shopping").classList.toggle("hidden");
  document.querySelector(".fa-tags").classList.toggle("hidden");
});

// most s-products
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
