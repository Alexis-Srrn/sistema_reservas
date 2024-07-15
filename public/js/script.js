/** Para desblegar el navbar en el responsive*/
let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
}


/**Preguntas frecuentes */
document.querySelectorAll('.contact .row .faq .box').forEach(faqBox =>{
    faqBox.onclick = () =>{
        faqBox.classList.toggle('active');
    }
});


/** Swiper  */
var swiper = new Swiper(".home-slider", {
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    spaceBetween: 30,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


var swiper = new Swiper(".gallery-slider", {
    loop: true,
    effect: "coverflow",
    centeredSlides: true,
    slidesPerView: "auto",
    grabCursor: true,
    coverflowEffect: {
        rotate: -0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
});


var swiper = new Swiper(".reviews-slider", {
    loop: true,
    slidesPerView: "auto",
    grabCursor: true,
    spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        768: {
          slidesPerView: 1,
        },
        1200: {
          slidesPerView: 2,
        },
      },
});