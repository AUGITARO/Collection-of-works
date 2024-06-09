const prevButtonElement = document.querySelector('.prev');
const nextButtonElement = document.querySelector('.next');
const sliderItems = document.querySelectorAll('.slider-item');

const sliderItemWidth = sliderItems[0].offsetWidth;

const margins = Array.from(
    {length: sliderItems.length},
    (elem, i) => i * -sliderItemWidth
);

let i = 0;

const changeSlide = (evt) => {
    evt.preventDefault();
    const next = evt.currentTarget.classList.contains('next');

    if (i === (next ? sliderItems.length - 1 : 0)) {
        i = next ? 0 : sliderItems.length - 1;
    } else {
        next ? i++ : i--;
    }

    sliderItems[0].style.marginLeft = margins[i] + 'px';
};

prevButtonElement.addEventListener('click', changeSlide);
nextButtonElement.addEventListener('click', changeSlide);
