<?php
include_once 'connect.php';
$con = connectDB();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `crud` (`name`, `email`, `password`) 
    VALUES ('$name', '$email', '$password')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header("location:display.php");
    } else {
        echo "there is problem in your app";
    }
}
?>
<html>

    <head>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body>
        <div class='container' style="margin:20px auto ; width:800px;">
            <form method="post">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script src='bootstrap.min.js'></script>
    </body>

</html>