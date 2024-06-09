const mainHeaderNavElement = document.querySelector('.main-header-nav');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        mainHeaderNavElement.classList.add('main-header-nav--active');
    } else {
        mainHeaderNavElement.classList.remove('main-header-nav--active');
    }
});
