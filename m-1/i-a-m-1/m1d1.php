<?php
declare(strict_types=1);
/**
 * v1
 */
// data types in php 

// interger 
$int  = 10;
echo $int;
echo PHP_EOL;
// float 
$float = 10.4;
echo $float + 9.3;
echo PHP_EOL;
echo gettype($float);

// string 
echo 'single quote string ';
echo PHP_EOL;
echo "double quote string";

// boolean 
echo PHP_EOL.true;
echo false;

// arry 
$ar = array('a','b','c');
var_dump($ar);
print_r($ar);

// null 
echo NULL;
var_dump(null);

// object 
class neo{


}

echo var_dump(new neo);
echo PHP_EOL;
/*
v2
*/

// type hinting in php 

$nom = '29';

// echo var_dump($nom + 1);
echo $nom+1;

function subtrac(int $age, string $name){
    echo "\ndu $name bist ". 2023-$age ."yearn alt";
};
echo subtrac(1991,"Hans");

/**
 * v3
 */

//  type casting 
// casting the exact type of data or more like stirct the data type for individual lines 

// example code for type casting

// the six data types int,float,string,boolean, array,object can be casted 
echo PHP_EOL;
// let us see this use into a function 

function voterVarify(int $vage){

    if($vage >= 18){
        echo "Congratulation \n you are a citizen and earned the right to vote\n";
    }elseif($vage < 18){
        echo "Sorry \n You are not varified yet to vote";
    }
};

$vari = '49';

voterVarify((int)$vari); // the int in the first bracekt is the use of type cast where i turn a string into integer 

// lets use all the datatypes to show typecasting one by one or at least try to do it 
$s1 = "string";
$in1 = 20;
$f1 = 10.22;

$mix = "200 meters";

echo "\n".(string)$mix;


/**
 * v4
 */
#variable 

// vairable starts with $ symbol 

// three types of variable local , global and supergloabl

$golobal = "golobal";

function loco(){
    $local = "local";
    echo $local;
}
echo  PHP_EOL.$golobal.PHP_EOL;
loco();

/**
 * v5
 */

 #Array

 $customer = ['samsung','nokia','motorola'];
 print_r($customer);
//  multilayer array 
echo PHP_EOL;
$custlevel = [
        [
            [011,111],11,12
        ],
        [02,12],
        2
    ];

// echo $custlevel[0][2];


/**
 * v6
 *
 */

 #array manipulation

// count() , sort(), unique(), array_search(), array_slice(),array_shift(),array_unshift(),array_pop(),array_push() 

echo PHP_EOL;
$tarray = ['joe','trump','barak','bush','clinton'];
echo '<br>';
echo '<br>';echo PHP_EOL;
// var_dump(count($tarray));

$aa = [2,4,3,5,1,3,4];
sort($aa);
print_r($aa) ;
echo '<br>';echo PHP_EOL;

$aunq = ['joe','trump','barak','joe','trump','barak','joe','trump'];
array_unique($aunq);
print_r($aunq);

echo array_search("barak",$tarray).PHP_EOL;

var_dump(array_slice($aunq,3));

$ting = ['army','navy','airforce','marin','special unites'];
var_dump(array_shift($ting));
print_r($ting);
array_pop($ting);
print_r($ting);
array_push($ting,'president gurd unit');
print_r($ting);
array_unshift($ting,'president');
print_r($ting);
echo "\n".PHP_EOL;

/**
 * v7
 */

 #php builtin funcitons 

 // strlen(), ucfirst(), lcfirst(),strtoupper(),strtolower(),ucwords(), srt_word_count(),explode(),implode(),join(),number_formate(),date(),time(),file_get_contents(),unlink(),file_exist()

 echo "<br>".PHP_EOL;
 $myn = 'george orwell jackeson martin';
 echo "<br>".PHP_EOL.strlen($myn);
//  strlen($myn);
echo '<br>'.ucfirst($myn).'<br>';
echo '<br>'.lcfirst(ucfirst($myn)).'<br>';
echo '<br>'.strtoupper($myn).'<br>';
echo '<br>'.strtolower(strtoupper($myn)).'<br>';
echo '<br>'.str_word_count(ucwords($myn)).'<br>';

// print_r() '<br>'.explode(",",$myn).'<br>';
$loco = explode(" ",$myn);
var_dump($loco);
echo '<br>';
// $locomo = implode(",",$loco);
$locomo = join("+",$loco);
var_dump($locomo);echo '<br>';
echo number_format(19.292,2,',').'<br>';
echo date('l').'<br>'.PHP_EOL;
echo "The time is " . date("h:i:sa");
echo date('Y-M-D').'<br>'.PHP_EOL;
$fi = file_get_contents('content.text',true);
var_dump($fi);
echo "<br>".PHP_EOL;

/**
 * v8
 */

 #function 
 // user define function and 

 function holdon( $mes, int $t = 3): string {
    return str_repeat($mes,$t)."<br>".PHP_EOL;
 };

 echo holdon('wonderfull day ',2);
/**
 * v9
 */

 #funciton return type

 //funciton type hint
$jordan = ['ali','hayder','rajib'];
function type(array $joe){
    foreach($joe as $j){
        echo "$j<br>";
    }
}

type($jordan);

//variadict parameter function
$abe = ['one','two','three'];
function vardi(array ...$abe){

    foreach($abe as $a){
        echo $a.'<br>'.PHP_EOL;
    }
}

// $a = readline('Enter a string: ');

// // For output
// echo $a;


 /**
  * v10
  */

 #annonymus function 

// named arguments 

function joyride(string $destination, int $budget , mixed $peoples){

    echo "$destination is suited for $peoples under $budget money";
    
};

joyride( $peoples = "forty peoples", $budget = 8000, $destination = "Cox's Bazar" );





?>