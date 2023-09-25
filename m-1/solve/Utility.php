<?php

class Utility{
    public static function getAlphaCount(string $input): int{
        $chars = str_split($input);
        $count = 0;

        foreach($chars as $char){
            if(ctype_alpha($char)){
                $count++;
            }
        }
        return $count;
    }
}

// if($argc < 2){
//     exit('provide at least one input');
// }

// $input = $argv[1];
// $chars = str_split($input);
// $count = 0;

// foreach($chars as $char){
//     if(ctype_alpha($char)){
//         $count++;
//     }
// }

// printf('alphabet: %d',$count) ;