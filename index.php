<?php

class Fizzbuzz
{
  const FIZZ = 3;
  const BUZZ = 5;

  function exec($limit_number) {
    for ($i = 1; $i < $limit_number; $i++) {
      echo $this->judge($i);
    }
  }

  function judge($num) {
      if (($num % self::FIZZ === 0) && ($num % self::BUZZ === 0)) {
        return "fizzbuzz<br>";
      } 
      if ($num % self::FIZZ === 0) {
        return "fizz<br>";
      } 
      if ($num % self::BUZZ === 0) {
        return "buzz<br>";
      } 
      return "$num<br>";
  }
}


$fb = new Fizzbuzz();
$fb->exec(100);
