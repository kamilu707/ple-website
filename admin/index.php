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
                <a href="./index.php" class="link-light tretched-link">Create New Blog</a>
            </div>

            <div class="col-md-8 bg-light">
                <?php
                if (isset($_POST['submit'])) {
                    $title_blog = $_POST['title_blog'];
                    $body_blog = $_POST['body_blog'];
                    $id_author_fk = $_POST['id_author_fk'];
                    $id_lecture_fk = $_POST['id_lecture_fk'];
                    // $thumbnail_link = $_POST['thumbnail_link'];
                    $query_insert = "INSERT INTO blog(title_blog, body_blog, id_author_fk, id_lecture_fk) VALUES('" .  $title_blog . "','" . $body_blog . "','" . $id_author_fk . "','" . $id_lecture_fk . "')";
                    // $query = "INSERT INTO voiture(Matricule, Couleur, Typecar, Manuel, marque) VALUES ('" . $Matricule . "','" . $Couleur . "','" . $Typecar . "','" . $Manuel . "','" . $marque . "')";
                    $result_insert = mysqli_query($connect, $query_insert);
                    if (!$result_insert) {
                        echo "<div>Data not insteted.</div><br>" . $query_insert;
                    }
                }



                ?>

                <h2>Add New Blog</h2>
                <form action="#" method="post" enctype="multypart/form-data">
                    <div class="form-group mt-2">
                        <label for="title_blog">Blog Title</label>
                        <input class="form-control" type="text" name="title_blog">
                    </div>
                    <label for="">Blog Content</label>
                    <textarea class="ckeditor form-control m-2" name="body_blog"></textarea>

                    <div class="form-group mt-2">
                        <label>Author : </label>
                        <select name="id_author_fk">
                            <?php
                            $quesry_author = "select * from author";
                            $result_author = mysqli_query($connect, $quesry_author);
                            if (mysqli_num_rows($result_author) > 0) {
                                while ($row = mysqli_fetch_assoc($result_author)) {
                                    echo "<option value=" . $row['id_author'] . ">" . $row['name_author'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group mt-2">
                        <label>Lecture Category : </label>
                        <select name="id_lecture_fk">
                            <?php
                            $quesry_lecture = "select * from lecture";
                            $result_lecture = mysqli_query($connect, $quesry_lecture);
                            if (mysqli_num_rows($result_lecture) > 0) {
                                while ($row = mysqli_fetch_assoc($result_lecture)) {
                                    echo "<option value=" . $row['id_lecture'] . ">" . $row['name_lecture'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <!-- <div class="form-group mt-5">
                        <label for="thumbnail_link">Thumbnail Image : </label>
                        <input type="file" name="thumbnail_link">
                    </div> -->

                    <div class="form-group mt-5">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>


        </div>
    </section>
    <!-- script for ckeditor for uploading images -->
    <script>
        //     CKEDITOR.replace('body_blog', {
        //         height: 300,
        //         filebrowserUploadUrl: "upload.php"
        //     });
        // 
    </script>


    <script src="./style/js/bootstrap.bundle.min.js"></script>
    <script src="./style/js/popper.min.js"></script>
    <script src="./style/js/font_awesome_all.min.js"></script>
</body>
</body>

</html>

<?php
// close connection to DB
mysqli_close($connect);

?>