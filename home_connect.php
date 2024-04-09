<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "document_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a table named 'borrowers'
    $sql = "INSERT INTO documents_information (adhar_no, pan_no, mobile_no, occupation, marital_status,pincode,dob) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $adhar_no, $pan_no, $mobile_no, $occupation, $marital_status,$pincode,$dob);
    
    // Set variables from form data
    $adhar_no = $_POST["adharno"];
    $pan_no = $_POST["pan"];
    $mobile_no = $_POST["mobno"];
    $occupation = $_POST["occupation"];
    $marital_status = $_POST["marital"];
    $pincode = $_POST["Pincode"];
    $dob = $_POST["dob"];
    
    // Execute the prepared statement
    if ($stmt->execute()) {
        header("Location:lastsecond.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>