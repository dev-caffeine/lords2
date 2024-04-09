<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lastsecond";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a table named 'borrowers'
    $sql = "INSERT INTO income_info (loan_amount, loan_purpose, employment_type, monthly_income, interest_rate, loan_duration) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $loan_amount, $loan_purpose, $employment_type, $monthly_income, $interest_rate, $loan_duration);
    
    // Set variables from form data
    $loan_amount = $_POST["loanamount"];
    $loan_purpose = $_POST["purpose"];
    $employment_type = $_POST["etype"];
    $monthly_income = $_POST["income"];
    $interest_rate = $_POST["interest"];
    $loan_duration = $_POST["duration"];
    
    // Execute the prepared statement
    if ($stmt->execute()) {
        header("Location:endpage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>