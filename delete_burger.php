<?php
$id = $_GET["id"];

//Create Connection
$conn = new mysqli("localhost", "root", "", "burger_house");

//Check if connection success
if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}

//Execute query
$sql = "DELETE FROM burgers WHERE id='$id'";
$result = $conn->query($sql);

if($result>0){
    echo "Deleted Successfully";
    header("Location: /index.php");
}else{
    echo "Deletation Error";
}

?>