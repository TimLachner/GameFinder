<?php 
if(!isset($_SESSION['username'])){
    header("Location: ./adminlogin.php");
    
}