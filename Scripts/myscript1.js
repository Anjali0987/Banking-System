var imag= new Array("images/login_1.jpg","images/login_2.jpg","images/login_3.jpg","images/login_4.jpg","images/login_5.jpg","images/login_6.jpg");
var i=1
function showbuttons()
		{
			document.getElementById("prevbtn").style.visibility="visible";
			document.getElementById("nextbtn").style.visibility="visible";
		}
		function hidebuttons()
		{
			document.getElementById("prevbtn").style.visibility="hidden";
			document.getElementById("nextbtn").style.visibility="hidden";
		}
		function next(id)
		{
			
			if(i>5)
			{
				i=0;
				document.getElementById("frontimage").src=imag[i];
			}
			else
			{
				document.getElementById("frontimage").src=imag[i];
				i++;
			}
		}
		function menudetails()
		{
			//document.getElementById("head1").innerHTML="Hello";
			//alert("next");
			if(document.getElementById("contentpnnel").style.display != "none")
			{
			document.getElementById("contentpnnel").style.visibility="hidden";
			document.getElementById("content_content").style.visibility="visible";
			document.getElementById("content_content").style.width="100%";
			document.getElementById("content_content").style.position="absolute";
			document.getElementById("contentpnnel").style.display = "none";
			}
			else
			{
				document.getElementById("contentpnnel").style.visibility="visible";
			document.getElementById("content_content").style.visibility="visible";
			document.getElementById("content_content").style.width="80%";
			document.getElementById("content_content").style.position="relative";
			document.getElementById("contentpnnel").style.display = "inline-block";
			}
			
		}
		function prev(id)
		{
			if(i<0)
			{
				i=5;
				document.getElementById("frontimage").src=imag[i];
			}
			else
			{
				document.getElementById("frontimage").src=imag[i];
				i--;
			}
		}
		function change()
		{
			
			if(i>5)
			{
				i=0;
				document.getElementById("frontimage").src=imag[i];
			}
			else
			{
				document.getElementById("frontimage").src=imag[i];
				i++;
			}
		}
	function startbk()
	{
		document.getElementById("prevbtn").style.opacity="0.1";
		document.getElementById("nextbtn").style.opacity="0.1";
		ref=setInterval("change()",3000);
	}
	function stopbk()
	{
		document.getElementById("prevbtn").style.opacity="1";
		document.getElementById("nextbtn").style.opacity="1";
		clearInterval(ref);
	}
	
	function call()
	{
		alert("sdfgh");
	}
	