<?php
	include"../controller/user.php";
    $sign = new user;
    if(isset($_POST["username"])){
        $sign->sign($_POST["username"],$_POST["password"],$_POST["email"]);
        echo $_POST["username"] . $_POST["password"] . $_POST["email"];
    }
    include"../views/sign.php";
?>