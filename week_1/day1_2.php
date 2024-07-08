<?php
// task1
$cities = array("Amman", "Irbid", "Zarqa", "Aqaba", "Madaba", "Salt", "Karak", "Jerash", "Mafraq", "Ma'an");

for ($i = count($cities) -1 ; $i >=0; $i-- ) {
  echo $cities[$i] . "  ";
}
echo "<br>";
echo array_search("Aqaba",$cities);

if (($key = array_search("Salt", $cities)) !== false) {
    unset($cities[$key]);
}
echo "<br>";
print_r(array_slice($cities,4,3));


// task2
echo "<br>";
$products = array(
  "Orange" => 0.7,
  "Banana" => 0.3,
  "Apple" => 0.5,
);
ksort($products);
print_r($products);
echo "<br>";

asort($products);
print_r($products);
echo "<br>";
$result = 0;
foreach($products as $product => $price) {
  
  $result += $price;
  $result /= 3;
}
echo $result;
echo "<br>";
$theMostExpensive = "";
foreach($products as $product => $price) {
  $theMostExpensive = $product;
}
echo $theMostExpensive;
echo "<br>";


// task3
$books = array(
    array(
        "title" => "To Kill a Mockingbird",
        "author" => "Harper Lee",
        "year" => 1960
    ),
    array(
        "title" => "1984",
        "author" => "George Orwell",
        "year" => 1949
    ),
    array(
        "title" => "Pride and Prejudice",
        "author" => "Jane Austen",
        "year" => 1813
    ),
    array(
    "title" => "The Fault in Our Stars",
    "author" => "John Green",
    "year" => 2012
)
);
echo "<br> <br>";

foreach ($books as $book) {
  if($book["year"] >= 2010){
    echo "Title: " . $book['title'] . "<br>";
    echo "Author: " . $book['author'] . "<br>";
    echo "Year: " . $book['year'] . "<br> <br>";
  }
}
echo "<br> <br>";
array_push($books,array(
  "title" => "why we sleep",
  "author" => " Matthew Walker ",
  "year" => 2017
));
print_r($books);

echo "<br> <br>";
$books[1]["author"] = "abood";
print_r($books);

// sort array by title
echo "<br> <br>";
$bookTitle = array();
foreach($books as $book) {
  array_push($bookTitle,$book["title"]);
}
sort($bookTitle);
echo "<br> <br>";
// print_r($bookTitle);
echo "<br> <br>";

$test = array();
for ($i =0; $i< count($books); $i++) {
 $neededIndex = array_search($books[$i]["title"],$bookTitle);
 $test[$neededIndex] = $books[$i];
}
sort($test);
$books = $test;
print_r($books);

// task 4
echo "<br> <br>";
$task4 = array("ala","hesham","sami");
print_r(array_map('strtoupper',$task4));

echo "<br> <br>";
function moreThan3letters($str) {
  if (strlen($str) > 3)
  return $str;
}
print_r(array_filter($task4,"moreThan3letters"));

echo "<br> <br>";
function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
print_r(array_reduce($task4,"myfunction"));

echo "<br> <br>";
function printArr($var) {
  echo $var . " ";
}
print_r(array_walk($task4,"printArr"));

echo "<br> <br>";
$task4_2 =array("ala","hesham","abood");
print_r(array_diff($task4_2,$task4));

echo "<br> <br>";
print_r(array_intersect($task4_2,$task4));

echo "<br> <br>";
$from2Arrays = array_combine($task4,$task4_2);
print_r($from2Arrays);

echo "<br> <br>";
print_r(array_column($books,"year"));

echo "<br> <br>";
print_r(array_slice($books,3));

echo "<br> <br>";
echo (in_array("ala",$task4));
