<?php

class Fizzbuzz
{
  const FIZZ = 3;
  const BUZZ = 5;

  function exec($num) {
    for($i = 1; $i < $num; $i++) {
      if(($i % self::FIZZ == 0) && ($i % self::BUZZ == 0)) {
        echo "fizzbuzz<br>";
      } else if($i % self::FIZZ == 0) {
        echo "fizz<br>";
      } else if($i % self::BUZZ == 0) {
        echo "buzz<br>";
      } else {
        echo "$i<br>";
      }
    }
  }

}


$fb = new Fizzbuzz();
$fb->exec(20);
