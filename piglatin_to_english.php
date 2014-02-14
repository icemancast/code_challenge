<?php

  echo 'Input your sentence to translate ' . PHP_EOL;

  $input = trim(fgets(STDIN));

  $sentence_array = explode(' ', $input);

  $new_sentence = array();
  $count = 1;

  foreach($sentence_array as $array) {

    $word = substr(strtolower($array), 0, -2);

    $last_letter = substr($word, -1);

    $rest_of_word = substr($word, 0, -1);

    if($count == 1) {
      $last_letter = ucfirst($last_letter);
    }
    $new_sentence[] = $last_letter . $rest_of_word . ' ';

    $count++;
  }

  echo implode($new_sentence);
