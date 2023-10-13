<?php
// Connecting to the Database
$servername = "bitcot.c2vmcishggai.eu-north-1.rds.amazonaws.com";
$username = "admin";
$password = "admin12345";
$database = "db";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Add a separate line
echo "hi BitCot my name is Ananth<br>";


// Create a table (example)
$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
)";

// Check for table creation success
if(mysqli_query($conn, $sql)){
    echo "Table created successfully!<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
