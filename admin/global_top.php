<?php
$host = "localhost";
$username = "root";
$password = "";
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
    <section class="container">
        <div class="row mt-4">
            <div class="col-md-3 bg-light me-5 pt-4 border border-secondary rounded side_menue">
                <h4><a class="link-light tretched-link bg-light text-black " href="../">Back to Home</a></h4><br>

                <h4 class="text-secondary">Create New</h4>
                <a class="link-light tretched-link bg-success " href="./index.php">Create New Blog</a>
                <a class="link-light tretched-link bg-primary" href="./quize.php">Create New Quize</a>
                <a class="link-light tretched-link bg-info" href="./exercice.php">Add New Exercice</a>
                <div>
                    <h4 class="text-secondary pt-5">View or Modify</h4>
                </div>
                <a class="link-light tretched-link bg-success" href="./view_blogs.php">View or Edit Blog</a>
                <a class="link-light tretched-link bg-primary" href=".#">View or Modify Quize</a>
                <a class="link-light tretched-link bg-info" href="#">View or Modify Exercice</a>
            </div>