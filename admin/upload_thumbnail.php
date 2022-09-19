<?php
$host = "127.0.0.1";
$username = "root";
$password = "0638807603@talibi";
$database = "ple_website";

$connect = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "Connection failed to database";
}
// else {
//     echo "Connection successful to databases";
// }



// Getting GET variables
if (isset($_GET['id_b'])) {
    $id_b = $_GET['id_b'];
}

if ((isset($_POST['upload_img'])) && (isset($_FILES['my_image']))) {

    // Insert image to DB
    echo "<br><pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $img_tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];
    // $id_blog = $_POST['id_blog'];

    if ($error === 0) {
        if ($img_size > 300000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");
            if (in_array($img_ex_lc, $allowed_exs)) {

                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = '../media/uploads/' . $new_img_name;
                move_uploaded_file($img_tmp_name, $img_upload_path);

                // Insert into database
                $sql = "UPDATE  blog SET thumbnail_link='$new_img_name' where id_blog=$id_b";
                mysqli_query($connect, $sql);
                // header('Location: index.php');
            } else {
                $em = "You can't upload files on this type.";
                // header("Location: index.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occured!";
        // header("Location: index.php?error=$em");
    }
} else {
    // header("Location: index.php");
}
