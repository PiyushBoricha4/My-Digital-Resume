<?php
    $hostname = "localhost";
    $db_uname = "id22081875_data";
    $db_pass = "Piyush@124";
    $dbname = "id22081875_connect
    ";
    $con = mysqli_connect($hostname,$db_uname,$db_pass,$dbname);

    if($con)
    {
        echo "Connection is Successful";
    }
    else
    {
        echo "Connection Failed";
    }
?>