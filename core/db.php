<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 'on');
$db = mysqli_connect("127.0.0.1:8889","root","root","gamefinder");
if(!$db) {
    exit("Verbindungsfehler: ".mysqli_connect_error());
}
