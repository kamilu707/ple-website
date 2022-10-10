<?php
include("./global_top.php");
?>

<!-- Test first if authenticated -->
<?php
session_start();
if (!$_SESSION['auth']) {
    header('location:login.php');
}

?>

<div class="col-md-8 bg-light">
    <h2 class="bg-success text-center py-2 text- mb-3 text-white">Summary</h2>
    <div class="d-flex flex-direction-column justify-content-around">
        <div class="col-md-2 text-center">
            <h4> NB Blogs:</h4>
            <?php
            $q_blogs = "select * from blog";
            $r_blogs = mysqli_query($connect, $q_blogs);
            $count_blogs = 0;
            $count_quize = 0;
            $count_exercices = 0;
            if (mysqli_num_rows($r_blogs) > 0) {
                while ($row = mysqli_fetch_assoc($r_blogs)) {
                    $count_blogs += 1;
                }
            }
            echo "<p>" . $count_blogs . "</p>"
            ?>
        </div>
        <div class="col-md-2 text-center">
            <h4> Quizes:</h4>
            <?php
            $q_quize = "select * from quize";
            $r_quize = mysqli_query($connect, $q_quize);
            $count_blogs = 0;
            if (mysqli_num_rows($r_quize) > 0) {
                while ($row = mysqli_fetch_assoc($r_quize)) {
                    $count_blogs += 1;
                }
            }
            echo "<p>" . $count_blogs . "</p>"
            ?>
        </div>
        <div class="col-md-2 text-center">
            <h4> Exercices:</h4>
            <?php
            $q_exercices = "select * from exercice";
            $r_exercices = mysqli_query($connect, $q_exercices);
            $count_exercices = 0;
            if (mysqli_num_rows($r_quize) > 0) {
                while ($row = mysqli_fetch_assoc($r_exercices)) {
                    $count_exercices += 1;
                }
            }
            echo "<p>" . $count_exercices . "</p>"
            ?>
        </div>

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