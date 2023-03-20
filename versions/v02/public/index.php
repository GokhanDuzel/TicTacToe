<?php
require_once('_config.php');

trait Dice {
  public function roll() {
    echo rand(0, 6);
  }
}
class Dice1 {
  use Dice;
}


$d = new Dice1();

for ($i=1; $i<=5; $i++) {
  echo "ROLL {$i}: {$d->roll()}<br>";
}
