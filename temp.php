<?php
session_start();
include 'dbconfig.php';
$sql =$database->query("SELECT * from `notedata`");
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="notes.css">
    <title><?php echo $_SESSION['sitename']?></title>
</head>
<body>
    <div class="notes">
    <?php
        if(mysqli_num_rows($sql)>0){
            while($sqli = mysqli_fetch_assoc($sql)){
                echo "<h1>".$sqli['title']."</h1>
            <p>".$sqli['description']."</p>";
            }
        }
    ?>
    </div>
</body>
</html>

    -->