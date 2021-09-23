<?php
session_start();
include 'dbconfig.php';
$id = $_REQUEST["id"];
$database->query("DELETE FROM `notedata` WHERE id='$id'");
?>