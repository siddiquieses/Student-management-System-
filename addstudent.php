<?php
require "connection.php";

if($_SERVER['REQUEST_METHOD']==='POST') 
{
   $name=$_POST['name'];
   $email=$_POST['email'];

   $query= "INSERT INTO student (`name`, `email`) VALUES ('$name','$email')";
   $sql=mysqli_query($connection, $query);

  if($sql){
    echo "Data inserted sucessfully";
  }
  else{
        echo "Data not inserted ";
  }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
     <label for="">Enter Name</label><br>
     <input type="text"  name="name" placeholder="Enter name"><br>
     <label>Enter Email</label><br>
     <input type="text"  name="email" placeholder="Enter Email"/>
     <button type="submit">Add student</button>
</form>
</body>
</html>