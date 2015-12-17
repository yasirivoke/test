<?php
include "app.php";

$id = $_GET['id'];

$_SESSION['company']=$id;

header("location: ".$_SERVER['HTTP_REFERER']);

?>