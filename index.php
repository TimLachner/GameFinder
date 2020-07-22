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
      href="./assets/icon.ico"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Rubik&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/bb308353d9.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
      <h1>GameFinder</h1>
    <div class="suche">
      <input
        class="sucht"
        type="text"
        name="suche"
        placeholder="Suche nach Spielen..."
        id="suchtext"
        value=""
      />
      <a class="such-btn">
        <i class="fas fa-search"></i>
      </a>
    </div>
    <button class="topBtn" onclick="topFunction()" id="topBtn">
      <i class="fas fa-arrow-up"></i>
    </button>
    <footer class="footer"></footer>
    <script src="script.js"></script>
  </body>
</html>

<?php
$db = mysqli_connect("127.0.0.1:8889","root","","gamefinder");
if(!$db) {
    exit("Verbindungsfehler: ".mysqli_connect_error());
}
?>