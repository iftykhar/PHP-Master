<?php

$string = readline();

// Remove non-alphabetic characters (letters only)
$lettersOnly = preg_replace('/[^A-Za-z]/', '', $string);

// Count alphabetic characters
$characterCount = strlen($lettersOnly);

echo "Alphabetic character count: $characterCount";
