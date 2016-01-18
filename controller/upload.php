<?php
        $file_path = $_FILES['fileUpload']['tmp_name'];
        $file_name = $_FILES['fileUpload']['name'];
        $to = "../upload/img/" . $file_name;
        move_uploaded_file($file_path, $to);
    echo $file_name;
    include"../views/upload.php";
?>