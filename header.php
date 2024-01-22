<html>
	<head><title>Banking System</title>
	<link rel="stylesheet" href="stylesheet/admin1.css">
	<script src="Scripts/myscript1.js"></script>
	<link href="stylesheet/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="shortcut icon" href="images/bank1.ico" type="image/x-icon">
	</head>
	<body onload="startbk()">
		<div id="head1">
		
			<center><B><font size="7">Basic Banking System</font></b></center>
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