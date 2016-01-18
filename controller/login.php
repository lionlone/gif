<?php
	include"../controller/user.php";
    $login = new user;
    session_start();
    if(!empty($_SESSION["log"])){
        if($_GET["logout"]=="true"){
            $out = new user;
            $out->logout();
        }
        header("Location:http://localhost/gif");
    }
    else if(!empty($_POST["account"])){
        $login->login($_POST["account"], $_POST["pass"]);
    }
    else{
        include"../views/login.php";
    }
?>