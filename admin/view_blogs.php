<?php
include("./global_top.php")
?>

<div class="col-md-8 bg-light">
    <h2 class="bg-success text-black mb-5 text-white p-2 ">View All blogs</h2>
    <!-- Table of all blog in database -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Blog title</th>
                <th scope="col">Blog date</th>
                <th scope="col">Blog lecture</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr> -->
            <!-- 
                <th scope="row">1</th>
                <td>Title 1 </td>
                <td>Date 1</td>
                <td>Lecture 1 </td>
             -->

            <?php
            // Select all blogs in database 
            // $query_insert = "INSERT INTO blog(title_blog, body_blog, id_author_fk, id_lecture_fk) VALUES('" .  $title_blog . "','" . $body_blog . "','" . $id_author_fk . "','" . $id_lecture_fk . "')";
            $query_select = "select id_blog, title_blog, date_pub, id_lecture_fk from blog;";
            // $query = "INSERT INTO voiture(Matricule, Couleur, Typecar, Manuel, marque) VALUES ('" . $Matricule . "','" . $Couleur . "','" . $Typecar . "','" . $Manuel . "','" . $marque . "')";
            $result_select = mysqli_query($connect, $query_select);
            if (mysqli_num_rows($result_select) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_assoc($result_select)) {
                    echo "<tr> <th scope='row'> $i </th> <td>" . $row['title_blog'] . "<a class='p-5' href='./edit_blog.php?id_blog=" . $row['id_blog'] . "'>Edit</a>" . "</td> <td>" . $row['date_pub'] . "</td> <td>" . $row['id_lecture_fk'] . "</td> </tr>";
                    $i++;
                }
            }
            ?>
            <!-- </tr> -->
        </tbody>
    </table>

</div>


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