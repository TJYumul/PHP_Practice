<!-- ## Challenge 3: Find the longest word 10pts

Let's do something a bit harder.

1. Create a function called `findLongestWord` that takes a sentence as an argument.
2. The function should return the longest word in the sentence.

### Hints

- You will need to use the `explode` function to split the sentence into an array of words.
- You will need to use the `strlen` function to find the length of each word.
- You will need to use a loop to loop through the array of words.
- You will need to use a conditional to check if the current word is longer than the longest word you have found so far.


It it should look like this:

$sentence = 'The quick brown fox jumped over the lazy dog';
$longestWord = findLongestWord($sentence);
echo $longestWord; // should print 'jumped'


ouput
jumped -->

<?php


function findLongestWord($sentence) {
    $words = explode(" ", $sentence); 
    $longestWord = "";

    foreach ($words as $word) {
        if (strlen($word) > strlen($longestWord)) {
            $longestWord = $word; 
        }
    }

    return $longestWord;
}

$sentence = 'The quick brown fox jumped over the lazy dog';
$longestWord = findLongestWord($sentence);
echo $longestWord; // should print 'jumped'

?>