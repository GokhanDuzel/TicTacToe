const gameboard = document.querySelector(".gameboard");
const infos = document.querySelector(".infos");

const initialBoard = [
    "", "", "", 
    "", "", "",
    "", "", ""
];

function createGameBoard() {
    initialBoard.forEach((cell, index) => {
        const cellElem = document.createElement("div");
        cellElem.classList.add("box");
        gameboard.append(cellElem);
    });
}

createGameBoard();