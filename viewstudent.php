<?php
  include("connection.php");
 $sql="SELECT * FROM student";
$result=$connection->query($sql);
// $row=$result->fetch_assoc();
// echo $row['id'];
// echo $row['name'];
// echo $row['email'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>View Student</h1>
    <table class="table">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        <?php if($result->num_rows>0):?>
        <?php while($row=$result->fetch_assoc()):  ?>
        <tr scope="row">
            <td><?php echo $row['id'] ?></td>
            <td><?php echo  $row['name']?></td>
            <td><?php echo $row['email'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Update</a>
                <a href="" class="btn btn-danger">delete</a>
            </td>
        </tr>
        <?php endwhile;?>
        <?php else: ?>
        <tr>
            <td colspan="3">No student found</td>
        </tr>
        <?php endif; ?>
    </table>
</body>

</html>