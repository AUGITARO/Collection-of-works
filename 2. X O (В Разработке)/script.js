const boardElement = document.querySelector('.board');

let currentPlayer = 'x';

for (let i = 0; i < 9; i++) {
    const boardItemElement = document.createElement('div');
    boardItemElement.classList.add('board-item');
    boardItemElement.dataset.value = 0;
    boardElement.append(boardItemElement);
}

boardElement.addEventListener('click', (evt) => {
    if (evt.target.dataset.value === '0') {
        evt.target.dataset.value = 1;
        evt.target.textContent = currentPlayer;
        currentPlayer = currentPlayer === 'x' ? 'o' : 'x';
        check();
    }
});

// проверка

// const boardItemElement1 = document.querySelector('.board-item:nth-child(1)');
// const boardItemElement2 = document.querySelector('.board-item:nth-child(2)');
// const boardItemElement3 = document.querySelector('.board-item:nth-child(3)');

// const check = () => {
//     if (
//         boardItemElement1.textContent !== ''
//         && (
//             boardItemElement1.textContent === boardItemElement2.textContent
//             && boardItemElement2.textContent === boardItemElement3.textContent
//         )
//     ) {
//         boardItemElement1.classList.add('board-item--active');
//         boardItemElement2.classList.add('board-item--active');
//         boardItemElement3.classList.add('board-item--active');
//     }
// };