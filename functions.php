<?php

  $a = 1;
  function test() {
    //one way
    global $a;
    echo $a;
  };

  test();

  //another way
  echo '<br>';

  function test_two() {
    //one way
    echo $GLOBALS['a'];
  };

  test_two();

  echo '<br>';

  function function_and_arg($first_arg) {
    echo 'agrument' . ' "' . $first_arg . '" ';
  };

  function_and_arg('bob');

  echo '<br>';

  function sum($n1, $n2) {
    return $n1 + $n2;
  }

  echo sum(1,2);
  
  echo '<br>';

  function sum_def($n1 = 2, $n2 = 2) {
    return $n1 + $n2;
  }

  echo sum_def();

  //anon functions
  $sub = function ($n1, $n2) {
    return $n1 - $n2;
  };

  echo '<br>';

  echo $sub(10, 50);

  //arrow function
  $subtract = fn($n1, $n2) => $n1 - $n2;

  echo '<br>';

  echo $sub(55, 50);
?>