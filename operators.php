<?php

/*
Arithmetic Operators - + / * % **
 */

echo((5+6)."<br>");
$a=3;
$b=5;
echo("<br>".$b-$a);

// Assignment =, +=, -=, *=, /=, %=, **=
$a += $b; // $a= $a + $b
echo "<br>".$a;

$a -= $b;
echo "<br>".$a;

$a *= $b;
echo "<br>".$a;

$a /= $b;
echo "<br>".$a;

// Comparison ==, ===, !=, !==, >, <, >=, <=

echo($a==$b."<br>");
// shows blank screen = nothing = false
// gives 1 if true



$c="5";
$d = 5;
echo(($c==$d)."<br>");
echo($c===$d);

// === identical , compares datatype too
// ==, compares value, not datatype


echo(($c!=$d));
echo(($c!==$d));

// Increment, Decrement $a++, ++$a, $a-- etc
$a++; // post increment
++$a; //pre increment

//Logical Operator and &&,  or ||,  xor
//combine two or more expressions

echo($a>$b && $a>$c);

//concatenation operator . or .=
$a.=$b;
echo($a.$b);

?>