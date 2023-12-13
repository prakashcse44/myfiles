<?php
// $name = $_POST['name'];
// $email = $_POST['email'];
// $subject = $_POST['subject']; 
// $message = $_POST['message'];

// if (!$email) {
//     die("Correct Email Must Be Write");
// }
// $host = "localhost";
// $dbname = "CollageMessage";
// $username = "root";
// $password = "";


// Database connection parameters
$servername = "localhost"; // Assuming your database server is on the same machine
$username = "root"; // Replace with your database username
$password = ""; // Assuming your database has no password
$dbname = "mycollagedata"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // SQL query to insert data into the "message" table
    $sql = "INSERT INTO message (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();




// $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);
// if (mysqli_connect_errno()) {
//     die("Connection Error:" . mysqli_connect_error());
// }
// $sql = "INSERT INTO message (name,  email, subject, message) VALUES (?, ?, ?, ? )";

// $stmt = mysqli_stmt_init($conn);

// if(! mysqli_stmt_prepare($stmt, $sql)){
//     die(mysqli_error($conn));

// }

// mysqli_stmt_bind_param($stmt, "ssii", $name, $email, $subject, $message);
// mysqli_stmt_execute($stmt);
// echo"Record Saved.";
// ?>