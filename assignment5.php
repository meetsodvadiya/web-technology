<html>
        <style>
                body {
                  background-image: url('https://www.smartertechnologysolutions.com.au/wp-content/uploads/2015/04/banner3.jpg');
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
                </style>
<head>
    
<script>

function validate()
{    
 var email = document.StudentRegistration.emailid.value;
  ap = email.indexOf("@");
  dp = email.lastIndexOf(".");
 if (email == "" || ap < 1 || ( dp - ap < 2 )) 
 {
     alert("Please enter correct email ID")
     document.StudentRegistration.emailid.focus() ;
     return false;
 }
 function myF() 
 {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
 }
function blurF() 
       { 
    	document.getElementById("I1").style.background = "#87ceeb";
    	document.getElementById("I2").style.background = "#87ceeb";
    	document.getElementById("I3").style.background = "#87ceeb";
    	document.getElementById("I4").style.background = "#87ceeb";
       }
}
</script>
</head>
<body >
        <table style="text-align:center;" align="center" border="0" height="13%" width="100%" >
                <tr>
                    <th colspan="2"> <h1><font color="white">NATIONAL WORKSHOP ON WEB TECHNOLOGY.</font></h1> </th>
                </table></tr>
<form name="myform" action="#" method="post" autocomplete="on" on oninput="x.value=parseInt(a.value)">

<table bgcolor="white"  align="center"  height="400px" width="400px" border="2px">

<tr bgcolor=" #87ceeb">
<td colspan=2>
<center><font size=4><b>Registration Form</b></font></center>
</td>
</tr>

<tr bgcolor=" #87ceeb">
<td><b>Name</td>
<td><input type=text id="I1"  name="fname" size="30" onblur="blurF()" onblur="myF()" ></td>
</tr>

<tr bgcolor=" #87ceeb">
<td><b>Gender</td>
<td><input type="radio" name="Gender" value="male" size="10">Male
<input type="radio" name="Gender" value="Female" size="10">Female</td>
</tr>

<tr bgcolor=" #87ceeb">
<td><b>Designation</td>
<td><select name="Course">
<option value="-1" selected>select..</option>
<option value="Student">Student</option>
<option value="Faculty">Faculty</option>
<option value="Company">Company representatives</option>
<option value="Professional">Professional</option>
</select></td>
</tr>
<tr bgcolor=" #87ceeb">
<td><b>EmailId</td>
<td><input type="text" name="emailid" id="I2" onblur="blurF()"  size="30"></td>
</tr>

<tr bgcolor=" #87ceeb">
<td><b>DOB</td>
<td><input type="date" name="dob" id="I3" size="30" onblur="blurF()" ></td>
</tr>

<tr bgcolor=" #87ceeb">
<td><b>MobileNo</td>
<td><input type="text" name="mobileno" id="I4" onblur="blurF()"  size="30"></td>
</tr>
<tr bgcolor=" #87ceeb">
<td colspan="2" align="center">
<input type="submit" name="Submit" onclick="display()" value="Submit">
<input type="reset" value="Reset All"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
$c=mysqli_connect("localhost","root","");
if($c)
	{
		if(isset($_POST["submit"]))
			{
				$fn=$_POST['fname'];
				$co=$_POST['Cource'];
				$em=$_POST['emailid'];
				$gen=$_POST['Gender'];
				$date=$_POST['dob'];
				$mob=$_POST['mobileno'];
			
				

				$ins="insert into Registration values('$fn','$co','$em','$gen','$date','$mob')";

				mysqli_select_db($c,"Workshop");

				if(mysqli_query($c,$ins))
					{
						echo"<br><script>alert('All the entries are registered successfully');</script><br>";
					}
 ?> 
            
  
   