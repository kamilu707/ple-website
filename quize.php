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

        <!-- List the quize and its exercices -->
        <div class="col-md-8 bg-white ">
            <!-- Now check the answers are correct and send back the result Mark -->
            <?php
            if (isset($_POST['submit'])) {
                // Select all rows that are similar to idq variable passed in the link arguments.
                $query_exrecice = "SELECT * From exercice where id_blog_fk=" . $_GET['idq'];
                $result_exercice = mysqli_query($connect, $query_exrecice);
                // Grade varible will store the final result.
                global $grade;
                $grade = 1;
                foreach ($_POST as $key => $value) {
                    // echo print_r($_POST);
                    // echo $key . "<br>";
                }
                if (mysqli_num_rows($result_exercice) > 0) {
                    $counter = 0;
                    while ($row2 = mysqli_fetch_assoc($result_exercice)) {
                        if ($_POST[$counter] == $row2['correct_resp']) {
                            $grade += 1;
                        }
                        // echo $row2['question'] . "<br>";
                        $counter++;
                    }
                }
                if ($grade > 5) {
                    echo "<div class='p-3 bg-success mt-2'>Your grade is: " . $grade . "</div>";
                } else {
                    echo "<div class='p-3 bg-danger mt-2'>Your grade is: " . $grade . "<br> <p class='text-white'>Try Again!</p>" . "</div>";
                }
            }


            ?>
            <div class="row">
                <!-- <h1>Quizes and Exercies</h1> -->
                <form action="" method="post">
                    <?php
                    // Select the quize question
                    $query = "select * from quize where id_blog_fk=" . $_GET['idq'];
                    $result = mysqli_query($connect, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<h1>" . $row['title_quize'] . "</h1>";
                            echo $row['content_quize'];
                        }
                        // Now select all exercices tha is related to this quize.
                        $query_exrecice = "SELECT * From exercice where id_blog_fk=" . $_GET['idq'];
                        $result_exercice = mysqli_query($connect, $query_exrecice);
                        if (mysqli_num_rows($result_exercice) > 0) {
                            $counter = 0;
                            while ($row2 = mysqli_fetch_assoc($result_exercice)) {
                                echo "<h4 class='bg-light p-2 mt-4 mb-2 ' style='border-bottom:blue 1px solid;'>" . $row2['question'] . "</h4>";
                                echo "<div> <input class='form-check-input ' type='radio' name='" . $counter . "'value='" . $row2['choice1'] .  "' required>" . $row2['choice1'] . "</div>";
                                echo "<div> <input class='form-check-input' type='radio' name='" .  $counter . "'value='" . $row2['choice2'] .  "' required>" . $row2['choice2'] . "</div>";
                                echo "<div> <input class='form-check-input' type='radio' name='" . $counter . "'value='" . $row2['choice3'] .  "' required>" . $row2['choice3'] . "</div>";
                                $counter++;
                            }
                        }
                    }
                    mysqli_free_result($result_exercice);
                    ?>
                    <input class="m-5 btn btn-success text-center bg-success p-3 text-white" type="submit" name="submit" value="Check Answers">
                </form>
            </div>

        </div>
    </div>
</section>


<!-- End content -->




<?php
// Include top global content
include('base_bottom.php')
?>