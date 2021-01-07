<?php
    session_start();
    
    $benutzername = $_POST["username"];
    $passwort = $_POST["password"];
    $sql = "SELECT username, password FROM users WHERE username = $benutzername and password = $passwort";
    $result = mysql_query($sql, $link);
    
    if ($result == false){
        echo '<a href="adminlogin.php">Bitte loggen dich zu erst ein</a>';
  exit;
    }

    $num_rows = mysql_num_rows($result);
    if($num_rows == 1) {
    $_SESSION["login"] = "OK";
    $_SESSION["username"] = $username;
    $redirect = "addgame.php";
}
    else
    $redirect = "adminlogin.php";

    mysql_free_result($result);
    mysql_close($link);

    header("Location: $redirect");
?>