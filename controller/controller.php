<?php
    include"model/user.php";
    include"model/upload.php";
    $user = new user;
    if(isset($_GET["page"])){
    switch($_GET["page"]){
    case "upload":
        if(empty($_SESSION["log"])){
            header("Location:/gif/?page=login");
        }
        else{
            $e = "Chưa cho file upload";
            if(!empty($_FILES["fileUpload"])){
                $e = upload($_FILES['fileUpload']['name'],$_FILES['fileUpload']['type'],$_FILES['fileUpload']['tmp_name'],$_POST["imgTitle"]);
                include"views/upload.php";
            }
            else{
                include"views/upload.php";
            }
        }
        break;
    case "sign":
        if(!empty($_SESSION["log"])){
            header("Location:http://localhost/gif");
        }
        else if(isset($_POST["username"])){
            $sign = $user->sign($_POST["username"],$_POST["password"],$_POST["email"]);
            if($sign == 100){
                header("Location:http://localhost/gif/?page=login");
            }
            else{
                header("Location:http://localhost/gif/?page=sign");
            }
        }
        else{
            include"views/sign.php";
        }
        break;
    case "login":
        if(!empty($_SESSION["log"])){
            $user->logout();
            header("Location:http://localhost/gif");
        }
        else if(!empty($_POST["account"])){
            $login = $user->login($_POST["account"], $_POST["pass"]);
            if($login == 100){
               header("Location:http://localhost/gif"); 
            }
        }
        else{
            include"views/login.php";
        }
        break;
    case "out":
        $user->logout();
        header("Location:http://localhost/gif"); 
        break;
    default:
        $userlogin = "Login";
        $login_link = "?page=login";
        $logout = "";
        if(!empty($_SESSION["log"])){
            $userlogin = $_SESSION["username"];
            $login_link = "#";
            $logout = '<ul><li><a href="?page=out">Logout</a></ul>';
        };
	   include"views/index.php";
    }
    }
    else{
        $userlogin = "Login";
        $login_link = "?page=login";
        $logout = "";
        if(!empty($_SESSION["log"])){
            $userlogin = $_SESSION["username"];
            $login_link = "#";
            $logout = '<ul><li><a href="?page=out">Logout</a></ul>';
        };
	   include"views/index.php";
    }
    
?>