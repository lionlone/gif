<?php
    session_start();
    $login = "Login";
    $login_link = "controller/login.php";
    $logout = "";
    if(!empty($_SESSION["log"])){
        $login = $_SESSION["username"];
        $logout = '<ul><li><a href="controller/login.php?logout=true">Logout</a></ul>';
    };
    include"model/database.php";
            $demo = new database;
            $demo->connect();
            $quer = $demo->query("SELECT * FROM images");
	include"views/index.php";
?>