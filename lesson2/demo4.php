<?php 
$output = null; 
$user = null; 


$fruits = [
 //y  //0     //1   
    ['Apple', 'Red'], //0
    ['Oranges','Orange'], //1
    ['Banana','Yellow'] //2
];

$output = $fruits[2][1];

//multi-dimensional associative array
$users = [
    [   //0
        'name' => 'John', 
        'email'=> 'john@gmail.com',
        'password' => 'secret'
    ],
    [   //1
        'name' => 'Mary', 
        'email'=> 'mary@gmail.com',
        'password' => 'secret'
    ],
    [   //2
        'name' => 'Jane', 
        'email'=> 'jane@gmail.com',
        'password' => 'secret'
    ]
]; 

$output = $users[0]['name'];

$users[] =    [   //0
    'name' => 'John', 
    'email'=> 'john@gmail.com',
    'password' => 'secret'
],

array_pop($users);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP from scratch</title>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 text white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl">PHP Multidimension Array</h1>
        </div>
    </header>   
    <div class="container mx-auto p-5 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- OUTPUT -->
            <p class="text-xl font-semibold">Output: <?= $output?></p>
            <h2 class="text-xl font-semibold my-4">User Array: </h2>
            <pre><?php print_r($users); ?></pre>
        </div>
    </div>
</body>
</html>