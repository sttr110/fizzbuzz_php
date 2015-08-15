<?php

class Fizzbuzz
{
  const $FIZZ = 3;
  const $BUZZ = 5;

  function exec($num) {
    echo "hello $num";
  }
}


$fb = new Fizzbuzz();
$fb.exec(20);
