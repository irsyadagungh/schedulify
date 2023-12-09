// TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com 
import Accordion from 'accordion-js';
import 'accordion-js/dist/accordion.min.css';

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
    //   item.classList.toggle('p-4');
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }