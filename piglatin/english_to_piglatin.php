<?php

  echo 'Input your sentence to translate ' . PHP_EOL;

  $input = trim(fgets(STDIN));

  $sentence_array = explode(' ', $input);

  $new_sentence = array();
  $count = 1;

  foreach($sentence_array as $array) {
    $first_letter = strtolower(substr($array, 0, 1));

    $rest_of_word = substr($array, 1, strlen($array) - 1);

    $rest_of_word = substr($array, 1, strlen($array) - 1);

    if($count == 1) {
      $rest_of_word = ucfirst($rest_of_word);
    }
    $new_sentence[] = $rest_of_word . $first_letter . 'ay ';

    $count++;
  }

  echo implode($new_sentence);
