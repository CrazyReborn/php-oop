<?php 
  $numbers = [1, 4, 5, 6];
  $fruits = array('apple', 'orange', 'peer');

  //printing array
  print_r($fruits);

  //new line
  echo '<br>' . $fruits[0];
  echo nl2br("\ntomato");

  //associative array
  $assoarray = [
    0 => 'red',
    3 => 'blue',
    6 => 'white',
  ];

  echo nl2br(PHP_EOL . $assoarray[0]); ///PHP_EOL is a for a newline char in cross-platform env


    //another associative array
    $assoarray_two = [
      'red' => '#f00',
      'blue' => '#0f0',
      'gree' => '#00f',
    ];
  
    echo nl2br(PHP_EOL . $assoarray_two['red']); ///PHP_EOL is a for a newline char in cross-platform env

    echo '<br>';

    echo json_encode($assoarray_two);
?>