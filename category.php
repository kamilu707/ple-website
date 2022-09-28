<?php
// Include top global content
include('base_top.php')
?>

<!-- Start content -->
<section class="container">
    <div class="row mt-4">
        <div class="col-md-3 me-3">
            <div class="card p-2 sticky-top my_sidebar">
                <?php
                $query1 = "select * from course";

                $result1 = mysqli_query($connect, $query1);
                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        echo "<div class='d-flex flex-column'><h4 class='bg-light p-1'> <i class='fas fa-caret-right'></i> " . $row['name_course'] . "</h4>";
                        $query2 = "select * from lecture where id_course_fk=" . $row['id_course'];
                        $result2 = mysqli_query($connect, $query2);
                        if (mysqli_num_rows($result2) > 0) {
                            echo "<ul>";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                echo "<li><a href='./category.php?id=" . $row2['id_lecture'] . "&name_lecture=" . $row2['name_lecture'] . "'>" . $row2['name_lecture'] . "</a></li>";
                            }
                            echo "</ul>";
                        }
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-md-8 bg-white container">
            <div class="row">
                <?php
                $query = "select * from blog where id_lecture_fk=" . $_GET['id'];
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<div class='p-3 d-flex align-items-center flex-column col-md-5 border m-1' ><a href='./single.php?id=" . $row['id_blog'] . "'>" . "<div class='border border-secondary'> <img src=./media/uploads/" . $row['thumbnail_link'] . " width='300px'></div>"  . "<div class='d-block p-3'><h2 text-secondary>" . $row['title_blog'] . "</h2></a><p>" .  substr($row['body_blog'], 0, 100) . "</p></div>" . "</div>";
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