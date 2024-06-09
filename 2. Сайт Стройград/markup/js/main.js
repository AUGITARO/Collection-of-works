const overlayElement = document.querySelector('.overlay');
const orderModalElement = document.querySelector('.order-modal');
const openModalBtnElement = document.getElementById('modal-button');

const OVERLAY_TRANSITION_DURATION = 800;
document.documentElement.style.setProperty(
    '--overlay-transition-duration',
    `${OVERLAY_TRANSITION_DURATION}ms`
);

const openModal = (evt) => {
    evt.preventDefault();
    document.body.style.overflow = 'hidden';
    overlayElement.style.display = 'block';
    
    setTimeout(() => {
        document.body.classList.add('modal--active');
    }, 0);
};

const closeModal = () => {
    document.body.classList.remove('modal--active');
    
    setTimeout(() => {
        document.body.style.overflow = 'auto';
        overlayElement.style.display = 'none';
    }, OVERLAY_TRANSITION_DURATION);
};

openModalBtnElement.addEventListener('click', openModal);
overlayElement.addEventListener('click', closeModal);
