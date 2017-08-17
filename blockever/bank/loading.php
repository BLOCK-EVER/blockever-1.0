<html>
<script>
setTimeout(function () {
   //window.location.href= 'http://www.google.com'; // the redirect goes here
},2000); // 2 seconds
</script>
<body onload="document.form1.submit()">
<form action="bank_submit.php" method="POST" accept-charset="utf-8" name="form1">
  <center>
  <img style="margin-top: 10%;" src="loading.gif" />
  <h3>Seaching for varification<h3>
  <input type="hidden" value="<?php echo $_POST['aadhar']; ?>" name="aadhar">
  <input type="hidden" value="<?php echo $_POST['khasra']; ?>" name="khasra">
  </center>
</form>
</body>