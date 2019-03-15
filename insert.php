<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "instruments";
$name=$_POST["name"];
$item=$_POST["item"];
$quan=$_POST["quant"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($name==""||$item==""||$quan==""){
    echo '<center><h1 style="color:red; font-family=gabriola; font-size:30px;">INVALID TRY</h1><br><a href="hme.php"><p>BACK TO HOME</p></a></center>';
}
else{
$sql = "INSERT INTO register (name,item,quantity) values ('$name','$item','$quan')";
if ($conn->query($sql) === TRUE) {
    header('Location:hme.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>