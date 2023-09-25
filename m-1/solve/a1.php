<?php



require_once './Utility.php';

if($argc < 2){
    exit("please provide an input:");

}


printf("total alphabet: %d", Utility::getAlphaCount($argv[1]));















#way one/1
// if($argc < 2){
//     exit("provide minimum an input");
// }

// $input = $argv[1];
// // $stringlen = strlen($input);
// $chars = str_split($input);
// // var_dump($chars);
// $count = 0;

// foreach($chars as $char){
//     if(ctype_alpha($char)){
//         $count++;
//     }
// }
// for($i = 0 ;$i < $stringlen; $i++){

//     if(ctype_alpha($input[$i])){
//         $count++;
//     }
// }

// printf("Alphabet : %d", $count);
