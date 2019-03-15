<?php
$servername ="localhost";
$username ="root";
$password ="";
$auname=$_POST["AUname"];
$apass=$_POST["Apass"];
$pass="  ";
$conn = mysqli_connect($servername, $username, $password,"instruments");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="select * from Admin";
$result=$conn->query($sql);
 while(($row = $result->fetch_assoc())!== null) {
        echo  $row["passwd"]. " " ."<br>";
        $pass= $row["passwd"];
    }
if($pass==$apass){
    header('Location: adminPage.php');
    
}
else{
    header('Location: hme.php');
}

mysqli_close($conn);
?>
