<!--  ## Challenge 2: Print Names In Uppercase 5pts

Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.

### Hints
  $names = ['Alice', 'Bob', 'Charlie', 'David'];
- You can use the `strtoupper` function to convert a string to uppercase.

  sample  output
        ALICE
        BOB
        CHARLIE
        DAVID -->
<?php

function printNamesToUpperCase($names) {
    foreach ($names as $name) {
        echo strtoupper($name) . "<br>";
    }
}

$names = ['Alice', 'Bob', 'Charlie', 'David'];
printNamesToUpperCase($names);

?>