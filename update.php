<?php
include_once "connect.php";
$con = connectDB();
$id = $_GET['id'];
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM crud WHERE id = '$id' ";
    $res = mysqli_query($con, $sql);
    if ($res == true) {
        while ($row = mysqli_fetch_assoc($res)) {
            $name = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
        }
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sqll = "UPDATE `crud` SET `name` = '$name', `email` = '$email', `password` = '$password' WHERE `crud`.`id` = $id ";
    $res = mysqli_query($con, $sqll);
    if ($res == true) {
        header('location:display.php');
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
                    <input type="text" value="<?php echo $name; ?>" name="name" class="form-control"
                        placeholder="Enter name">
                </div>
                <div class="form-group">
                    <input type="text" value="<?php echo $email; ?>" name="email" class="form-control"
                        placeholder="Enter email">
                </div>
                <div class="form-group">
                    <input type="password" value="<?php echo $password; ?>" name="password" class="form-control"
                        placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script src='bootstrap.min.js'></script>
    </body>