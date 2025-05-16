<?php
/*
 Challenge 2: Get the sum of the numbers in an array by using a foreach loop and for loop. 
*/

$numbers = [1, 2, 3, 4, 5]; //sum using foreach loop
$numbers2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 19];  //sum using for loop

// foreach loop
$sum_foreach = 0;
foreach ($numbers as $num) {
    $sum_foreach += $num;
}

echo "Sum array using foreach loop ";
echo $sum_foreach;

echo "<br/>";

// for loop
$sum_for = 0;
for ($i = 0; $i < count($numbers2); $i++) {
    $sum_for += $numbers2[$i];
}

echo "Sum array using for loop ";
echo $sum_for;

?>
