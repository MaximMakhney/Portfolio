const hamburger = document.querySelector('.hamburger'),
        menu = document.querySelector('.menu'),
        overlay = document.querySelector('.menu__overlay'),
        close = document.querySelector('.menu__close');

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
});

close.addEventListener('click', () => {
    menu.classList.remove('active');
});

overlay.addEventListener('click', () => {
    menu.classList.remove('active');
})