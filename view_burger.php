<?php 

//Create Connection
$conn = new mysqli("localhost", "root", "", "burger_house");

//Check if connection success
if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}

//Execute query
$sql = "SELECT * FROM burgers";
$result = $conn->query($sql);

//fetch data
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $isAvailable = $row["isAvailable"] ? "Available" : "Not Available";
        echo '
            <div class="col-lg-3 p-3">
                <div class="card" style="width: 18rem">
                    <img src="./buger-img.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">'.$row["name"].'</h5>
                        <h6 class="card-subtitle mb-2 text-muted">'.$isAvailable.'</h6>
                        <p class="card-text">
                            '.$row["description"].'
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="./delete_burger.php?id='.$row["id"].'" role="button" class="btn btn-Danger">Delete</a>
                    </div>
                </div>
            </div>';
    }
}
