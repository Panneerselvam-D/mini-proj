<?php
$servername = "localhost";
$username = "root";
$password ="";
$admname=$_POST["Aname"];
$dbname="Instruments";
$auname=$_POST["AUname"];
$apass=$_POST["Apass"];
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE Instruments";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
echo "<br>";
$con = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE Register (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
item VARCHAR(50),
quantity VARCHAR(20),
reg_date TIMESTAMP
)";
if ($con->query($sql) === TRUE) {
    echo "Table Register created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
echo "<br>";
$sql = "CREATE TABLE Admin(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
username VARCHAR(50),
passwd VARCHAR(50)
)";
if ($con->query($sql) === TRUE) {
    echo "Table Admin created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
echo "<br>";
$stmt = $con->prepare("INSERT INTO Admin (name, username, passwd) VALUES ('$admname','$auname','$apass')");
$stmt->execute();
$stmt->close();
echo "<br>";
$con->close();
mysqli_close($conn);
header('Location: hme.php'); 
?>