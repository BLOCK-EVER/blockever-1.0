<?php

$url = 'http://localhost:3000/titletransfers/titleTransfers/all';
$data = file_get_contents($url);
$jsondata = json_decode($data, true);
?>


<?php


	$result["rows"] = $jsondata;
	
	echo json_encode($result);

?>