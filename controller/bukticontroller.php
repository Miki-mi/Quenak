<?php
require "./../database/db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['insert'])) {

    print_r($_FILES['transferimage']);
    
    // save ke DB
    $save_directory = "foto_bukti";
    $image_name = $_FILES['transferimage']['name'];
    $save_path_db = "$save_directory/$image_name";

    // upload ke server
    $root_directory = $_SERVER['DOCUMENT_ROOT'];
    $project_directory = "$root_directory/quenak";
    $target_path_upload = "$project_directory/$save_path_db";

    // validasi extension
    $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
    $allowed_extensions = ["jpg", "png"];

    session_start();
    if(in_array($image_extension, $allowed_extensions) == false) {
        $_SESSION['errorimage'] = "file must be jpg or png";
        echo 'file';
        header("location: ./../bukti.php");
    } else if($_FILES['transferimage']['size'] > 50000000) {
        $_SESSION['errorimage'] = "file size cannot exceed 5mb";
        echo 'size';
        header("location: ./../bukti.php");
    } else {
        $orderid = $_POST['orderid'];

        $sql = "INSERT INTO bukti VALUES(null,  ?, ?)";
        $insert = $conn->prepare($sql);
        $insert->bind_param('is', $orderid, $save_path_db);
        $insert->execute();

        move_uploaded_file($_FILES['transferimage']['tmp_name'], $target_path_upload);
        header("location: ./../thankyou.php");
    }

    
}