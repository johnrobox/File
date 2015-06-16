<?php 
	function connection(){
		$connection	=	mysqli_connect("localhost","root","","ajaxdb");
		return $connection;
	}
	$connection = connection();
	$name	=	$_POST['name'];
	$location = $_POST['location'];
	$result = mysqli_query($connection,"INSERT INTO names (name,location) VALUES ('$name','$location')");
	if($result){
		echo 'Successfully Inserted '.$name;
	}