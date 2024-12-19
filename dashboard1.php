<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body> 

    <?php
    session_start();
    include_once('connection.php');
    $emailsession=$_SESSION['email'];

    $sql="SELECT * FROM register WHERE email='$emailsession'";
    $result = mysqli_query($conn, $sql);
    while ($row1 = mysqli_fetch_assoc($result)) {
       $adharid= $row1['adharid'];
    ?>
            <h1><?php  echo $row1['name'];  ?></h1>

            <?php  }   ?>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $emailsession ?>" readonly>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <?php
            $sql = "SELECT * FROM details WHERE id='$adharid'";
            $result = mysqli_query($conn, $sql);
            while ($row1 = mysqli_fetch_assoc($result)) {
            ?>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" >aadhar</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row1['adharno'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">gender</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row1['gender'] ?>">
                </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    <?php

    }
    ?>
<br>
<button type="button" class="btn btn-warning" ><a href="logout.php">logout</a></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>