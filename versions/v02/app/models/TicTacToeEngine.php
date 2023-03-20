<?php

    $initialBoard = [
        "", "", "",
        "", "", "",
        "", "", ""
    ];

    $winningLines = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];

    $turn = "circle";
    $infos = "Circle's turn.";

    function createGameBoard() {
        global $initialBoard;

        foreach($initialBoard as $index => $item) {
            echo "<div class='box' id='$index' onclick='clicking(event)'></div>";
        }
    }

    function clicking($event) {
        global $turn, $infos;
        $move = "<div class='$turn'></div>";
        echo "<script>document.getElementById('" . $event["target"]->getAttribute("id") . "').innerHTML += '$move';</script>";
        $turn = $turn === "circle" ? "square" : "circle";
        $infos = $turn . "'s turn.";
        checkForWinner();
    };

    function checkForWinner() {
        global $winningLines;

        for($i = 0; $i < count($winningLines); $i++) {
            [$x, $y, $z] = $winningLines[$i];
            $boxes = $_GET["boxes"];
            $first = $boxes[$x];
            $second = $boxes[$y];
            $third = $boxes[$z];

            if($first === $second && $second === $third && $third !== "") {
                echo "<script>alert('$first wins!');</script>";
                return;
            }
        }
    };

?>
