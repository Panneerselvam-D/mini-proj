<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$sql="select schema_name from information_schema.schemata where schema_name = 'instruments'";
$result=$conn->query($sql);
if($result->num_rows>0){
    header('Location: hme.php'); 
}
else{
    header('Location: first.html');
}
$conn->close();
?>