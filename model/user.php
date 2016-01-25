<?php
	class user extends database{
	   public function __construct(){
           $this->connect();
	   }
       // Xử lý đăng nhập
       public function login($account, $pass){
        if(!empty($account) && !empty($pass)){
            $sql = "SELECT * FROM USER WHERE USERNAME = '$account' OR EMAIL = '$account';";
            $this->query($sql);
            if($this->num_row()!=0){
                $sql = "SELECT * FROM USER WHERE (USERNAME = '$account' AND PASS = '$pass') OR (EMAIL = '$account' AND PASS = '$pass');";
                $this->query($sql);
                if($this->num_row()==1){
                    $user_array = $this->fetch();
                    $_SESSION["log"] = $user_array["id_user"];
                    $_SESSION["username"] = $user_array["username"];
                    return 100;
                }
                return 101;
            }
            return 11;
        }
        return 2;
       }
       // Xử lý đăng xuất
      public function logout(){
        if(!empty($_SESSION["log"])){
            session_destroy();
            return 1;
        }
      }
      // sử lí đăng kí
      public function sign($user, $pass, $email){
        if(!empty($email) && !empty($user) && !empty($pass)){
            $sql = "SELECT * FROM USER WHERE USERNAME = '$user' OR EMAIL = '$email'";
            $this->query($sql);
            if($this->num_row()==0){
                $sql = "INSERT INTO gif.user (username, pass, email) VALUES ( '$user', '$pass', '$email');";
                $sign = $this->query($sql);
                if(!empty($sign)){
                    return 100;
                }
            }
        }
        return 2;
      }
	}
?>