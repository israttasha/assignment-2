
<?php 

$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

foreach ($strings as $string) {
    $vowelCount = 0;
    $characters = str_split($string); 
    
    foreach ($characters as $char) {
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }
    $reverse = strrev($string);
    echo "Original String: {$string}, Vowel Count: {$vowelCount}, Reversed String: {$reverse} <br/>";
}


?>
