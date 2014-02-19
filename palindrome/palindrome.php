<?php

function is_palindrome($str)
{
  $str = clean_str($str);
  $new_str = str_split($str);
  krsort($new_str);
  $new_str = implode('', $new_str);
  $bool = ($new_str == $str) ? TRUE : FALSE;
  return $bool;
}

function clean_str($str)
{
  $remove_array = array(" ", ",", "'", "\n");
  $str = strtolower(str_replace($remove_array, '',  $str));
  return $str;
}

echo 'Enter a palindrome phrase ';
$input = trim(fgets(STDIN));

if(is_palindrome($input)) {
  echo 'It is a palindrome';
} else {
  echo 'Not a palindrome';
}
