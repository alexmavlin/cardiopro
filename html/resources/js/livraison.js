const list = document.querySelector('.livraisonSlider__list');
const scrollAmount = 358; 

const leftButton = document.querySelector('.livraisonSlider__button__left');
const rightButton = document.querySelector('.livraisonSlider__button__right');


if (list) 
{
    leftButton.addEventListener('click', () => {
        list.scrollLeft -= scrollAmount;
    });
    
    rightButton.addEventListener('click', () => {
        list.scrollLeft += scrollAmount;
    });
}