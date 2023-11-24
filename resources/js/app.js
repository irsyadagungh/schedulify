const menu = document.querySelector('.menu');
const side = document.querySelector('.side');

menu.addEventListener('click', function () {
    side.classList.toggle('-left-1/3');
    side.classList.toggle('left-0');
})