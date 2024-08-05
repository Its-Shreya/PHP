<?php

// user defined, built in
// user defined: parameterized, non parameterized

// function fun_name(parameters){
//     function statements;
// }

function messages(){
    echo ("Welcome here"."<br>");
}

messages();

function messages_param($name){
    echo($name.", Welcome here");
}

messages_param("Sharon");


?>