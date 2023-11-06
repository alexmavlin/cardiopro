import { fadeIn, fadeOut } from './functions';

const itemElements = document.querySelectorAll('.defGallery__content__item');
const boxElements = document.querySelectorAll('.defGallery__content__box');
const shadowElements = document.querySelectorAll('.defGallery__item__shadow');

let currentVisibleIndex = 0;

itemElements.forEach((item, index) => {
    item.addEventListener('click', () => {
        shadowElements[currentVisibleIndex].classList.remove('defGallery__shadow__none');
        

        fadeOut(boxElements[currentVisibleIndex], 500, () => {
            boxElements[currentVisibleIndex].classList.remove('defGallery__display');

            currentVisibleIndex = index;

            boxElements[currentVisibleIndex].classList.add('defGallery__display');

            shadowElements[currentVisibleIndex].classList.add('defGallery__shadow__none');

            fadeIn(boxElements[currentVisibleIndex], 500, () => {
            });
        });
    });
});

