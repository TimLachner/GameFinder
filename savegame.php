<?php
require "./core/db.php";

$name = $_POST["name"];
$publisher = $_POST["publisher"];
$release = $_POST["release"];
$shop = $_POST["shop"];
$platform = $_POST["plattform"];
$imglink = $_POST["imglink"];

print_r($_POST);
print_r($db);

$sql = "INSERT INTO game (gamename, idpublisher, idshop, platform, imglink) VALUES ('$name', '$publisher', '$shop', '$platform', '$imglink')";

if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
 } else {
    echo "Error: " . $sql . "" . mysqli_error($db);
 }
redirect("./addgame.php");

 $db->close();

?>