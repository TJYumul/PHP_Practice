<!--  
# Function Challenges
Up to this point in the course, we have looked at variables, arrays, loops, conditionals, and functions. We will now put all of this knowledge together to solve some problems.

## Challenge 1: Fahrenheit to Celsius 3pts
Write a function called `fahrenheitToCelsius` that takes a temperature in Fahrenheit as an argument and returns the temperature in Celsius.

  - Create a named function called `fahrenheitToCelsius` that takes a fahrenheit temperature as an argument. 
  - Return the temperature converted to Celsius.
  - Print to the screen like "68F = 20C. You can use the &deg; entity for the degrees symbol. and 3
    &degC for celsius
  - For extra points, convert to an arrow function +2pts

    sample output   68°F = 20° -->

    <?php

$fahrenheitToCelsius = fn($fahrenheit) => ($fahrenheit - 32) * 5 / 9;

$temperatureFarenheit = 68;
$temperatureCelcius = $fahrenheitToCelsius($temperatureFarenheit);

echo "{$temperatureFarenheit}&deg;F = " . round($temperatureCelcius) . "&deg;C";
?>
