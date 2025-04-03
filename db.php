<?php
error_reporting(E_ERROR | E_PARSE);
if ($_POST["clearFilter"] !='') {
    header("Location: http://localhost/mySite/index.php");
}
$link = mysqli_connect("localhost", "root", "", "photosite"); 

