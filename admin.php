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
<?php    
    echo '</div>';
    echo '<div class="container-fluid">';
      echo '<div class="row outer">';
        echo '<div class="outer-col col-sm-2 col-lg-2 col-md-2">';
          echo '<button type="button" class="btn btn-purple" style="width: 100%">Name</button>';
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "instruments";
                $nme=$_POST["name"];
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "<h1>".$nme."</h1>";
                $sql = "SELECT * FROM register  order by reg_date desc";
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
                $sql = "SELECT * FROM register order by reg_date desc";
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
                $sql = "SELECT * FROM register order by reg_date desc";
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
    
    </html>