<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "borrower";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "INSERT INTO borrower_db (first_name, last_name, address, gender, email) VALUES (?, ?, ?, ?, ?)";
    
  
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $first_name, $last_name, $address, $gender, $email);
    
  
    $first_name = $_POST["firstname"];
    $last_name = $_POST["lastname"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    
    
    if ($stmt->execute()) {
        header("Location:home.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

  
    $stmt->close();
}


$conn->close();
?>