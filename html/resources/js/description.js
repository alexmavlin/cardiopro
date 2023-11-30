const defDescriptionElement = document.getElementById('defDescription')
const buttons = document.querySelectorAll('.defDescription__button');
const descriptionItems = document.querySelectorAll('.defDescription__item');


if (defDescriptionElement) {
    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            buttons.forEach(function(element) {
                element.classList.remove('defDescription__active__button')
            })
            descriptionItems.forEach(item => {
                item.classList.remove('defDescription__active');
            });

            button.classList.add('defDescription__active__button')
            descriptionItems[index].classList.add('defDescription__active');
        });
    });
}
