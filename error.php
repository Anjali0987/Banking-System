<html>
	<head><title>Banking System</title>
	<link rel="stylesheet" href="stylesheet/admin1.css">
	<script src="Scripts/myscript1.js"></script>
	<link href="stylesheet/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="shortcut icon" href="images/bank1.ico" type="image/x-icon">
	<style>
		a.one:link {color: purple;text-decoration:none;}  
   a.one:visited {color: purple}  
   a.one:hover {color: lightblue}  
   a.one:active {color: purple} 
   </style>
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
					
					<?php
							if($_GET['errcode']==1)
							{
							echo '<script language="javascript">';
							echo 'alert("OOPS : You Have Insufficient Balance To Make This transaction!!!!!!")';
							echo '</script>';
							$i=$_GET['id'];
							echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							echo"<font color='red' size='6'> <a class='one' href='transfer.php?id=$i'>Go To Transfer page</a></font>";
								
								
								
							}
					?>
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
					
						<a href="#"><img src="images/face.png" height="30" width="30" style="float:left;">FaceBook</a><br><br>
						<a href="#"><img src="images/twi.jpg" height="30" width="30" style="float:left;">Twitter</a>
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