<?php
    

    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","employees");

    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    if(!$connection){
        die("Connection Failed");
    }
?>