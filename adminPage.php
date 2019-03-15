<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Lab Instrument Management</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/sourceImg/ksricon.png" type="image/x-icon">
    <style>
        nav div {
            font-size: 25px;
            color: white;
            font-family: 'Open Sans', sans-serif;
        }
        .outer .outer-col{
            border: 2px  solid blue;
            border-right: none;
            border-top: none;
            border-bottom:none;
            height: 710px;
            width: 100%;
        }
        input,button,select{
            border-radius: 5px;
            margin-top: 10px;
            margin-left: 100px;
            width:100px;
        }
        .back{
            height : 50px;   
        }
        table{
            text-align: center;
        }
        button.ad{
            background-color: aqua; 
            float: right;
        }
        
    </style>
</head>

<body>
    
    <nav class="navbar navbar-dark indigo animated zoomIn">
        <div class="college-name" style="margin-right=50px">
            Lab Instrument Management System  -Admin
        </div>
        <a href="hme.php">
            <div>
                <button class="ad">Log out</button></a>
            </div>
    </nav>

        <div class="back" style="background-color:DodgerBlue;margin-top:5px;">
            <form action="adminPage.php" method="post">
                <input type="text" name="name"  placeholder="Name">
                <input type="text" name="item"  placeholder="Item">
                <select type="text" name="dat"  placeholder="Date">
                    <option value="">Date</option>
                    <?php
                    for($i=1;$i<10;$i++){
                        echo '<option value="0'.$i.'">0'.$i.'</option>';
                    }
                    for($i=10;$i<32;$i++){
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                </select>
                <select type="text" name="mon"  placeholder="Month">
                    <option value="">Month</option>
                    <?php
                    for($i=1;$i<10;$i++){
                        echo '<option value="0'.$i.'">0'.$i.'</option>';
                    }
                    for($i=10;$i<13;$i++){
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                </select>
                <input type="text" name="yr"  placeholder="Year">
                <button type="submit">Search</button>
            </form>
    <!--iframe src="admin.php" width=100% height=1000%></iframe-->
<?php
    if(!(isset($_POST['name'])||isset($_POST['itm'])||isset($_POST['dat'])||isset($_POST['mon'])||isset($_POST['yr']))){
        echo "<!--";
    }
    $nme=$_POST["name"];
    $itm=$_POST["item"];
    $dt=$_POST["dat"];
    $mn=$_POST["mon"];
    $yer=$_POST["yr"];
    if(!$nme==""){
        $name="name='$nme'";
    }
    else{
        $name="true";
    }
    if(!$itm==""){
        $item="item='$itm'";
    }
    else{
        $item="true";
    }
    if(!($dt==""&&$mn==""&&$yer=="")){
        $date="Reg_date like '$yer%-$mn%-$dt%'";
    }
    else{
        $date="true";
    }
    echo '</div>';
    echo '<div class="container-fluid">';
      echo '<div class="row outer">';
        echo '<div class="outer-col col-sm-2 col-lg-2 col-md-2">';
          echo '<button type="button" class="btn btn-purple" style="width: 100%">Name</button>';
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "instruments";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM register where $name and $item and $date order by reg_date desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td><h4>".$row["name"]."</h4></td></tr>";
                    }
                    echo "</table>";
                }
        echo '</div>';
        echo '<div class="outer-col col-s-7 col-lg-7 col-md-7">';
          echo '<div class="row inner">';
              echo '<div class="inner-col col-sm-6 col-lg-6 col-md-6">';
                echo '<button type="button" class="btn btn-cyan" style="width: 100%">Item</button>';
                $sql = "SELECT * FROM register where $name and $item and $date order by reg_date desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td><h4>".$row["item"]."</h4></td></tr>";
                    }
                    echo "</table>";
                }
              echo'</div>';
              echo '<div class="inner-col col-sm-6 col-lg-6 col-md-6">';
                echo '<button type="button" class="btn btn-cyan" style="width: 100%">Quantity</button>';
                
                $sql = "SELECT * FROM register where $name and $item and $date order by reg_date desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td><h4>".$row["quantity"]."</h4></td></tr>";
                    }
                    echo "</table>";
                }
                echo '</div>';
            echo '</div>';
        echo '</div>';
        echo '<div class="outer-col col-sm-3 col-lg-3 col-md-3">';
          echo '<button type="button" class="btn btn-purple" style="width: 100%">Time</button>';
                $sql = "SELECT * FROM register where $name and $item and $date order by reg_date desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td><h4>".$row["reg_date"]."</h4></td></tr>";
                    }
                    echo "</table>";
                }
               if(!(isset($_POST['name'])||isset($_POST['itm'])||isset($_POST['dat'])||isset($_POST['mon'])||isset($_POST['yr']))){
        echo "-->";
    }
        echo '</div>';
      echo '</div>';
   echo '</div>';
?>
<footer class="page-footer font-small blue animated zoomIn">

  
</footer>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
</body>

</html>
