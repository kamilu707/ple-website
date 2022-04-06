<?php
// Include top global content
include('base_top.php')
?>

<!-- Start content -->
<section class="container">
    <div class="row mt-4 ">
        <div class="col-md-3 ">
            <div class="card p-2 sticky-top me-3 mb-3">
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
                                echo "<li><a href='./category.php?id=" . $row2['id_lecture'] . "'>" . $row2['name_lecture'] . "</a></li>";
                            }
                            echo "</ul>";
                        }
                        echo "</div>";
                    }
                }
                ?>
                <!-- <hr>
                <a class="text-center" href="./quize.php?idq=<?php echo $_GET['id'] ?>"><button type="button" class="btn btn-success text-center bg-success p-3 text-white">Take Exercices</button></a> -->
            </div>
        </div>
        <div class="col-md-8 bg-white ">
            <div class="row">
                <h1>Quizes and Exercies</h1>
                <?php
                $query = "select * from quize where id_blog_fk=" . $_GET['idq'];
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<h2>" . $row['title_quize'] . "</h2>";
                        echo $row['content_quize'];
                    }
                    $query_exrecice = "SELECT * From exercice where id_blog_fk=" . $_GET['idq'];
                    $result_exercice = mysqli_query($connect, $query_exrecice);
                    if (mysqli_num_rows($result_exercice) > 0) {
                        while ($row2 = mysqli_fetch_assoc($result_exercice)) {
                            echo "<h3 class='bg-light p-2 mb-5'>" . $row2['question'] . "</h3>";
                            echo "<input type='checkbox'>" . $row2['choice1'];
                            echo "<input type='checkbox'>" . $row2['choice2'];
                            echo "<input type='checkbox'>" . $row2['choice3'];
                        }
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