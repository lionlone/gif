<?php
	$arr = array(
        array("id_img" => "14", "title_img" => "Tiêu đề 1", "name_img" => "Tên ảnh 1 ", "id_user 1" ),
        array("id_img" => "14", "title_img" => "Tiêu đề 2", "name_img" => "Tên ảnh 2 ", "id_user 2" ),
        array("id_img" => "14", "title_img" => "Tiêu đề 3", "name_img" => "Tên ảnh 3 ", "id_user 3" ),
        array("id_img" => "14", "title_img" => "Tiêu đề 4", "name_img" => "Tên ảnh 4 ", "id_user 4" )
    );
    /*
    foreach($arr as $arr1){
        //print_r($value1);
        echo $arr1["title_img"];
        echo "<br />";
    } */
    $new_arr[][] = "";
    foreach($arr as $arr1){
        foreach($new_arr as &$value){
            $value = $arr1;
        }
    }
    foreach($new_arr as $vl){
        echo $vl["title_img"];
    }
?>