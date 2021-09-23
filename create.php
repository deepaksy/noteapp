<?php
include 'dbconfig.php';
session_start();
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $description = $_POST['description'];
    $username = $_SESSION['username'];
    echo $description;
    $query =$database->query("INSERT INTO `notedata`(`title`, `description`,`username`) VALUES ('$title','$description','$username')");
    header("Location: /noteapp/");
    exit();
}
        if($_SESSION['loggedin']=="yes"){
        echo "
        <div class=\"createtasks\">
        <h1 style=\"padding-left:12px;\">Create Tasks:</h1>
        <form action=\"create.php\" method=\"POST\">
        <label for=\"title\">Title</label>
        <input type=\"text\" name=\"title\" placeholder=\"title\">
        <label for=\"description\">Description</label>
        <input type=\"text\" name=\"description\" placeholder=\"description\">
        <input type=\"submit\" value=\"submit\" name=\"submit\">
    </form>
    </div>
    ";}
    else{
        echo "<h1>Please login to continue!</h1>";
    }
    ?>