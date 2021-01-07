<!DOCTYPE html>
<html lang="en">
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>GameFinder</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="./assets/img/icon.ico"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Rubik&display=swap"
      rel="stylesheet"/>

    <script
      src="https://kit.fontawesome.com/bb308353d9.js"
      crossorigin="anonymous">
    </script>
  
  </head>
 
<body>
        <div class="login-seite">
            <h1>Login</h1>

            <div class="textbox">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Benutzername">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Passwort">
            
        </div>

            <div>
            <button class="loginbutton">Login</button>
        </div>

        <div>
            <INPUT TYPE="button" value="zuück zur Startseite" onClick="parent.location='http://localhost:8888/GameFinder/index.php'"></FORM>
        </div>
    </form>
</body>
 
</html>


<?php

include checklogin.php;

error_reporting(E_ALL); 
ini_set('display_errors', 'on');

$db = mysqli_connect("127.0.0.1:8889","root","root","gamefinder");
if(!$db) {
    exit("Verbindungsfehler: ".mysqli_connect_error());
}

$abfrage = "SELECT * FROM users";
$result = mysqli_query($db, $abrage);
?>