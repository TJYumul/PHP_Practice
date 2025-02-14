<?php
//Array functions

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];


echo '<pre>';
var_dump(count($users));
echo '</pre>';

//ascending order
sort($users);
echo '<pre>';
// var_dump($users);
echo '</pre>';

//descending order
rsort($ids);
rsort($users);

echo '<pre>';
// var_dump($ids);
echo '</pre>';

array_push($ids, 100);
array_push($users, 'user4');

//functions inserts one or more elements
echo '<pre>';
// var_dump($users);
echo '</pre>';

// remove the last element
array_pop($ids);
array_pop($users);

echo '<pre>';
// var_dump($users);
echo '</pre>';

//remove the first elemets
array_shift($ids);
array_shift($users);

echo '<pre>';
// var_dump($users);
echo '</pre>';

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

//insert new elements in beginning index[0]
array_unshift($ids, 200);
array_unshift($users, 'user5');

echo '<pre>';
// var_dump($users);
echo '</pre>';

$ids = [5, 5, 5, 5, 5, 5];
$users = ['user2', 'user1', 'user3'];


//function returns selected parts or an array
$ids2 = array_slice($ids, 1, 3);


echo '<pre>';
// var_dump($ids2);
echo '</pre>';


// returns sum of all the values in the array
$output = 'Sum of IDs: ' . array_sum($ids);
// echo $output;


// search an array for value 
$output = 'User 2 is at index: ' . array_search('user1', $users);
// echo $output;

// breaks a string into an array
$tags = 'tech,code,programming';

$tagsArr = explode(',', $tags);

echo '<pre>';
var_dump($tagsArr);
echo '</pre>';

// array into stirng
$output = implode(', ', $users);

echo $output;

