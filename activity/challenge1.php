<?php
 /*
      Challenge 1: Sum of an array
      Follow the instructions below


      1. Create an array of numbers: 1,2,3,4,5
      2. Get the sum of all of the numbers combined and put into a variable. $sum
      3. Count the number of elements in the array and put into a variable. $quantity
      4. Print out 'The sum of the {quantity} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'.



 */

     
      echo '<h3> Sum of An Array</h3>';
     //Your Solution goes here...

     $numbers = [1,2,3,4,5];
     $sum = array_sum($numbers);
     echo $sum;

     echo '<h3> Count Number</h3>';
     $numbers = [1,2,3,4,5];
     $quantity = count($numbers);
     echo '<pre>';
     var_dump(count($numbers));
     echo '</pre>';


     echo "The sum of the $quantity numbers is: $sum";





?>