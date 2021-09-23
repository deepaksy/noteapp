<?php
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include 'dbconfig.php';
$username = $_SESSION['username'];
$sql =$database->query("SELECT * from `notedata` where `username`='$username' and `status`='pending'");

        if($_SESSION['loggedin']=="yes"){
            if(mysqli_num_rows($sql)>0){
                while($sqli = mysqli_fetch_assoc($sql)){
                    $fetchid = $sqli['id'];
                    echo "
                    <div class=\"tasks\">
                        <div class=\"taskheader\">
                            <h1 class=\"title\">".$sqli['title']."</h1>
                            <hr>
                            <p class=\"description\">".$sqli['description']."</p>
                        </div>
                        <div class=\"task-actions\">
                            <button onclick='doneTask($fetchid)' class='actions' href=''>Done</button>
                            <button onclick='deleteTask($fetchid)' class='actions' href=''>Delete</button>
                        </div>
                        
                    </div>
                ";
                }
            }
            else{
                echo "<h1> NO tasks. Create tasks first!</h1>";
            }
        }
        else{
            echo "<h1>Please login to continue!</h1>";
        }

/*echo "<h1 class='title'>".$sqli['title']."</h1>
            <p class='description'>".$sqli['description']."</p>";*/
    ?>

