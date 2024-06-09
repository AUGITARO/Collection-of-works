const buttonElement = document.querySelector('.button');

buttonElement.addEventListener('click', () => {
    buttonElement.classList.toggle('button--active');
});
