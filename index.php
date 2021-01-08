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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <script
      src="https://kit.fontawesome.com/bb308353d9.js"
      crossorigin="anonymous">
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <div class="container-fluid">
                          <a class="navbar-brand" href="./index.php">GF</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                          </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                      <li class="nav-item">
                                      <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                                      </li>
                                      <li class="nav-item">
                                      <a class="nav-link" href="./adminlogin.php">Login</a>
                                      </li>   
                                  </ul>
                                      <form class="d-flex">
                                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                          <button class="btn btn-outline-success" type="submit">Search</button>
                                      </form>
                        </div>
                      </div>
    </nav>

  
    <div class="container">
 
<?php 
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    ?>
      <li id="card" class="card">
        <img class="img" src="<?= $row["imglink"] ?>" alt="Bild">
        <ul class="list-group">
              <li class="list-group-item">Name: <?= $row["name"] ?></li>
              <li class="list-group-item">Publisher: <?= $row["publisherName"] ?></li>
              <li class="list-group-item">Release: <?= $row["release"] ?></li>
              <li class="list-group-item">Shop: <?= $row["shopsName"] ?></li>
              <li class="list-group-item">Plattform: <?= $row["platform"] ?></li>
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

    </footer>
    <script src="script.js"></script>
  
  </body>

</html>


<?php 
    $db -> close();
?>


