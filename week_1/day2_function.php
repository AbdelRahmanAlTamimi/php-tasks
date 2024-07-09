<?php
// task 1
// function IsPrime($n)
// {

//     for ($x = 2; $x < $n; $x++) {

//         if ($n % $x == 0) {
//             return false;
//         }
//     }
//     return true;
// }

// $a = IsPrime(3);

// if ($a == 0)
//     echo "$a is not a Prime Number";
// else
//     echo "$a is a Prime Number";

// task 2
// function reverse_string($str1)
// {
//     $containar = "";
//     for($i = strlen($str1) - 1 ; $i >= 0 ; $i++) {
//         $containar .= $str1[$i];
//     }
//     return $containar;
// }


// task 3
// function is_str_lowercase($str1)
// {
//     for ($sc = 0; $sc < strlen($str1); $sc++) {
//         if (
//             ord($str1[$sc]) >= ord('A') &&
//             ord($str1[$sc]) <= ord('Z')
//         ) {
//             return false; 
//         }
//     }
//     return true;
// }

// task 4
// function swap(&$var1, &$var2)
// {
//     $temp = $var1;
//     $var1 = $var2;
//     $var2 = $temp;
// }

// task 5
// function armstrong_number($num)
// {
//     $sl = strlen($num);
//     $sum = 0;
//     $num = (string)$num;

//     for ($i = 0; $i < $sl; $i++) {
//         $sum = $sum + pow((string)$num[$i], $sl);
//     }

//     // Check if the sum is equal to the original number
//     if ((string)$sum == (string)$num) {
//         return true;
//     } else {
//         return false;
//     }
// }

// task 6
// function check_palindrome($string)
// {
//     if ($string == strrev($string))
//     return 1; 
//     else
//         return 0;
// }

// task 7
// $array1 = array(2, 4, 7, 4, 8, 4);
// array_unique($array1);
