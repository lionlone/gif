<?php
	class database{
	   protected $db_host = "localhost";
       protected $db_user = "root";
       protected $db_pass = "";
       protected $db_name = "gif";
       
       protected $conn = NULL;
       protected $result = NULL;
       //Kết nối database
       public function connect(){
        $this->conn = mysql_connect($this->db_host, $this->db_user, $this->db_pass);
        //mysql_set_charset("utf8",$this->conn);
	//mysql_query("set names 'utf8'");
        if($this->conn){
            $select_db = mysql_select_db($this->db_name, $this->conn);
            if($select_db){
                $success = "kết nối $this->db_name thành công";
                return $success;
            }
            else{
                $error = "Kết nối $this->db_name thất bại";
                return $error;
            }
        }
        else{
            $error = "Kết nối database user thành công";
        }
       }
       // Ngắt kết nối database
       public function disconnect(){
        if($this->conn){
            mysql_close($this->conn);
        }
       }
       // truy vẫn CSDL
       public function query($sql){
        $this->free_query();
        $this->result = mysql_query($sql);
       }
       // Giải phóng sql đã thực thi 
       public function free_query(){
        if($this->result){
            mysql_free_result($this->result);
        }
       }
       // Trả về số dòng trong bảng
       public function num_row(){
        if($this->result){
            $rows = mysql_num_rows($this->result);
            return $rows;
        }
       }
       // fetch dữ liệu trả về mảng
       public function fetch(){
        if($this->result){
            $row = mysql_fetch_array($this->result);
            return $row;
        }
       }
	}
?>
