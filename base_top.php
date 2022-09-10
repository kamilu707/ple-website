<?php
$host = "localhost";
$username = "root";
$password = "tzx7";
$database = "ple_website";

$connect = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "Connection failed to database";
}
//  else {
//     echo "Connection successful to databases";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/css/main.css">
    <title>Document</title>
</head>

<body class="bg-white">
    <!-- Start header -->
    <header class="shadow-sm p-1 mb-5 bg-white rounde">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">
                    <a href='./'><img src="./style/images/ple logo 4.png" alt="People learn english"></a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 my_nav_menue">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="category_menu.php?id=1">Grammar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="category_menu.php?id=2">Writing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#category_menu.php?id=3">Vocabulary</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" disbled>
                                PLE Tools
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold">Quizes |</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#" style='color:orange'>For Tran Onah = Love <i class="fa-solid fa-flower-daffodil"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="./admin/"><i class="fa-solid fa-flower-daffodil"></i></a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Tooltip on top" disabled>
                                Online Course
                            </button>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
    </header>
    <!-- End header -->