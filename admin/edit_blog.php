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
        $id_b = $_GET['id_blog'];
    } else {
        header('./view_blog.php?success=0');
    }


    // Grab blog data from data base and store in variable to be used as inputs values.
    $query_edit = "select * from blog where id_blog=$id_b";
    $result_edit = mysqli_query($connect, $query_edit);
    if (mysqli_num_rows($result_edit) > 0) {
        while ($row = mysqli_fetch_assoc($result_edit)) {

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
        <div class="form-group mt-5">
            <button type="submit" name="submit" class="btn btn-primary mb-5">Update</button>
        </div>
    </form>
    <!-- second form, Add/Update image thumbnail to database -->
    <?php
    // Show current image if existed
    $query_img = "SELECT thumbnail_link FROM blog WHERE id_blog=$id_b";
    $result_img = mysqli_query($connect, $query_img);
    if (mysqli_num_rows($result_img) > 0) {
        while ($row = mysqli_fetch_assoc($result_img)) {
    ?>
            <img class="border" src="../media/uploads/<?= $row['thumbnail_link']
                                                        ?>" alt=" .!. No thumbnail image chosen yet">
    <?php
        }
    }

    ?>

    <div class="mt-3">
        <form action="upload_thumbnail.php?id_b=<?php echo $id_b ?>" method="post" enctype="multipart/form-data">

            <div class="form-group mb-3">
                <label for="">Blog id:</label>
                <input type="text" name="id_blog" value='<?php echo $id_b ?>' disabled>
            </div>
            <div class="bg-secondary text-white pt-2 pb-2">
                <label>Add thumbnail image:</label>
                <input type="file" name="my_image">

                <input type="submit" name="upload_img" value="Upload">

            </div>
        </form>
    </div>
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