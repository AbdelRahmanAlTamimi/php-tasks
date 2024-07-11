<!--  task1 -->
<!-- <html>

<body>
    <form action="#" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html> -->

<?php
// print_r($_SERVER) /*["REQUEST_METHOD"]*/;
?>

<!-- task 2 -->
<!-- <html>

<body>
    <form action="" method="POST">
        <input type="url" name="url" placeholder="Enter URL Here">

        <input type="submit" value="Go">
    </form>
</body>

</html> -->
<?php
//  $url= $_POST["url"] ;
//  header("Location: $url");
//  exit();
?>

<!-- task 3 -->
<!-- <html>

<body>
    <form method="POST">

        <input type="number" name="num1" required placeholder="First Number:">
        <br>
        <input type="number" name="num2" required placeholder="Second Number:">
        <br>
        <input type="submit" name="operation" value="Add">
        <input type="submit" name="operation" value="Subtract">
        <input type="submit" name="operation" value="Multiply">
        <input type="submit" name="operation" value="Divide">
    </form>

    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $num1 = $_POST['num1'];
    //     $num2 = $_POST['num2'];
    //     $operation = $_POST['operation'];
    //     $result = '';


    //         switch ($operation) {
    //             case 'Add':
    //                 $result = $num1 + $num2;
    //                 break;
    //             case 'Subtract':
    //                 $result = $num1 - $num2;
    //                 break;
    //             case 'Multiply':
    //                 $result = $num1 * $num2;
    //                 break;
    //             case 'Divide':
    //                 if ($num2 != 0) {
    //                     $result = $num1 / $num2;
    //                 } else {
    //                     $result = 'Cannot divide by zero';
    //                 }
    //                 break;
    //         }
    //         echo "<h2>Result: $result</h2>";

    // }
    ?>
</body>

</html> -->

<!-- task 4 -->
<?php
// session_start();


// if (!isset($_SESSION['tasks'])) {
//     $_SESSION['tasks'] = [];
// }
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['task']) && !empty($_POST['task'])) {
//     $newTask = htmlspecialchars($_POST['task']);
//     $_SESSION['tasks'][] = $newTask;
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
//     $index = $_POST['delete'];
//     if (isset($_SESSION['tasks'][$index])) {
//         unset($_SESSION['tasks'][$index]);
//         $_SESSION['tasks'] = array_values($_SESSION['tasks']); // Reindex the array
//     }
// }
?>
<!-- <html>

<body>
    <form method="POST" action="">
        
        <input type="text" id="task" name="task" required placeholder="New Task:">
        <input type="submit" value="Add Task">
    </form> -->

<?php
// if (!empty($_SESSION['tasks'])) {
//     echo "<ul>";
//     foreach ($_SESSION['tasks'] as $index => $task) {
//         echo "<li>" . htmlspecialchars($task) . "
//                 <form method='POST' action='' style='display:inline;'>
//                     <input type='hidden' name='delete' value='$index'>
//                     <input type='submit' value='Delete'>
//                 </form>
//               </li>";
//     }
//     echo "</ul>";
// } else {
//     echo "<p>No tasks yet.</p>";
// }
?>
<!-- </body>

</html> -->


<!-- task 5 -->

<?php
// echo "script name: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
// echo "project name: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
// echo "project name: " . dirname(__FILE__);

?>

<!-- taks 6 -->
<?php

// echo "page request time: ". date('Y-m-d H:i:s');
?>


<!-- task 7 -->

<?php
// session_start();



// isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

// echo  " Views Count Is " . $_SESSION['views'];
?>

<!-- task 8 -->
<?php

// function getIP()
// {
//     $ipaddress = getenv("REMOTE_ADDR");
//     return $ipaddress;
// }
// function addUniqueIP()
// {
//     $ip =  getIP();
//     $file_path = __DIR__ . '/iplist.txt';
//     if (is_writable($file_path)) {
//         $iplist = file_get_contents($file_path);
//         $iplist = explode(",", $iplist);
//         if (!in_array(trim($ip), $iplist)) {
//             $file = fopen($file_path, 'a+');
//             fwrite($file, "," . trim($ip));
//             fclose($file);
//         }
//     } else {
//         echo "File is not writable.";
//     }
// }
// addUniqueIP();
// function getUniqueVisitor()
// {
//     $file = file_get_contents(__DIR__ . "/iplist.txt");
//     $file = explode(",", $file);
//     return count($file);
// }
// echo getIP() . "<br>";
// echo "uniqe visitors are:" . getUniqueVisitor();
?>


<!-- task 9 -->
<?php
// setcookie("background","white",time() -1, "/","localhost",false,false);
// setcookie("font","arial",time() + 60, "/","localhost",false,false);
// setcookie("os","mac",time() + 60, "/","localhost",false,false);

// print_r($_COOKIE);
