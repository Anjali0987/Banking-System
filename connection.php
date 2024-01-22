<?php
	$server_Name="localhost:3306";
	$userName="root";
	$password="";
	$database="mybank";
	try
	{
		$con=mySqli_connect($server_Name,$userName,$password,$database) or die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
		
		
	}
	catch(Exception $e)
	{
		echo $e;
	}
	?>