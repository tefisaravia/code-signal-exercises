
<?php

/*
From Code Signal Exercise: Check Palindorme

Given the string, check if it is a palindrome.

Example

For inputString = "aabaa", the output should be
solution(inputString) = true;
For inputString = "abac", the output should be
solution(inputString) = false;
For inputString = "a", the output should be
solution(inputString) = true.
*/

function solution($inputString) {
  $inputString = strtolower($inputString);
  $result = false;
  if ($inputString == strrev($inputString)) {
      $result = true;
  }
  return $result;
}