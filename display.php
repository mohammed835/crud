<html>

    <head>
        <title>display page</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body>
        <div class='container' style="margin:20px auto ; width:1000px;">
            <button class="btn btn-primary">
                <a href="user.php" class="text-light">Add User</a>
            </button>
            <table class="table table-dark" style="margin: 18px;">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                include_once "connect.php";
                $con = connectDB();
                $sql = "SELECT * FROM crud";
                $result = mysqli_query($con, $sql);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id  = $row['id'];
                        $name = $row['name'];
                        $email  = $row['email'];
                        $password = $row['password'];

                ?>
                    <tr>
                        <th scope="row"><?php echo $id; ?></th>
                        <th scope="row"><?php echo $name; ?></th>
                        <th scope="row"><?php echo $email; ?></th>
                        <th scope="row">
                            <button class='btn btn-danger'>
                                <a href="delete.php?id=<?php echo $id; ?>" class='text-light'>delete </a>
                            </button>
                            <button class='btn btn-primary'>
                                <a href='update.php?id=<?php echo $id; ?>' class='text-light'>update</a>
                            </button>
                        </th>
                    </tr>
                    <?php }
                }


                ?>
                    <!-- <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr> -->
                </tbody>
            </table>

        </div>
        <script src='bootstrap.min.js'></script>
    </body>

</html>