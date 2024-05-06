const containerElem = document.querySelector('.container');

const renderChessBoard = (boardSize) => {
    containerElem.style.width = boardSize * 100 + 2 + 'px';
    containerElem.style.height = boardSize * 100 + 2 + 'px';

    for (let row = 0; row < boardSize; row++) {
        for (let cell = 0; cell < boardSize; cell++) {
            const cardElem = document.createElement('div');
            cardElem.classList.add('card');
            containerElem.append(cardElem);
            if (((row % 2) === 0) && ((cell % 2) !== 0)) {
                cardElem.style.backgroundColor = 'black';
            } else if (((row % 2) !== 0) && ((cell % 2) === 0)) {
                cardElem.style.backgroundColor = 'black';
            }
        }
    }
}

const boardSize = +prompt('Введите размер доски');

renderChessBoard(boardSize);
