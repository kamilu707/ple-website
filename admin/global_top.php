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
    <script type="text/javascript" src="./js/plugins/ckeditor/ckeditor.js"></script>
    <title>Document</title>
</head>

<body>
    <section class="container">
        <div class="row mt-4">
            <div class="col-md-3 bg-secondary me-5 pt-4">
                <a class="link-light tretched-link bg-success" href="./index.php">Create New Blog</a><br>
                <a class="link-light tretched-link bg-primary" href="./quize.php">Create New Quize</a><br>
                <a class="link-light tretched-link bg-danger" href="./exercice.php">Add New Exercice</a><br>
                <a class="link-light tretched-link bg-danger" href="../">Back Home</a><br>
            </div>