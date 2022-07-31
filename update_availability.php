<?php

if (isset($_POST['burger-id']))
    $id = $_POST['burger-id'];
$isAvailable = $_POST["isAvailable"];

//Create Connection
$conn = new mysqli("localhost", "root", "", "burger_house");

//Check if connection success
if ($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error);
}

//Execute query
$sql = "UPDATE burgers SET isAvailable = '$isAvailable' WHERE id = '$id'";
$result = $conn->query($sql);

if ($result > 0) {
    echo "Burger Availability Setting success";
    header("Location: /index.php");
} else {
    echo "Error";
}
