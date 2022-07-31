<?php

if (isset($_POST["burger-name"])) {
    $name = $_POST["burger-name"];
    $description = $_POST["burger-description"];

    //Create Connection
    $conn = new mysqli("localhost", "root", "", "burger_house");

    //Check if connection success
    if ($conn->connect_error) {
        die("Connection failed : " . $conn->connect_error);
    }

    //Execute query
    $sql = "INSERT INTO burgers VALUES (0,'$name','$description',true)";
    $result = $conn->query($sql);

    if ($result > 0) {
        echo "Burger Added Successfully";
    } else {
        echo "Buger Adding Error";
    }
}
