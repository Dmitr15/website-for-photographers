<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if (!empty($_POST["clearFilter"])) {
    unset($_SESSION['form_submit']);
    header("Location: http://localhost/PhotoWebsite/index.php");
}
$link = mysqli_connect("localhost", "root", "", "photosite"); 
