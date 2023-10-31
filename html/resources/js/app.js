import './header'
import './faq'
import './formule-location-achat-dae-dsa'
import './contact'

let buttons = document.querySelectorAll('.sale__slider button');
const frames = document.querySelectorAll('.sale__content');

if (buttons.length === 0) {
  buttons = document.querySelectorAll('.slider__group button');
}


if (buttons.length > 0) {
    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
          buttons.forEach(btn => btn.classList.remove('sale__button__active'));
        
          frames.forEach(frame => frame.classList.remove('sale__active__frame'));
        
          button.classList.add('sale__button__active');
        
          frames[index].classList.add('sale__active__frame');
        });
    });
}
