<!-- connect to DB and include bloabl content -->
<?php
include("./global_top.php");
?>

<!-- Start Body content -->
<div class="col-md-8 bg-light">
    <?php
    if (isset($_POST['submit'])) {
        $title_quize = $_POST['title_quize'];
        $content_quize = $_POST['content_quize'];
        $id_author_fk = $_POST['id_author_fk'];
        $id_lecture_fk = $_POST['id_lecture_fk'];
        $id_blog_fk = $_POST['id_blog_fk'];

        $query_insert = "INSERT INTO quize(title_quize, content_quize , id_blog_fk , id_author_fk, id_lecture_fk) VALUES('" .  $title_quize . "','" . $content_quize . "','" . $id_blog_fk . "','" . $id_author_fk . "','" . $id_lecture_fk . "')";
        $result_insert = mysqli_query($connect, $query_insert);
        if (!$result_insert) {
            echo "<div class='bg-danger'>Data not insteted.</div><br>" . $query_insert;
        }
    }

    ?>

    <h2 class="bg-primary">Add New Quize </h2>
    <form action="./quize.php" method="post" enctype="multypart/form-data">
        <div class="form-group mt-2">
            <label for="title_quize">Quize Title</label>
            <input class="form-control" type="text" name="title_quize" placeholder="Type the quize title" required>
        </div>
        <label for="">Quize Content</label>
        <textarea class="ckeditor form-control m-2" name="content_quize" required></textarea>

        <div class="form-group mt-2">
            <label>Author : </label>
            <select name="id_author_fk" required>
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
            <select name="id_lecture_fk" required>
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


        <div class="form-group mt-2">
            <label>Blog Category : </label>
            <select name="id_blog_fk" required>
                <?php
                $quesry_blog = "select * from blog";
                $result_blog = mysqli_query($connect, $quesry_blog);
                if (mysqli_num_rows($result_blog) > 0) {
                    while ($row = mysqli_fetch_assoc($result_blog)) {
                        echo "<option value=" . $row['id_blog'] . ">" . $row['title_blog'] . "</option>";
                    }
                }
                ?>
            </select>
        </div>

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

</html>

<?php
// close connection to DB
mysqli_close($connect);

?>