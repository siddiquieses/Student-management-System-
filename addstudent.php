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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
    <title>Document</title>
</head>
<body>
<center> <h1>ADD STUDENT</h1></center>
<form action="" method="post">
     <label for=""  class="form-label">Enter Name</label><br>
     <input type="text"  name="name" class="form-control" placeholder="Enter name"><br>
     <label class="form-label">Enter Email</label><br>
     <input type="text" class="form-control"  name="email" placeholder="Enter Email"/>
   <label class="form-label">Enter Phone No</label><br>
     <input type="text" class="form-control"  name="email" placeholder="Enter phone numer"/>
        <label class="form-label">Enter cnic</label><br>
     <input type="text" class="form-control"  name="email" placeholder="Enter cnic"/>
             <label class="form-label">Enter Gender</label><br>
             <select name="" id="">
                    <option value="">select Gender</option>
              <option value="">Male</option>
              <option value="">Female</option>
             </select>
     <button type="submit">Add student</button>
</form>

</body>
</html>