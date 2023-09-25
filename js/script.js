let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.addEventListener('click', function(){
    menu.classList.toggle('fa-x');
    navbar.classList.toggle('active');

})

const sectionAbout = document.querySelector('.navbar #section1');
const sectionEngagement = document.querySelector('.navbar #section2');
const sectionPrice = document.querySelector('.navbar #section3'); 

const section = [sectionAbout, sectionEngagement, sectionPrice].forEach(section => {
    section.addEventListener('click', function(){

        navbar.classList.toggle('active');
        menu.classList.toggle('fa-x');

    })
})

// swiper js

var swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,
});
