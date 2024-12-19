<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<table class ="table">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>Edit</th>
    <th>Delete</th>

  </tr>


  <?php
include_once ('connection.php');
$q=mysqli_query($conn,"SELECT * from register");

while ($row = mysqli_fetch_assoc($q)) {
  // echo $row["id"] . $row["name"] . $row["roll number"];
 ?>
  <tr>
    <td> <?php echo $row["id"] ?></td>
    <td> <?php echo $row["name"] ?></td>
    <td> <?php echo $row["email"] ?></td>
    <td><a href="edit.php?id=<?php echo $row["id"] ?>">edit</a> </td>
    <td><a href="deletesql.php?id=<?php echo $row["id"] ?>">delete</a> </td>
  </tr>
  <?php } ?>
</table>

</body>
</html>
   

