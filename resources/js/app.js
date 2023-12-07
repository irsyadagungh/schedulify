

window.onscroll = function () {
    const head = document.getElementById('header');
    const scroll = head.offsetTop;
    if (window.scrollY > scroll) {
        head.classList.add('fixed');
        head.classList.add('z-10');
    } else {
        head.classList.remove('fixed');
        head.classList.remove('z-10');
    }
}
const menu = document.querySelector('.menu');
const side = document.querySelector('.side');

menu.addEventListener('click', function () {
    side.classList.toggle('-left-2/3');
    side.classList.toggle('left-0');
    console.log('Menu clicked');
});