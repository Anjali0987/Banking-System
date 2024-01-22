<html>
	<head><title>Banking System</title>
	<link rel="stylesheet" href="stylesheet/admin1.css">
	<link rel="shortcut icon" href="images/bank1.ico" type="image/x-icon">
	<script src="Scripts/myscript1.js"></script>
	<script>
	function getBalance(id)
	{
		
		var a=document.getElementById(id).value;
		
		if(a<=0)
		{
			alert("OOPS : Invalid Amount Please Input A Valid Amouunt!!!!!!");
			document.getElementById(id).value="";
			
		}
		
	}
	</script>
	
	  <link href="stylesheet/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	</head>
	<body onload="startbk()">
		<div id="head1">
		
			<center><B><font size="7">Banking System</font></b></center>
		</div>
		<div id="navmenu">
		<b>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="customer.php">All Coustomers</a></li>
				<li><a href="#">History</a>
					<ul>
						<li><a href="user.php">User</a></li>
						<li><a href="history_all.php">All History</a></li>
					</ul>
				
				</li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			</b>
		</div>
		<div id="image">
			<div id="prevButton">
				<img src="images/prev.png" id="prevbtn" style="height:100%;width:100%;opacity:0.1;" onClick="prev(this.id)"onmouseover="stopbk()" onMouseout="startbk()" >
			</div>
			<div id="nextButton">
				<img src="images/next.png" id="nextbtn" style="height:100%;width:100%;" onClick="next(this.id)" onmouseover="stopbk()" onMouseout="startbk()">
			</div>
			 <img src="images/login_1.jpg"  id="frontimage" style="height:100%;width:100%;" onmouseover="stopbk()" onMouseout="startbk()"class="s" > 
			  
				 
				 </div>
		</div>				
			<div id="content" >
				
				<div id="content_content" class="scroll">
				<br><br>
				<fieldset >
					<legend>Transfer Form</legend>
					<form action="transaction.php" method="post">
					<table >
						<td>Name</td>
						<td>
							<select name="acname" style="width:200px;">
								<?php
									include 'connection.php';
									include 'database.php';
									
									$result=mySqli_query($con,"select * from customer where cust_id!=".$_GET['id']);
									if(!$result)
									{
										echo mySqli_error($con);
									}
									else
									{
										while($row=mySqli_fetch_array($result))
										{
											echo "<option value='$row[0]'>$row[1]</option>";
										}
									}
									
										
									
							?>
							<input type="hidden" name="custid" value="<?php echo $_GET['id']?>">
							</td>
							</tr>
							<tr>
							<td>Amount</td>
							<td><input type="number" id="transamt" name="txtamt" placeholder="Enter amount" style="width:200px;" onblur="getBalance(this.id)" required></td>
							</tr>
							<tr>
								<td><input type="submit" value="Transfer" ></td>
								<td></td>
							</tr>
						
					</table>		
					</form>
				</fieldset>
				
				</div>
			
			</div>
			<div id="Footer">
					<div id="Footer_about" align="left"><b style="font-size:25px;">About</b>
					<p align="justify">
						Money Transfer System is a global payment engine that offers multi-bank, multi-currency and 24x7 payment processing capabilities, in addition to seamless integration with multiple clearing and settlement mechanisms, as well as SWIFT messaging.
						</P>
					</div>
					
					<div id="Footer_quick" align="left"><b style="font-size:25px; color:white;">&nbsp&nbsp&nbsp Quick</b>
					<p >
						<ul style="list-style:none;float:left;text-decoration:none">
							<li align="left"><a href="index.html">Home</a></li>
				<li align="left"><a href="customer.php">All Coustomers</a></li>
				<li align="left"><a href="#">History</a></li>
				<li align="left"><a href="about.php">About</a></li>
				<li align="left"><a href="contact.php">Contact</a></li>
				</ul>
					</div>
					<div id="Footer_social" style="color:white;" align="left"><b style="font-size:25px; color:white;">Social</b>
						<br>
					<ul style="list-style:none;">
						<li><a href="#"><img src="images/face.png" height="30" width="30" style="float:left;">FaceBook</a></li><br>
						<li><a href="#"><img src="images/twi.jpg" height="30" width="30" style="float:left;">Twitter</a></li>
					</ul>
					</div>
					<div id="Footer_contact"align="left"><b style="font-size:25px;">Contact Details</b>
					<p>Banking System<br>
					S.NO:#203<br>
					Hatia<br>
					Cell : 8987xxxxx4
					</p>
					</div>
			
		
			</div>
			<div id="Footer1">
			<center><b>2021 Banking System .All rights Are Reserved </b></center>
			</div>
		
	</body>
</html>