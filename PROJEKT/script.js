//buttons
document.getElementById("first-button").onclick = togglePopup;

// variables
let gamestatus = true;
let turn = true;

//HTML
const resetDiv = document.querySelector('.reset');
const cellDivs = document.querySelectorAll('.game-cell');
const statusDiv = document.querySelector('.turns');

const xSymbol = '×';
const oSymbol = '○';

// functions
const win = (letter) => {
    gamestatus = false;
    if (letter === 'x') {

    }
}

const letterToSymbol = (letter) => letter === 'x' ? xSymbol : oSymbol;

function togglePopup() {
    document.getElementById("popup-1").classList.toggle("active");
}

const tiles = () => {
    const topLeft = cellDivs[0].classList[1];
    const topMiddle = cellDivs[1].classList[1];
    const topRight = cellDivs[2].classList[1];
    const middleLeft = cellDivs[3].classList[1];
    const middleMidle = cellDivs[4].classList[1];
    const middleRight = cellDivs[5].classList[1];
    const bottomLeft = cellDivs[6].classList[1];
    const bottomMiddle = cellDivs[7].classList[1];
    const bottomRight = cellDivs[8].classList[1];

    if (topLeft && topLeft == topMiddle == topRight) {

    }


}

const CellClick = (e) => {
    const classList = r.target.classList;

    if (!gamestatus || classList[1] === 'x' || classList[1] === 'o') {
        return;
    }

    if (turn) {
        classList.add('x');
        tiles();
    } else {
        classList.add('o');
        tiles();
    }
}

for (const cellDiv of cellDivs) {
    cellDiv.addEventListener('click', CellClick)
}