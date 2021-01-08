<?php
    require "./core/db.php";

    
    $sql = 'SELECT * FROM game';
    $result = mysqli_query($db, $sql);
    echo $result['release'];
?>