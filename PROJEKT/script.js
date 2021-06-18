

//===========================================================THEME==================================================================\\

const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
	document.body.classList.toggle('light');
});

chk.addEventListener('change', () => {
	document.getElementById('leftbar').classList.toggle('light');
});

const numCells = document.querySelectorAll('.game-cell');

for (const numCell of numCells) {
    chk.addEventListener('change', () => {
    numCell.classList.toggle('light');
});
}

//===========================================================GAME LOGIC==================================================================\\


const statusDiv = document.querySelector('.turns');
const resetDiv = document.querySelector('.reset');
const cellDivs = document.querySelectorAll('.game-cell');

// game constants
const xSymbol = '×';
const oSymbol = '○';

// game variables
let gameIsLive = true;
let xIsNext = true;


// functions
const letterToSymbol = (letter) => letter === 'x' ? xSymbol : oSymbol;


const handleWin = (letter) => {
    gameIsLive = false;
    if (letter === 'x') {
        statusDiv.innerHTML = `X has won!`;
    } else {
        statusDiv.innerHTML = `O has won!`;
    }
};

const checkGameStatus = () => {
    if (cellDivs[0].classList.length > 2) {
        var number = 2
    } else {
        var number = 1
    }

    const topLeft = cellDivs[0].classList[number];
    const topMiddle = cellDivs[1].classList[number];
    const topRight = cellDivs[2].classList[number];
    const middleLeft = cellDivs[3].classList[number];
    const middleMiddle = cellDivs[4].classList[number];
    const middleRight = cellDivs[5].classList[number];
    const bottomLeft = cellDivs[6].classList[number];
    const bottomMiddle = cellDivs[7].classList[number];
    const bottomRight = cellDivs[8].classList[number];

    // check winner
    if (topLeft && topLeft === topMiddle && topLeft === topRight) {
        handleWin(topLeft);
        cellDivs[0].classList.add('won');
        cellDivs[1].classList.add('won');
        cellDivs[2].classList.add('won');
    } else if (middleLeft && middleLeft === middleMiddle && middleLeft === middleRight) {
        handleWin(middleLeft);
        cellDivs[3].classList.add('won');
        cellDivs[4].classList.add('won');
        cellDivs[5].classList.add('won');
    } else if (bottomLeft && bottomLeft === bottomMiddle && bottomLeft === bottomRight) {
        handleWin(bottomLeft);
        cellDivs[6].classList.add('won');
        cellDivs[7].classList.add('won');
        cellDivs[8].classList.add('won');
    } else if (topLeft && topLeft === middleLeft && topLeft === bottomLeft) {
        handleWin(topLeft);
        cellDivs[0].classList.add('won');
        cellDivs[3].classList.add('won');
        cellDivs[6].classList.add('won');
    } else if (topMiddle && topMiddle === middleMiddle && topMiddle === bottomMiddle) {
        handleWin(topMiddle);
        cellDivs[1].classList.add('won');
        cellDivs[4].classList.add('won');
        cellDivs[7].classList.add('won');
    } else if (topRight && topRight === middleRight && topRight === bottomRight) {
        handleWin(topRight);
        cellDivs[2].classList.add('won');
        cellDivs[5].classList.add('won');
        cellDivs[8].classList.add('won');
    } else if (topLeft && topLeft === middleMiddle && topLeft === bottomRight) {
        handleWin(topLeft);
        cellDivs[0].classList.add('won');
        cellDivs[4].classList.add('won');
        cellDivs[8].classList.add('won');
    } else if (topRight && topRight === middleMiddle && topRight === bottomLeft) {
        handleWin(topRight);
        cellDivs[2].classList.add('won');
        cellDivs[4].classList.add('won');
        cellDivs[6].classList.add('won');
    } else if (topLeft && topMiddle && topRight && middleLeft && middleMiddle && middleRight && bottomLeft && bottomMiddle && bottomRight) {
        gameIsLive = false;
        statusDiv.innerHTML = 'Game is tied!';
    } else {
        xIsNext = !xIsNext;
        if (xIsNext) {
            statusDiv.innerHTML = `${xSymbol} is next`;
        } else {
            statusDiv.innerHTML = `<span>${oSymbol} is next</span>`;
        }
    }
};

// event Handlers
const handleReset = () => {
    xIsNext = true;
    statusDiv.innerHTML = `${xSymbol} is next`;
    for (const cellDiv of cellDivs) {
        cellDiv.classList.remove('x');
        cellDiv.classList.remove('o');
        cellDiv.classList.remove('won');
        document.getElementById("chk").disabled = false;
    }
    gameIsLive = true;
};

const handleCellClick = (e) => {
    document.getElementById("chk").disabled = true;
    const classList = e.target.classList;

    if (!gameIsLive || classList[classList.length-1] === 'x' || classList[classList.length-1] === 'o') {
        return;
    }

    if (xIsNext) {
        classList.add('x');
        checkGameStatus();
    } else {
        classList.add('o');
        checkGameStatus();
    }
};


// event listeners
resetDiv.addEventListener('click', handleReset);

for (const cellDiv of cellDivs) {
    cellDiv.addEventListener('click', handleCellClick);
}