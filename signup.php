<?php
include 'dbconfig.php';
session_start();
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $description;
    $query =$database->query("INSERT INTO `users`(`name`, `username`,`password`) VALUES ('$name','$username','$password')");
    header("Location: /noteapp/");
    exit();
}
 ;
        echo "
        <div class=\"createtasks\">
        <h1 style=\"padding-left:12px;\">Signup:</h1>
        <form action=\"signup.php\" method=\"POST\">
        <label for=\"title\">Name</label>
        <input type=\"text\" name=\"name\" placeholder=\"name\">
        <label for=\"usrname\">UserName</label>
        <input type=\"text\" name=\"username\" placeholder=\"username\">
        <label for=\"password\">password</label>
        <input type=\"text\" name=\"password\" placeholder=\"password\">
        <input type=\"submit\" value=\"submit\" name=\"submit\">
    </form>
    </div>
    ";
    ?>