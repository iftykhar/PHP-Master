#!/usr/bin/php
<?php



$input = isset($argv[1]) ? $argv[1] : null;
// $input = $argv[1];


// $user_input = (string) readline($input);//input than can be given through the command line

$alphabets = preg_replace('/[^A-Za-z]/', '', $input);//preg_replace function here replaces the alphabest with white spaces maybe

$output = strlen($alphabets);//result
echo $output;





