<?php

  for($i = 99; $i >= 1; $i--)
  {

    if($i != 99) echo "{$i} {$bottles} of beer on the wall." . PHP_EOL;

    $bottles = ($i == 1) ? 'bottle' : 'bottles';

    echo "{$i} {$bottles} of beer on the wall, {$i} {$bottles} of beer.
      Take one down and pass it around, ";

    if($i == 1) echo "Damnit who drank all the beer?" . PHP_EOL;
  }
