<?php
    function upload($file_name,$file_type,$file_path,$file_title){
        if(!empty($_FILES["fileUpload"]) &&!empty($_POST["imgTitle"])){
            $file_type = $_FILES['fileUpload']['type'];
            $file_title = $_POST["imgTitle"];
            if($file_type == "image/gif"){
                $file_path = $_FILES['fileUpload']['tmp_name'];
                $file_name = $_FILES['fileUpload']['name'];
                $new_path = "upload/img/" . $file_name;
                $file_error = $_FILES["fileUpload"]["error"];
                if($file_error == 0 && move_uploaded_file($file_path, $new_path)){
                   $sql = "INSERT INTO gif.images (`title_img`, `name_img`, `id_user`) VALUES ('$file_title','$file_name', '0');";
                   $upload = new database;
                   $upload->connect();
                   $query = $upload->query($sql);
                   if(!empty($query)){
                    $success = "Upload file và ghi dư liệu thành công.";
                    return $success;
                   }
                   else{
                    $success = "Upload file thành công.";
                    return $success;
                   }
                }
                return $file_error;
            }
            else{
                $error = "File không đúng định dạng GIF";
                return $error;
            }
        }
    }