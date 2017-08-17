<?php

$t = time();
 $value = array(
	"counter" => $t,
    "name" => 'TT1',
	"khasraNo" => $_POST['khasra'],
    "adhaarNo" => $_POST['aadhar']
   
  );
$k = $_POST['khasra'];

 $query = http_build_query($value);
 //print_r($query );

$url = 'http://localhost:3000/titletransfers/create';
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Centent-Type: application/json'));
 curl_setopt($ch, CURLOPT_HEADER, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_POST, true);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

 $result = curl_exec($ch);
 //print_r($result);
 
 
 curl_close($ch);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>BlockEver</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap.css">
  <script src="jquery.js"></script>
  <script src="bootstrap.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    .table > tbody > tr > td, .table > tbody > tr > th {
      border-top: 1px solid #ccc;
      background-color: #ccc;
      box-shadow: 0px 0px 5px 1px #ccc;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!-- <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul> -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">PNB 68790</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-6 col-md-4 col-md-offset-4"> 
      <h2><center style="color: green; font-weight: bold;"><u>BLOCKEVER</u></center></h2>
  <h4><center style="font-weight: bold;">Smart contract</center></h4>
      <br><br><br><br>
      <center>
      <table class="table">
        <tr>
          <td><br>
            <b><center>Contract created successfully</center></b>
          </td>
        </tr>
        <tr>
          <td><br>
            <b><center>Loan Number <?php echo $t; ?> </center></b>
            <b><center>Khasra No. <?php echo $k; ?> Locked </center></b>
        <br><br><br>
          </td>
        </tr>
      </table>
      </center>
    </div>
    <div class="col-sm-6 col-md-4 col-md-offset-4"> 
    <center><a style="margin-top: 20px; font-weight: bold;" href="print.html" class="btn btn-success">Print</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a style="margin-top: 20px; font-weight: bold;" href="allloan.php" class="btn btn-success">All Loans</a></center>
    </div>
  </div>
</div>

<!-- <footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer> -->


</body>
</html>
