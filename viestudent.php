<?php
require "connection.php";
$sql = "SELECT * FROM student";
$query = mysqli_query($connection, $sql);
$result = mysqli_num_rows($query) > 0;
echo $result ? 'true' : 'false';
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>

 <tbody>
    <tr>
        <td></td>
    </tr>
 </tbody>
    </table>
</body>
</html> -->