<?php

$url = 'http://localhost:3000/titletransfers/titleTransfers/all';
$data = file_get_contents($url);
$jsondata = json_decode($data, true);
$length = count($jsondata);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>BlockEver</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap.css">
   <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
  <script src="jquery.js"></script>
  <script src="bootstrap.js"></script>
 
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
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
    .table {
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
    <div class="col-sm-6 col-md-6 col-md-offset-3"> 
      <h1><center style="color: green; font-weight: bold;"><u>BLOCKEVER</u></center></h1>
      <h4><center style="font-weight: bold;">Bank</center></h4>
      <br><br>
      <center>
      <table class="table table-bordered">
		<tr>
          <th>S.N. </th>
          <th>Loan No.</th>
          <th>Khasara No.</th>
          <th>Aadhar No.</th>
        </tr>
		<?php $c = 1; ?>
        <?php foreach(array_reverse($jsondata) as $d) { ?>
        <tr>
          <td><?php echo $c; ?></td>
          <td><a href="#"> <?php echo $d['ttid']; ?> </a></td>
          <td><?php echo $d['khasraNo']; ?></td>
          <td><?php echo $d['adhaarNo']; ?></td>
        </tr>
		<?php  $c++; } ?>
      </table>
	  
      </center>
    </div>
  </div>
</div>



<!-- <footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer> -->


</body>
</html>
