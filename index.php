<?php
error_reporting(E_ALL); 
ini_set('display_errors', 'on');

$db = mysqli_connect("127.0.0.1:8889","root","root","gamefinder");
if(!$db) {
    exit("Verbindungsfehler: ".mysqli_connect_error());
}

$sql = 'SELECT game.*, publisher.name as publisherName FROM game LEFT JOIN publisher ON game.idpublisher = publisher.id;';
$result = mysqli_query($db, $sql);
?>

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
    <div class="container">

    <ul class="card">
<?php 
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       //echo "Name: " . $row["name"]. "<br>";
      // echo "Release: " . $row["release"]. "<br>";
      // echo "Shop: " . $row["shop"]. "<br>";
       //echo "Platform: " . $row["platform"]. "<br>";
       ?>
        <li>Name:<?= $row["name"] ?></li>
        <li>Release:<?= $row["release"] ?></li>
        <li>Shop:<?= $row["shop"] ?></li>
        <li>Platform:<?= $row["platform"] ?></li>
       <?php
    }
 } else {
    echo "0 results";
 }
?>
    </ul>
    </div>
    <button class="topBtn" onclick="topFunction()" id="topBtn">
      <i class="fas fa-arrow-up"></i>
    </button>
    <footer class="footer"></footer>
    <script src="script.js"></script>
  </body>
</html>

<?php 
    $db -> close();
?>