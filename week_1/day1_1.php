<?php 
// task 1
$frutis = array("melon","peach","grape","banana","apple");
foreach($frutis as $fruit) {
  echo $fruit . "<br>";
}
array_push($frutis, "kiwi");
print_r($frutis);
echo "<br>";
array_pop($frutis);
print_r($frutis);
echo "<br>";
echo "i found peach in" . array_search("peach",$frutis);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// task 2
$people = array("ala" => "1997", "hesham" => "1999", "sami" => "1998", "abdelrahman" => "2003", "abdullah" => "2004");
foreach ($people as $x => $y) {
  echo "$x: $y <br>";
};
$people["htamleh"] = "2000";
print_r($people);
echo "<br>";
unset($people["ala"]);
echo "<br>";
echo "the key is found in " . array_key_exists("hesham",$people);

// task3
$students = array(
  array("name","age","grade"),
  array("ala",27,3.5),
  array("sami",26,2),
  array("hesham",25,3)
);

echo "<br>";
echo "<br>";
echo "<table>";
for ($row = 0; $row < 4; $row++) {
  echo "<tr>";
  
    for ($col = 0; $col < 3; $col++) {
      echo "<td>".$students [$row][$col]."</td>";
    }
  echo "</tr>";
}
echo "</table>";

echo "<br>";
echo "<br>";
$students[4][0] = "test";
print_r($students);

$students[1][1] = 21;
echo "<br>";
echo "<br>";
print_r($students);
echo "<br>";
echo "<br>";
unset($students[1]);
print_r($students);
echo "<br>";
echo "<br>";


// task4
$indexedArr = array(1,3,5,8,2,6,5,4);
array_push($indexedArr,"test1");
array_push($indexedArr,"test2");
echo "<br>";
echo "<br>";
print_r($indexedArr);
array_pop($indexedArr);
echo "<br>";
echo "<br>";
print_r(array_keys($indexedArr));
echo "<br>";
echo "<br>";
$associativeArray = array("mothana" => 27,"ala" => 28);
print_r(array_values($associativeArray));
echo count($associativeArray);
print_r(array_merge($indexedArr,$associativeArray)); 
echo "<br>";
echo "<br>";
echo array_search("test1",$indexedArr);
echo "<br>";
echo "<br>";
sort($indexedArr);

foreach ($indexedArr as $key => $val) {
    echo "index[" . $key . "] = " . $val . "<br>";
}
echo "<br>";
echo "<br>";
ksort($associativeArray);
foreach($associativeArray as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
echo "<br>";
echo "<br>";
asort($associativeArray);
foreach($associativeArray as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }

   