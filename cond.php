<?php
  echo 5 - true;
  

  $color = 'blue';

  switch($color) {
    case 'red':
      echo "You color is red";
      break;
    case 'blue':
      echo "You color is blue";
      break;
    case 'white':
      echo "You color is white";
      break;
    case 'green':
      echo "You color is green";
      break;
    default:
      echo "No color";
  }


  //for and while are known

  //foreach

  $posts = ['post one', 'post two', 'post three'];

  foreach($posts as $post) {
    echo '<br>' . $post;
  };

  foreach($posts as $index => $post) {
    echo '<br>' . $post . ' is ' . ' at index ' . $index;
  };

  //foreach with associative array
  $person = [
    'name' => 'John',
    'age' => 13,
    'city' => 'Poznan',
  ];

  foreach($person as $key => $value) {
    echo '<br>' . $key . ' with value ' . $value;
  }
?>