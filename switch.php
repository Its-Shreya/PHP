<?php

$choice=1;
switch($choice){
    case 1:
        echo((1)."<br>");
        break;
    case 2:
        echo(2);
        break;
    default:
        #some code
        break;
}

$marks=90;
switch($marks){
    case ($marks<40):
        echo("Fail");
        break;
    case ($marks>=40 and $marks<80):
        echo("Pass");
        break;
    case ($marks>=80):
        echo("Topper");
        break;
    default:
        #some code
        break;
}

$calc="Add";
$a=5;
$b=2;
switch($calc){
    case "Add":
        echo(($a+$b)."<br>");
        break;
    case "Sub":
        echo(($a-$b)."<br>");
        break;
    case "Mul":
        echo(($a*$b)."<br>");
        break;
    case "Div":
        echo(($a/$b)."<br>");
        break;  
    default:
        #some code
        echo("Give correct function");loops
        break;
}

?>