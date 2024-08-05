<?php

/* 

Arrays can have multiple datatypes

1. indexed array
2. associative array
3. multi-dimensional

array has to be printed using print_r
<pre> is html tag for formatting in spaced lines
else in same line

if use echo to print array, error
arr to string conversion not possible

*/

$arr = array('apple', 53, 7.87, true, null);
echo("<pre>");
print_r($arr);

// echo($arr[0]);
// $arr[3]="banana";
// print_r($arr);

// dynamic, no size declared

$arr[]="banana";
echo("<pre>");
print_r($arr);
// appends element to end of array

foreach($arr as $a){
    echo(var_dump($a));
}

// to append more items use loop else push
array_push($arr, "guava", "litchi","grapes");
echo("<pre>");
print_r($arr);

// indexed array

$arr1 = array(
    // "key"=>"value"
    "name"=>"Euphoria",
    "address"=>"Kolkata",
    "contact"=>123456789,
    "course"=>array(
        "java"=>array("springboot", "hybernet"),
        "python"=> array("Django", "Flask", "ml"),
        "php"=>array("wordpress","laravel", "core php"),
        "js"=>array("react js", "mern"=>array(
            "mongo db", "express js", "node js"
        ))
    )
);
// multi dimensional array


echo "<pre>";
print_r($arr1);

echo("<pre>");
print_r($arr1['course']['js']['mern']);
// shows nested array elements

echo($arr1['course']['js']['mern'][0]);

$arr2 = array(
    // "key"=>"value"
    "name"=>"Euphoria",
    "address"=>"Kolkata",
    "contact"=>123456789,
    "course"=>"java, c"
);

echo "<pre>";
print_r($arr2);
    

foreach($arr2 as $key => $value){
    echo($key." = ".$value."<br>");
}
//associative array

echo($arr2["name"]);
$arr2["num"]=6432;
echo "<pre>";
print_r($arr2);


?>