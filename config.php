<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "user_db";
    $conn = mysqli_connect($host,$user,$pass,$db);

    if(!$conn){
        die("koneksi dengan database gagal: ".mysqli_connect_error());
    } else {
    }

?>