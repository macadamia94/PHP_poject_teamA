<?php
include_once "db_1.php";

$number= $_POST["number"];
$title= $_POST["title"];
$ctnt= $_POST["ctnt"];
$date= date("Y-m-d H:i:s");

$connect= get_connect();
$query= 
"   UPDATE board 
    SET title='$title', ctnt='$ctnt', date='$date' 
    WHERE number=$number
";
$result= mysqli_query($connect, $query);
mysqli_close($connect);

header("location:read.php?number=$number");