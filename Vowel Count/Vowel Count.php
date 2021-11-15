<?php

// https://www.codewars.com/kata/54ff3102c1bad923760001f3

function getCount($str) {
    $vowelsCount = 0;
    $arr = ["a", "e", "i", "o", "u"];
    
    for($i = 0; $i < strlen($str); $i++) {
      if(in_array($str[$i], $arr))
          $vowelsCount++;
    }
    return $vowelsCount;
  }