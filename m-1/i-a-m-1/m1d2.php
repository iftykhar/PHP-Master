<?php


//OOP Basics of Ahmed Shamim Shaon


// live class o2 
$options = getopt('',['min::','max::']);

$min = (int)($options['min'] ?? 1);
$max = (int)($options['max'] ?? 100);

$number = rand($max,$min);



// echo $number;

while(true){
    $user_input = (int) readline("Enter a Number:");

    if($user_input > $number){
        printf("try a Lower number than this\n");
    }else if($user_input < $number){
        printf("try a Higher number than this\n");
    }else {
        printf("Entered the correct number");
        break;
    }
}