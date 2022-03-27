<?php
$host = "localhost";
$username = "root";
$password = "";
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
    <!-- <link rel="stylesheet" href="./style/css/main.css"> -->
    <title>Document</title>
</head>

<body class="bg-light">
    <!-- Start header -->
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">
                    <img src="./style/images/ple logo 4.png" alt="People learn english">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#">Grammar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#">Writing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#">Vocabulary</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <a class="nav-link fw-bold">Quizes</a>
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

    <!-- Start content -->
    <section class="container">
        <div class="row mt-4 ">
            <div class="col-md-3">
                <div class="card p-2">
                    <?php
                    $query1 = "select * from course";

                    $result1 = mysqli_query($connect, $query1);
                    if (mysqli_num_rows($result1) > 0) {
                        while ($row = mysqli_fetch_assoc($result1)) {
                            echo "<div><h4>" . $row['name_course'] . "</h4>";
                            $query2 = "select * from lecture where id_course_fk=" . $row['id_course'];
                            $result2 = mysqli_query($connect, $query2);
                            if (mysqli_num_rows($result2) > 0) {
                                echo "<ul>";
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    echo "<li>" . $row2['name_lecture'] . "</li>";
                                }
                                echo "</ul>";
                            }
                            echo "</div>";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-8 bg-white ">
                <?php
                $query = "select * from blog";
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='bg-success' >" . "<a href='#' class='link-light'>" . $row['title_blog'] . "</a>" . "</div>";
                    }
                }
                ?>
            </div>
        </div>
    </section>


    <!-- End content -->







    <script src="./style/js/bootstrap.bundle.min.js"></script>
    <script src="./style/js/popper.min.js"></script>
    <script src="./style/js/font_awesome_all.min.js"></script>
</body>

</html>