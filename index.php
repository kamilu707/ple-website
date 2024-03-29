<?php
// Include top global content
include('base_top.php')
?>

<!-- Start content -->
<div class="container mb-5">
    <div class="row mt-4">
        <div class="col-md-3 me-3">
            <div class="card p-2 mt-3 mb-3 sticky-top border border-dark my_sidebar">
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
                                echo "<li  ><i class='fas fa-angle-right'></i>    <a class='m-2 p-1 my_side_menue' href='./category.php?id=" . $row2['id_lecture'] . "&name_lecture=" . $row2['name_lecture'] . "'>" . $row2['name_lecture'] . "</a></li>";
                            }
                            echo "</ul>";
                        }
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row p-3">

                <?php
                $query = "SELECT * from blog ORDER BY id_blog DESC";
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<div class='p-3 mt-3 d-flex align-items-center border border-dark shadow-sm my_post_box' ><a href='./single.php?id=" . $row['id_blog'] . "'>" . "<div class='border border-success'> <img src=./media/uploads/" . $row['thumbnail_link'] . " width='300px'></div>"  . "<div class='d-block p-3 my_post_text'><h2 text-secondary>" . $row['title_blog'] . "</h2></a><p>" .  substr($row['body_blog'], 0, 100) . "... <a class='link-success' href='./single.php?id=" . $row['id_blog'] . "<p class=' d-inline-block'>Continue Reading</p>" .  "</p></a></div>" . "</div>";
                    }
                }
                ?>
            </div>
        </div>
        <!-- <div class="col-md-2"><img class="sticky" src="./media/other_images/ad_example.jpg" alt="" width="100%" height="auto"></div> -->
    </div>
</div>


<!-- End content -->




<?php
// Include top global content
include('base_bottom.php')
?>