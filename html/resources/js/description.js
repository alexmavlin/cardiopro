const buttons = document.querySelectorAll('.defDescription__button');
const descriptionItems = document.querySelectorAll('.defDescription__item');

buttons.forEach((button, index) => {
    button.addEventListener('click', () => {
        descriptionItems.forEach(item => {
            item.classList.remove('defDescription__active');
        });

        descriptionItems[index].classList.add('defDescription__active');
    });
});
