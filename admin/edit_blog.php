<?php
include("./global_top.php")
?>

<div class="col-md-8 bg-light">
    <?php
    if (isset($_POST['submit'])) {
        $title_blog = $_POST['title_blog'];
        $body_blog = $_POST['body_blog'];
        $id_author_fk = $_POST['id_author_fk'];
        $id_lecture_fk = $_POST['id_lecture_fk'];
        $id = $_GET['id_blog'];
        // $thumbnail_link = $_POST['thumbnail_link'];
        $query_insert = "update blog set title_blog='" . $title_blog . "'," . "body_blog='" . $body_blog . "'" . "where id_blog=" . $id;
        // $query = "INSERT INTO voiture(Matricule, Couleur, Typecar, Manuel, marque) VALUES ('" . $Matricule . "','" . $Couleur . "','" . $Typecar . "','" . $Manuel . "','" . $marque . "')";
        $result_insert = mysqli_query($connect, $query_insert);
        if (!$result_insert) {
            echo "<div>Data not insteted.</div><br>" . $query_insert;
        }
    }

    ?>


    <?php
    if (isset($_GET['id_blog'])) {
        $id = $_GET['id_blog'];
    } else {
        header('./view_blog.php?success=0');
    }


    // Grab blog data from data base and store in variable to be used as inputs values.
    $query_edit = "select * from blog where id_blog= '$id'";
    $result_edit = mysqli_query($connect, $query_edit);
    if (mysqli_num_rows($result_edit) > 0) {
        while ($row = mysqli_fetch_assoc($result_edit)) {
            // global $new_title;
            // global $new_body;
            // global $new_author;
            // global $new_lecture;
            // global $new_thumbnail;

            $new_title = $row['title_blog'];
            $new_body = $row['body_blog'];
            $new_author = $row['id_author_fk'];
            $new_lecture = $row['id_lecture_fk'];
            $new_thumbnail =   $row['thumbnail_link'];
        }
    }

    // echo $new_title;
    ?>

    <h2 class="bg-success text-white p-2">Edit Blog</h2>
    <form action="#" method="post" enctype="multypart/form-data">
        <div class="form-group mt-2">
            <label for="title_blog">Blog Title</label>
            <input class="form-control" type="text" name="title_blog" value='<?php echo $new_title ?>'>
        </div>
        <label for="">Blog Content</label>
        <textarea class="ckeditor form-control m-2" name="body_blog" id="body_blog">
            <?= $new_body;  ?>
        </textarea>

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
            <button type="submit" name="submit" class="btn btn-primary mb-5">Update</button>
        </div>
    </form>
    <!-- second form, Add image thumbnail to database -->

    <form action="upload_thumbnail.php" method="post" enctype="multipart/form-data">
        <input type="text" name="id_b" value='<?php echo $id ?>'>

        <label>Image</label>
        <input type="file" name="my_image">

        <input type="submit" name="upload_img" value="Upload">


    </form>
</div>


</div>
</section>
<!-- script for ckeditor for uploading images -->
<script>
    // var textarea = document.getElementById("body_blog");
    // textarea.innerHTML = '<?php
                                // echo $new_body 
                                ?>'
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