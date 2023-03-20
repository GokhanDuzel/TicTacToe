<?php
require_once('_config.php');

$path = $_GET["action"] ?? "version";

switch ($path) {
case "/TicTacToe/new":
    $game = new TicTacToe();
    $json = $game->toEncodedJson();
    break;

default:
    $json = json_encode(["error" => "Unknown path {$path}"]);
}

header("Content-Type: application/json");
echo $json;
