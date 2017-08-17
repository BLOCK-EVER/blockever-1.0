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
<script>
var time = '<?php echo $t; ?>';
var khasra = '<?php echo $k; ?>';

window.location.href = "http://localhost/blockever/created.php?l=" + time + "&k=" + khasra;
</script>