<?php

// task 1
// $str = "this Is a string";
// echo strtoupper($str) . "<br>";
// echo strtolower($str) . "<br>";
// echo ucfirst($str) . "<br>";
// echo ucwords($str) . "<br>";
// echo "<br>";

// task 2
// $time = "085119";
// $timeArr = str_split($time,2);
// for ($i = 0; $i <= 1; $i++) {
//     $timeArr[$i] .= ":";
// }
// $time = implode("",$timeArr);
// echo $time;

// task 3
// $task3 = "I am a full stack dev at orange";
// if (strpos($task3,"orange") !== false) {
//     echo "word found";
// } else {
//     echo "word not found";
// }

// task 4
//  $url = "www.orange.com/index.php";
//  $pos = strpos($url,"/");
//  $fileName = substr($url,$pos+1);
//  echo $fileName;

// task 5
// $email = "info@orange.com";
//  $pos = strpos($email,"@");
//  $userName = substr($email,0,$pos);
//  echo $userName;

// task 6
// $email = "info@orange.com";
//  $domainName = substr($email,-3);
//  echo $domainName;

// task 7
// function password_generate($chars)
// {
//     $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
//     return substr(str_shuffle($data), 0, $chars);
// }
// echo password_generate(7);

// task 8
// $task8 = "That new trainee is so genius";
// echo str_replace("That","the", $task8);

// task 9
// $str1 = 'dragonball';
// $str2 = 'dragonboll';
// $str_pos = strspn($str1 ^ $str2, "\0");
// printf(
//     'First difference between two strings at position %d: "%s" vs "%s"',
//     $str_pos,
//     $str1[$str_pos],
//     $str2[$str_pos]
// );

// task 10
// $task10 = "Twinkle,twinkle,little star";
// var_dump(explode(",",$task10));

// task 11
// $cha = 'z';
// $next_cha = ++$cha;
// echo $next_cha;
// if (strlen($next_cha) > 1) {
//     $next_cha = $next_cha[0];
// }
// echo $next_cha;

// task 12
// $original_string = 'The brown fox';
// $string_to_insert = 'quick';
// $insert_pos = 4;
// $new_string = substr_replace($original_string, $string_to_insert . ' ', $insert_pos, 0);
// // echo $new_string;
// // task 13
// $arr13 = explode(" ",$new_string);
// echo "<br>" . $arr13[0];


// task 14
// $task14 = "0000657022.24";
// $arr14 = str_split($task14);
// for ($i = 0; $i < count($arr14); $i++) {
//     if ($arr14[$i] == 0) {
//         unset($arr14[$i]);
//     }
// }

// task 15
//     $task15 = "The quick brown fox jumps over the lazy dog";
//    echo str_replace("fox"," ", $task15);

// task 16
// $task16 = "The quick brown fox jumps over the lazy dog---";
// echo rtrim($my_str, '-');

// task 17 
// $task17 = '\"\1+2/3*2:2-3/4*3';
// echo str_replace(str_split('\\/:*?"<>|+-'), '', $task17);

// task 18
// $task18 = 'The quick brown fox jumps over the lazy dog';
// echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));

//  task 19
// $task19 = "2,543.12";
// echo str_replace(',', '', $task19);

// task 20
// for ($x = ord('a'); $x <= ord('z'); $x++) {
//     echo chr($x) . "\n";
// }
