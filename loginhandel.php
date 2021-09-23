<?php
    include 'dbconfig.php';
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    $name = $_POST['username'];
    $password = $_POST['password'];
    $userValQueryResult = $database->query("SELECT username,password,name from users where username='$name' and password='$password'");
    $fetchdata = mysqli_fetch_assoc($userValQueryResult);
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($name=$fetchdata['username'] && $password = $fetchdata['password']){
            session_start();
            $_SESSION["username"]=$fetchdata['username'];
            $_SESSION['name']=$fetchdata['name'];
            $_SESSION["loggedin"]="yes";
            header("Location: /noteapp/");
            exit();
        }
        else{
            header("Location: /noteapp/");
            exit();
        }
    }

?>