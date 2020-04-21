<?php

$sno = $_POST['sno'];
$name = $_POST['name'];
$Age = $_POST['age'];
$Mobile = $_POST['mobile'];
$salary = $_POST['salary'];

$servername ="localhost";
$username ="root";
$password ="";
$database ="phpdatabase";

$conn =mysqli_connect($servername, $username, $password, $database);

$sql = "INSERT INTO `employee` (`sno`, `Name`, `Age`, `Mobile`, `salary`) VALUES($sno,'$name',$Age, $Mobile, $salary)";

mysqli_query($conn, $sql);

mysqli_close($conn);

echo "Data is successfully intserted";

?>