<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

//string
$name ='Monkey D. Luffy';
$name2 ='Roronoa Zoro';
var_dump($name2);
echo '<br>';
echo getType($name);
echo '<br>';

//integer
$age = 35;
var_dump($age);
echo '<br>';

//float
$rating = 4.5;
var_dump($rating);
echo '<br>';

//Boolean
$is_loaded = false;
var_dump($is_loaded);
echo '<br>';

//Array
$fruits = array('Apple', 'Banana', 'Mango');
var_dump($fruits);
echo '<br>';
echo getType($fruits);
echo '<br>';

//Object
$person = new stdClass();
var_dump($person);
echo '<br>';
echo getType($person);
echo '<br>';

//Null
$animal = null;
var_dump($animal);
echo '<br>';
echo getType($animal);


//Resource
$file = fopen('sample.txt','r');
echo getType($file); //resource



 