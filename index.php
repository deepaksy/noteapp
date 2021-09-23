<?php
include 'dbconfig.php';
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
session_start();
$_SESSION['sitename']="Noteapp";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
    <link id="theme" rel="stylesheet" href="">
    <title><?php print $_SESSION['sitename']?></title>
</head>
<body>
        <div class="navbar">
            <div class="brand-login"><h1 id="logo"><a href="/noteapp/" style="text-decoration:none; ">Taskscheduler</a></h1>
            <?php if($_SESSION['loggedin']=="yes"){
                echo "<a class=\"loginlogout\" id=\"logout\" href=\"logout.php\">Logout";
            }else{
                echo "<a class=\"loginlogout\" id=\"login\" href=\"#login\">Login";
            }
            ?></a></div>
            <div class="navbar-navigation">
                <a id="tasks" href="#task">tasks</a>
                <a id="done" href="#done">done</a>
                <a id="create" href="#create">create</a>
            </div>
        </div>
    <div id="notes" class="notes">
        <p><?php if($_SESSION['loggedin']=="yes"){
            echo "<h1>Welcome ".$_SESSION['name']."!</h1>";
        }
        else{
            echo "<h1>Welcome! please login to continue...</h1>";
        }?></p>
        <?php if($_SESSION['loggedin']=="yes"){
            echo "<h1>Click tasks to view tasks.</h1><br><hr>";
        }

            echo '
            <div class="introduction">
        <h1>Welcome to Noteapp!</h1>
        <hr>
        <p>Are you the person who wants to be in schedule alway but stuggle to do so?<br>
            Are you tired of writing your to-do tasks in paper?
            Say no more to the hussle of writing your schedule using old school pen-paper method.
        </p>
        <p>With the help of Noteapp you can create your tasks online without any efforts.</p>
        <h2>Key features:</h2>
        <ul>
            <li>Easy to Use.</li>
            <li>Free.</li>
            <li>Opensource.</li>
            <li>Cross platform</li>
        </ul>
        <h1>How to create tasks:</h1>
        <p>Follow the mention below instructions:</p>
        <ol>
            <li> Click to Login and Create your account if not present.</li>
            <li>Login to your account.</li>
            <li>Navigate to create tab .</li>
            <li>Enter task title and Description.</li>
            <li>After the task done click done.</li>
            <li>Completed tasks can be found in done tab.</li>
            <li>You can delete you complete tasks by clicking delete button.</li>
        </ol>
        <h3>Tech stack used:</h3>
        <table>
            <tr>
                <th>Tech</th>
                <td>HTML</td>
                <td>Css</td>
                <td>PHP</td>
                <td>Mysql</td>
            </tr>
            <tr>
                <th>Used for</th>
                <td>Structure</td>
                <td>Styling</td>
                <td>Backend</td>
                <td>Database</td>
            </tr>

        </table>
    </div>';
 
        ?>
    </div>
    <footer>
        <div  style= "color:whitesmoke;"id='light'></div>
        <p style="color:white;">&copy;By Deepak suryawanshi <?php $year=date("Y");echo $year."-".($year+1)."."; ?> </p>
    </footer>
    <script src="index.js"></script>
</body>
</html>