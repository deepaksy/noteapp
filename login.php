<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
/*include 'dbconfig.php';
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
}*/
    echo '<div class="createtasks">
    <h1 style="padding-left:12px;">Login</h1>
    <form action="loginhandel.php"  method="POST">
        <label for="username">Username:</label>
        <input placeholder="Username" type="text" name="username" id="username" autofocus><br>
        <label for="password">Password:</label>
        <input placeholder="password" type="password" name="password" id="password">
        <input type="submit" value="Submit">
</form>
        <span onclick="signup()"><a style="color:white;padding:36px;margin-bottom:2px;font-size:18px;" href="#signup">Create new account</a></span>
</div>';
?>