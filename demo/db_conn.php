<?php

    $sname = "localhost";
    $dname = "root";
    $password = "";

    $db_name = "test_db";

    $conn = mysqli_connect($sname, $dname, $password, $db_name);

    if(!$conn) {
        echo "CONNECTION FAILED";
    }
?>