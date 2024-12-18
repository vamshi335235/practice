<?php
include_once 'connection.php';
$id1=$_POST['id'];
$sql="SELECT * FROM register WHERE id= $id1";
$q=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($q)){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php?id=<?php echo $row["id"]; ?>"  method="post">
    <input type="text" value="<?php echo $row["name"]; ?>" name ="name" >
    <input type="email" value="<?php echo $row["email"]; ?>" name="email">
    <input type="submit" value="click to update">
    </form>
<?php } ?>

</body>
</html>