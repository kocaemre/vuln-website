<?php

    $host = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "hevagi";
    
    // MYSQLi (object-oriented, procedural)
    // PDO

    $baglanti = mysqli_connect($host,$username,$password,$database);

    if(mysqli_connect_errno() > 0) {
        die("hata: ".mysqli_connect_errno());
    }

    
    $result_planes = mysqli_query($baglanti, "SELECT * from airplanes");

    $planes = mysqli_fetch_all($result_planes, MYSQLI_ASSOC);
    
    
   

    

?>