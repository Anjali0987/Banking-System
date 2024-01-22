<?php
include 'connection.php';
function getdetails($con,$id)
{
	$r=null;
		$result=mySqli_query($con,"select * from customer where cust_id=".$id);
	if(!$result)
	{
		echo mySqli_error($con);
	}
	else
	{
		while($row=mySqli_fetch_array($result))
		{
			$r=$row;
		}
	}
	
	return $r;
}
function updatedetails($con,$id,$amt)
{
	$r=null;
	$result=mySqli_query($con,"update customer  set balance=$amt where cust_id=".$id);
	if(!$result)
	{
		$r=0;
		echo mySqli_error($con);
	}
	else
	{
		$r=1;
	}
	
	return $r;
}

