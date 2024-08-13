// get menu button for mobile devices 
let menuButton = document.querySelector("#menu-btn");
let navigations = document.querySelector('.navigations ul');

// event listen on menu btn to active the nav par and tern the menu icon to 'X' icon 
menuButton.addEventListener('click', () => {
    navigations.classList.toggle('active');
    menuButton.classList.toggle('fa-times');
});


let scrollBtn = document.querySelector('.scroll-to-top');

let footer = document.querySelector('footer');

window.onscroll = () => {
    menuButton.classList.remove('fa-times');
    navigations.classList.remove('active');
    if (window.scrollY >= 500) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            scrollBtn.style.bottom = '70px';
        } else {
            scrollBtn.style.bottom = '20px';
        }
        scrollBtn.style.display = 'block';
    } else {
        scrollBtn.style.display = 'none';
    }
};

scrollBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
    });
});


// swiper js controle.

var swiper = new Swiper(".swiper", {
    spaceBetween: 20,
    grabCursor: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        540: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});