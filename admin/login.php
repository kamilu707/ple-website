<?php
$host = "localhost";
$username = "root";
$password = "tzx7";
$database = "ple_website";

$connect = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "Connection failed to database";
}
// else {
//     echo "Connection successful to databases";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/admin_main.css">
    <script type="text/javascript" src="./js/plugins/ckeditor/ckeditor.js"></script>
    <title>Admin Panel</title>
</head>

<body>
    <div class="col-md-8 bg-light">

        <!-- Authenticate user -->
        <div style="width:50%">
            <form action="" method="post">
                <div class="form-group mt-2">
                    <label for="username"> Username:</label>
                    <input class="form-control" type="text" name="username">
                </div>
                <label for="">Password:</label>
                <input class="form-control" type="text" name="password">


                <div class="form-group mt-5">
                    <button type="submit" name="connect" class="btn btn-primary">Connect</button>
                </div>

            </form>
        </div>

        <!-- Verify if username and password are correct -->
        <?php
        if (isset($_POST['connect'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $hashed_password = sha1($password);
            echo "<br>$hashed_password<br>";
            $query_user = "select * from user where username='$username' and password='$hashed_password'";
            $result_user = mysqli_query($connect, $query_user);
            // Finish from here
            if (mysqli_num_rows($result_user) == 1) {
                session_start();
                $_SESSION['auth'] = 'true';
                header('location:index.php');
            } else {
                echo "Wrong Username or Password!";
            }
        }

        ?>


    </div>
    </script>


    <script src="./style/js/bootstrap.bundle.min.js"></script>
    <script src="./style/js/popper.min.js"></script>
    <script src="./style/js/font_awesome_all.min.js"></script>
</body>

</html>

<?php
// close connection to DB
mysqli_close($connect);

?>