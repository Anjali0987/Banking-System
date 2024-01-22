<?php
include 'connection.php';
include 'database.php';

if(isset($_POST['acname']))
{
	$ac=$_POST['acname'];
}
if(isset($_POST['custid']))
{
	$custid=$_POST['custid'];
	//echo $custid;
}
if(isset($_POST['txtamt']))
{
	$amt=$_POST['txtamt'];
}

$r=getdetails($con,$custid);
if($r[3]<$amt)
{
	header("Location: error.php?errcode=1&id=$custid");	
	exit();
}
else
{
	
	$rec=getdetails($con,$ac);
	$inse=mySqli_query($con,"insert into transation(sname,send_id,recv_id,recv_name,amount)values('$r[1]',$r[0],$rec[0],'$rec[1]',$amt)");
	if(!$inse)
	{
		echo mySqli_error();
	}
	else
	{
		$u=updatedetails($con,$r[0],($r[3]-$amt));
		$u1=updatedetails($con,$rec[0],($rec[3]+$amt));
		if($u==1 and $u1==1)
		{
			header("Location: success.php?id=$custid");
	
	
			exit();
		}
		
	}
	
	
}
	
	
?>