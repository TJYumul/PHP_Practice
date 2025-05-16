<?php

/*
## Challenge 2 - 15pts
*/

class StringUtility {

  // 1. shout: Uppercase + "!"
  public static function shout($string) {
    return strtoupper($string) . "!";
  }

  // 2. whisper: Lowercase + "."
  public static function whisper($string) {
    return strtolower($string) . ".";
  }

  // 3. repeat: Repeat string with space
  public static function repeat($string, $times = 2) {
    return str_repeat($string . " ", $times);
  }
}

// Display outputs
echo '<pre>';

echo StringUtility::shout('Hello World') . "\n";
echo StringUtility::whisper('Hello World') . "\n";
echo StringUtility::repeat('Hello World') . "\n";
echo StringUtility::repeat('Hello World', 5) . "\n";

echo '</pre>';
