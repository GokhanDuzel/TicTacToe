<?php
class TicTacToe {

  public $grid;
  public function __construct()
  {
    $this->resetGame();
  }

  public function resetGame() {
    $this->grid = [
      "", "", "",
      "", "", "",
      "", "", ""
    ];
  }

  public function toJson() {
    return [
      "grid" => $this->grid,
    ];
  }

  public function toEncodedJson() {
    return json_encode($this->toJson());
  }

}
