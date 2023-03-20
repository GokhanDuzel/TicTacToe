const gameboard = document.querySelector(".gameboard");
const infos = document.querySelector(".info");

const initialBoard = [
    "", "", "",
    "", "", "",
    "", "", ""
];

const winningLines = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

let turn = "circle";
infos.textContent = "Circle's turn."

function createGameBoard() {
    initialBoard.forEach((item, index) => {
        const cell = document.createElement("div");
        cell.classList.add("box");
        cell.id = index;
        cell.addEventListener("click", clicking)
        gameboard.append(cell);
    });
}

function clicking(event) {
    const move = document.createElement("div");
    move.classList.add(turn);
    event.target.append(move);
    turn = turn === "circle" ? "square" : "circle";
    infos.textContent = turn + "'s turn."
    event.target.removeEventListener("click", clicking);
    checkForWinner();
};

function checkForWinner() {
    const boxes = document.querySelectorAll(".box")
    // console.log(boxes[0].firstElementChild.className);
    // console.log(turn);
    for(let i = 0; i < winningLines.length; i++) {
        const [x, y, z] = winningLines[i];

        console.log(i);
        console.log(x, y, z);
        console.log(boxes[x].firstElementChild.className);
        // second = boxes[y].firstElementChild.className;
        // third = boxes[z].firstElementChild.className;
        // console.log(first, second, third);
        // if(first === second === third){
        //     console.log("success");
        // } else {
        //     console.log("fail");
        // }
        // console.log(boxes[x].firstElementChild.className);
    };
    
};

createGameBoard();