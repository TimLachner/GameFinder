<?php
    require "./core/db.php";

    error_reporting(E_ALL); 
    ini_set('display_errors', 'on');

    $benutzername = $_POST["username"];
    $passwort = $_POST["password"];

    $sql = "SELECT username, password FROM users WHERE username = '$benutzername' and password = '$passwort'";

    $result = mysqli_query($db, $sql);


    $num_rows = mysqli_num_rows($result);

    mysqli_close($db);

    if($num_rows == 1) {
        session_start();
        $_SESSION["username"] = $benutzername;
        header("Location: ./addgame.php");
        exit;
    }

    header("Location: ./adminlogin.php");
    exit;

?>
