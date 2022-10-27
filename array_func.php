<?php
  //counting array elements
  $fruits = ['apple', 'orange', 'pear'];
  echo count($fruits);

  echo '<br>';

  var_dump(in_array('apple', $fruits));

  echo '<br>';
  in_array('apple', $fruits);


  //add to the end of the array array
  echo '<br>';

  //way # one

  $fruits[] = 'grape';

  print_r($fruits);


  //way # two
  echo '<br>';

  array_push($fruits, 'pineaple', 'blueberry');

  print_r($fruits);

  //add to the beginnig of the array array
  echo '<br>';

  array_unshift($fruits, 'strawberry');

  print_r($fruits);

  //remove from the end
  echo '<br>';
  array_pop($fruits);
  print_r($fruits);

  //remove from the beginning
  echo '<br>';
  array_shift($fruits);
  print_r($fruits);


  //remove a specific element REMOVING INDEX TOO!!!
  echo '<br>';
  unset($fruits[2]);
  print_r($fruits);
  
  //if need to 'reindex' after that
  echo '<br>';

  $reindexed = array_values($fruits);
  print_r($reindexed);

  //breaking array down
  echo '<br>';
  $chuncked_array = array_chunk($reindexed, 2);

  print_r($chuncked_array);


  // mering arrays
  echo '<br>';
  echo '<br>';
  $arr1 = [1, 2, 3];
  $arr2 = [4, 5, 6];

  //first way
  $arr3 = array_merge($arr1, $arr2);

  print_r($arr3);

  //second way
  echo '<br>';
  $arr4 = [...$arr1, ...$arr2];

  print_r($arr4);


  //combining arrays
  echo '<br>';

  $comb1 = ['red', 'green', 'blue'];
  $comb2 = ['apple', 'avocado', 'blueberry'];

  $comb3 = array_combine($comb1, $comb2);

  print_r($comb3);

  //keys of the combined array

  echo '<br>';

  $keys_for_array = array_keys($comb3);

  print_r($keys_for_array);

  //flip the array (keys for values)

  $flipped = array_flip($comb3);
  echo '<br>';
  echo '<br>';

  print_r($comb3);
  echo '<br>';  
  print_r($flipped);


  //create a range from x to y

  $range = range(1, 20);

  echo '<br>';
  print_r($range);

  $newNumbers = array_map(fn($number) => $number . '<br>', $range);

  print_r($newNumbers);
?>