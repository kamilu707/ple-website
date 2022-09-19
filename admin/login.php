<?php
$host = "127.0.0.1";
$username = "root";
$password = "0638807603@talibi";
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
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            background-color: #ddd;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>

    <div class="col-md-8 bg-light w-50 p-3 border border-secondary rounded">
        <div class="d-flex justify-content-center"> <img src="../style/images/ple logo 4.png" alt="">
        </div>
        <!-- Authenticate user -->
        <div class="d-flex justify-content-center">

            <form action="" method="post">
                <div class="form-group mt-2">
                    <label for="username"> Username:</label>
                    <input class="form-control" type="text" name="username">
                </div>
                <label for="">Password:</label>
                <input class="form-control" type="password" name="password">

                <!-- Verify if username and password are correct -->
                <?php
                if (isset($_POST['connect'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $hashed_password = sha1($password);
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

                <div class="form-group mt-5">
                    <button type="submit" name="connect" class="btn btn-primary">Connect</button>
                </div>

            </form>
        </div>



    </div>
    <a href="../index.php">&#8592; Go back to PeopleLearnEnglish.com</a>

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