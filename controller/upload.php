<?php
    include"../model/database.php";
    $file_name = "";
    $file_type = "";
    $file_path = "";
    $file_title = "";
    $new_path = "";
    $file_error = "";
    if(!empty($_FILES["fileUpload"]) &&!empty($_POST["imgTitle"])){
        $file_type = $_FILES['fileUpload']['type'];
        $file_title = $_POST["imgTitle"];
        if($file_type == "image/gif"){
            $file_path = $_FILES['fileUpload']['tmp_name'];
            $file_name = $_FILES['fileUpload']['name'];
            $new_path = "../upload/img/" . $file_name;
            move_uploaded_file($file_path, $new_path);
            $file_error = $_FILES["fileUpload"]["error"];
            if($file_error == 0){
               $sql = "INSERT INTO gif.images (`title_img`, `name_img`, `id_user`) VALUES ('$file_title','$file_name', '0');";
               $upload = new database;
               $upload->connect();
               $query = $upload->query($sql);
               echo $query;
               if(!empty($query)){
                $success = "Upload file và ghi dư liệu thành công.";
                echo $success;
                return $success;
               }
               else{
                $success = "Upload file thành công.";
                echo $success;
                return $success;
               }
            }
            return $file_error;
        }
        else{
            $error = "File không đúng định dạng GIF";
            echo $error;
            return $error;
        }
    }
    include"../views/upload.php";
?>