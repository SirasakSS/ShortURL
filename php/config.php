<?php 
    $domain = "shorturl.sirasak-saengaurai.com/"; 
    $host = "localhost";
    $user = "sirasaks_db"; 
    $pass = "123456"; 
    $db = "sirasaks_db"; 

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>