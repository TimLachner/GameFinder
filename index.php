<?php
error_reporting(E_ALL); 
ini_set('display_errors', 'on');

$db = mysqli_connect("127.0.0.1:8889","root","root","gamefinder");
if(!$db) {
    exit("Verbindungsfehler: ".mysqli_connect_error());
}

$sql = 'SELECT game.*, publisher.name as publisherName, shops.name as shopsName FROM game LEFT JOIN publisher ON game.idpublisher = publisher.id LEFT JOIN shops ON game.idshop = shops.id;';
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
      rel="stylesheet"/>

    <script
      src="https://kit.fontawesome.com/bb308353d9.js"
      crossorigin="anonymous">
    </script>
  
  </head>
  <body>
  <h1>GameFinder</h1>
  
    <header class="header">
        
      <div class="suche">
          <input
            class="sucht"
            type="text"
            name="suche"
            placeholder="Suche nach Spielen..."
            id="suchtext"
            value=""/>
          <a class="such-btn">
            <i class="fas fa-search"></i>
          </a>

      </div>

      
      <div class="filter">

      <button onclick="filter()" class="fbtn" type="button">
      <i class="fas fa-align-justify"></i>
      </button>

      <div id="filter" class="filter-content">
      <a onclick="name()" href="#">Name</a>
      <a onclick="release()" href="#">Release</a>
      <a onclick="platform()" href="#">Platform</a>
      </div>
      </div>
    
    </header>
  
  
    <div class="container">
 
<?php 
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    ?>
      <li id="card" class="card">
        <img class="img" src="<?= $row["imglink"] ?>" alt="Bild">
          <ul>
            <li class="name">Name: <?= $row["name"] ?></li>
              <li class="pulisher">Publisher: <?= $row["publisherName"] ?></li>
                <li class="release">Release: <?= $row["release"] ?></li>
              <li class="shop">Shop: <?= $row["shopsName"] ?></li>
            <li class="plattform">Plattform: <?= $row["platform"] ?></li>
          </ul>
      </li>
       
    <?php
    }
 } else {
    echo "0 results";
 }
?>
  </div>

    <button class="topBtn" onclick="topFunction()" id="topBtn">
      <i class="fas fa-arrow-up"></i>
    </button>
    
    <footer class="footer">
    
    <INPUT TYPE="button" value="ADMIN-Login" onClick="parent.location='http://localhost:8888/GameFinder/adminlogin.php'"></FORM>
    
    </footer>
    <script src="script.js"></script>
  
  </body>

</html>


<?php 
    $db -> close();
?>


