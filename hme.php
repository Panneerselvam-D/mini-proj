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
        input,button{
            border-radius: 5px;
            margin-top: 10px;
            margin-left: 100px;
            width:200px;
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
            Lab Instrument Management System
        </div>
        <a href="login.html">
            <div>
                <button class="ad">Admin</button></a>
            </div>
    </nav>
    <div class="back" style="background-color:DodgerBlue;margin-top:5px;">
         <form action="insert.php" method="post">
            <input type="text" name="name"  placeholder="Name">
            <input type="text" name="item"  placeholder="Item">
             <input type="text" name="quant"  placeholder="Quantity">
             <button type="submit">Submit</button>
        </form>
         
    </div>
    <div class="container-fluid">
      <div class="row outer">
        <div class="outer-col col-sm-2 col-lg-2 col-md-2">
          <button type="button" class="btn btn-purple" style="width: 100%">Name</button>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "instruments";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM register order by reg_date desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td><h4>".$row["name"]."</h4></td></tr>";
                    }
                    echo "</table>";
                }
            
            ?>
        </div>
        <div class="outer-col col-s-7 col-lg-7 col-md-7">
          <div class="row inner">
              <div class="inner-col col-sm-6 col-lg-6 col-md-6">
                <button type="button" class="btn btn-cyan" style="width: 100%">Item</button>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "instruments";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM register order by reg_date desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td><h4>".$row["item"]."</h4></td></tr>";
                    }
                    echo "</table>";
                }
            
            ?>
              </div>
              <div class="inner-col col-sm-6 col-lg-6 col-md-6">
                <button type="button" class="btn btn-cyan" style="width: 100%">Quantity</button>
                  <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "instruments";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM register order by reg_date desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td><h4>".$row["quantity"]."</h4></td></tr>";
                    }
                    echo "</table>";
                }
            ?>
                </div>
            </div>
        </div>
        <div class="outer-col col-sm-3 col-lg-3 col-md-3">
          <button type="button" class="btn btn-purple" style="width: 100%">Time</button>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "instruments";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM register order by reg_date desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td><h4>".$row["reg_date"]."</h4></td></tr>";
                    }
                    echo "</table>";
                }
            ?>
        </div>
      </div>
    </div>
    
    
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
