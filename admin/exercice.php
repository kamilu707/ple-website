<!-- connect to DB and include bloabl content -->
<?php
include("./global_top.php")
?>

<!-- Start Body content -->
<div class="col-md-8 bg-light">
    <?php
    if (isset($_POST['submit'])) {
        $question = $_POST['question'];
        $choice1 = $_POST['choice1'];
        $choice2 = $_POST['choice2'];
        $choice3 = $_POST['choice3'];
        $id_quize_fk = $_POST['id_quize_fk'];
        $id_blog_fk = $_POST['id_blog_fk'];

        $query_insert = "INSERT INTO exercice(question, choice1 , choice2 , choice3, id_quize_fk, id_blog_fk) VALUES('" .  $question . "','" . $choice1 . "','" . $choice2 . "','" . $choice3 . "','" . $id_quize_fk . "','" . $id_blog_fk . "')";
        $result_insert = mysqli_query($connect, $query_insert);
        if (!$result_insert) {
            echo "<div class='bg-danger'>Data not insteted.</div><br>" . $query_insert;
        }
    }

    ?>

    <h2 class="bg-info ">Add New Exercice </h2>
    <form action="./exercice.php" method="post" enctype="multypart/form-data">

        <label for="">Exercice Question</label>
        <textarea class="form-control m-2" name="question" required placeholder="Example: I ——————— at a bank."></textarea>

        <div class="form-group mt-2">
            <label for="choice1">Choice 1</label>
            <input class="form-control" type="text" name="choice1" required>
        </div>
        <div class="form-group mt-2">
            <label for="choice2">Choice 2</label>
            <input class="form-control" type="text" name="choice2" required>
        </div>

        <div class="form-group mt-2">
            <label for="choice3">Choice 3</label>
            <input class="form-control" type="text" name="choice3" required>
        </div>

        <div class="form-group mt-2 ">
            <label class="bg-success pe-2 ps-2" for="correct_resp">Correct Answer</label>
            <input class="form-control" type="text" name="correct_resp" required>
        </div>

        <div class="form-group mt-2">
            <label>Quize Category : </label>
            <select name="id_quize_fk" required>
                <?php
                $quesry_quize = "select * from quize";
                $result_quize = mysqli_query($connect, $quesry_quize);
                if (mysqli_num_rows($result_quize) > 0) {
                    while ($row = mysqli_fetch_assoc($result_quize)) {
                        echo "<option value=" . $row['id_quize'] . ">" . $row['title_quize'] . "</option>";
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
</body>

</html>

<?php
// close connection to DB
mysqli_close($connect);

?>