<?php
	if($_POST['hasce']){
		$hasce=$_POST['hasce'];
		if($_POST['anun']){
			$anun=$_POST['anun'];
		}else{
			$anun="PICTURE";
		}
		$query="INSERT INTO nkarner(anun,hasce) VALUES('$anun','$hasce')";
		require_once 'connect.php';
		$result=$connect->query($query);
		if (!$result){
			print $connect->error;
		}
	}
?>