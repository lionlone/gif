<?php
    include"../model/database.php";
	class user extends database{
	   public function __construct(){
	       session_start();
           $this->connect();
	   }
       // Xử lý đăng nhập
       public function login($account, $pass){
        if(!empty($account) && !empty($pass)){
            $sql = "SELECT * FROM USER WHERE USERNAME = '$account' OR EMAIL = '$account';";
            $this->query($sql);
            if(!empty($this->result)){
                $sql = "SELECT * FROM USER WHERE (USERNAME = '$account' AND PASS = '$pass') OR (EMAIL = '$account' AND PASS = '$pass');";
                $this->query($sql);
                if(!empty($this->result)){
                    $user_array = $this->fetch();
                    $_SESSION["log"] = $user_array["id_user"];
                    $_SESSION["username"] = $user_array["username"];
                    header("Location:http://localhost/gif");
                    return;
                }
            }
            else{
                return;
            }
        }
        else if(!empty($account)){
            $error = "vui lòng nhập tài khoản.";
            return $error;
        }
        else if(!empty($pass)){
            $error = "Vui lòng nhập password";
            return $error;
        }
        else{
            $error = "Lỗi đăng nhập";
            return $error;
        }
       }
       // Xử lý đăng xuất
      public function logout(){
        if(!empty($_SESSION["log"])){
            session_destroy(); 
            header("Location: /gif");
        }
      }
      // sử lí đăng kí
      public function sign($user, $pass, $email){
        if(!empty($email) && !empty($user) && !empty($pass)){
            $sql = "SELECT * FROM USER WHERE USERNAME = '$user' OR EMAIL = '$email'";
            if($this->query($sql)){
                $error = "Tài khoản hoặc Email đã được tạo";
                return $error;
            }
            else{
                $this->query("INSERT INTO gif.user (username, pass, email) VALUES ( '$user', '$pass', '$email');");
                header("Location: /gif/controller/login.php");
            }
        }
      }
	}
?>