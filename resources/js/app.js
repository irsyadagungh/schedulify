
import 'preline'

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


const item = document.querySelector('.panel');
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      this.classList.toggle('rounded-b-none');
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }


  