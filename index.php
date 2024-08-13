<?php
session_start();

if (is_null($_SESSION['username'])) {
    header('Location: View/CSS/home.php');
}
else{
header("Location: /View/CSS/dashboard.php");
exit();}
?>