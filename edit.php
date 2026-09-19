<?php
require "connection.php";
//  if(!isset($_GET['id']&& !isset($_POST['id'])))
// {
//     echo "no student is provided"
// }\
$id=$_GET['id'];
// echo $id;
$sql= "SELECT * FROM `student` WHERE id= $id";
$sql=mysqli_query($connection, $sql);
$row = mysqli_fetch_array($sql);
$ids = $row['id'];
$name = $row['name'];
$phone =$row['phoneno'];
$cnic = $row['CNIC'];
echo $ids."<br>";
echo $name."<br>";
echo $phone."<br>";
echo $cnic."<br>";


?>