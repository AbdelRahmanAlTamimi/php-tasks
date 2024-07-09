<?php

// task 1
// for ($x = 1; $x <= 10; $x++) {
//     if ($x < 10) {
//         echo "$x-";
//     } else {
//         echo "$x" . "\n";
//     }
// }

// task 2
// $sum = 0;
// for($x=1; $x<=30; $x++)
// {
//     // Add current number to the sum
//     $sum += $x;
// }
// echo "The sum of the numbers 0 to 30 is $sum";

// task 3
// for ($i =0; $i < 5; $i++) {

//     for ($j =0; $j < 5; $j++) {
//         echo "*\t";
//     }
//     echo "<br>";
// }

// task 4
// $factorial = 1;
// for ($i = 2; $i <= 5; $i++) {
//     $factorial *= $i;
// }

// task 5
// $fib = [0, 1];
// echo $fib[0] . ", " . $fib[1];

// for ($i = 2; $i < 10; $i++) {
//     $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
//     echo ", " . $fib[$i];
// }

// task 6
// $str = "orange coding academy";
// $counter = 0;
// for($i = 0; $i < strlen($str); $i++) {
//     if ($str[$i] == "c" || $str[$i] == "C") {
//         $counter++;
//     }
// }
// echo $counter;


// task 7
// echo "<table cellpadding=\"3px\" cellspacing=\"0px\" border =\"1\">";
// $rows = 6;
// $cols = 5;
// for ($r = 1; $r <= $rows; $r++) {
//     echo '<tr>';
//     for ($c = 1; $c <= $cols; $c++) {
//         echo '<td>' . "$r * $c = " . $r * $c . '</td>';
//     }
//     echo '</tr>';
// }

// echo '</table> <br>';

//task 8

// for ($i = 1; $i < 30; $i++) {
//     if ($i % 3 == 0 && $i % 5 == 0 )
//     {
//         echo "FizzBuzz\n";
//     } elseif ($i % 5 == 0) {
//         echo "Buzz\n";
//     } elseif ($i % 3 == 0) {
//         echo "Fizz\n";
//     } else {
//         echo $i . "\n";
//     }

// }

// task 9
$rows = 5;
$count = 1;


for ($i = $rows; $i > 0; $i--) {

    for ($j = $i; $j < $rows + 1; $j++) {

        echo $count . "\n";
        $count++;
    }
    echo "<br>";
}
