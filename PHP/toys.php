<?php

    header('Access-Control-Allow-Origin: *');
    $myObj = new stdclass();
    $myObj->name = "John";
    $myObj->age = 30;
    $myObj->city = "New York";

    $myJSON = json_encode($myObj); 

    echo $myJSON;
?>