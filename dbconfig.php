<?php

class database{
    const dbservername = 'localhost';
    const dbusername = 'deepak';
    const dbpassword='deepak';
    const dbname='noteapp';
    public $conn;
    function __construct(){
        $this->conn = mysqli_connect(self::dbservername,self::dbusername,self::dbpassword,self::dbname);
    }
    

    function connectionCheck(){
        if($this->conn){
            echo "Connection stablished";
        }
        else{
            echo "error";
        }
    }
    function query($query){
        $result = mysqli_query($this->conn,$query);
        if(!$result){
            echo "error";
        }
        return $result;
    }

}

$database =new database();
?>