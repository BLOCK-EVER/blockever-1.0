
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
<center>
  <img style="height: 500px;" src="fimg.png" alt="image">
</center>
<div class="col-sm-6 col-md-4 col-md-offset-4"> 
<form action="otp.php" method="POST" accept-charset="utf-8">
  <center>
  <input type="hidden" value="<?php echo $_POST['aadhar']; ?>" name="aadhar">
  <input type="hidden" value="<?php echo $_POST['khasra']; ?>" name="khasra">
  <input type="submit" name="bank_submit" style="margin-top: 20px; font-weight: bold;" class="btn btn-success" value="Initiate loan">
  <!-- <a style="margin-top: 20px; font-weight: bold;" href="otp.html" class="btn btn-success">Initiate loan</a> -->
  </center>
</form>
</div>

</body>
</html>
