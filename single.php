<?php
// Include top global content
include('base_top.php')
?>

<!-- Start content -->
<section class="container">
    <div class="row mt-4 ">
        <div class="col-md-3 ">
            <div class="card p-2 sticky-top me-3">
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
            <div class="row">
                <?php
                $query = "select * from blog where id_blog='" . $_GET['id'] . "'";
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<h1>" . $row['title_blog'] . "</h1>";
                        echo $row['body_blog'];
                        $author_q = "select name_author from author where id_author='" . $row['id_author_fk'] . "'";
                        $lecture_q = "select name_lecture from lecture where id_lecture='" . $row['id_lecture_fk'] . "'";
                        $result_author = mysqli_query($connect, $author_q);
                        $result_lecture = mysqli_query($connect, $lecture_q);
                        $author = mysqli_fetch_assoc($result_author);
                        $lecture = mysqli_fetch_assoc($result_lecture);
                        echo "<br/><hr/>";
                        echo "<br>" . $author['name_author'];
                        echo "<br>" . $lecture['name_lecture'];
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>


<!-- End content -->




<?php
// Include top global content
include('base_bottom.php')
?>