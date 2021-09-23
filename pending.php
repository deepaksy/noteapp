<?php
session_start();
include 'dbconfig.php';
$id = $_REQUEST["id"];
$database->query("UPDATE `notedata` SET `status`='pending' WHERE id='$id'");
?>