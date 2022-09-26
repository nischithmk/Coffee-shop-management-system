<?php
	//Start session
	session_start();
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Coffee House</title>
<!--sa poip up-->
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

  <!--sa validate from-->
<script type="text/javascript">
function validateForm()
{

var j=document.forms["abc"]["studentnum"].value;
var a=document.forms["abc"]["name"].value;
var b=document.forms["abc"]["surname"].value;
var d=document.forms["abc"]["email"].value;
var e=document.forms["abc"]["password"].value;
var f=document.forms["abc"]["ambot"].value;
var g=document.forms["abc"]["contacts"].value;

if ((j==null || j==""))
  {
  alert("you must enter your student #");
  return false;
  }
if ((a==null || a==""))
  {
  alert("you must enter your username");
  return false;
  }
if ((b==null || b==""))
  {
  alert("you must enter your password");
  return false;
  }
if ((d==null || d==""))
  {
  alert("you must enter your email address");
  return false;
  }
if ((e==null || e==""))
  {
  alert("you must enter your password");
  return false;
}
if ((f==null || f==""))
  {
  alert("Retype password");
  return false;
  }
if ((g==null || g==""))
  {
  alert("you must enter your contact number");
  return false;
}

if( e != f ) {
alert("Password does not match");
  return false;
}
var atpos=d.indexOf("@");
var dotpos=d.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=d.length)
  {
  alert("Not a valid e-mail address");
  return false;
  } 

}
</script>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#contact").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});
	

  });
  </script>

</script>

<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {color: #FF0000}
-->
</style>
</head>

<body>
<div id="container">
  <div id="header_section"> 
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <div id="menu_bg">
    <div id="menu">
      <ul>
        <li><a href="index.php"  class="current">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
		<li><a href="contact.php">Contact</a></li>
        <li><a href="loginindex.php">Order Now! </a></li>
		<li><a href="admin_index.php">Admin </a></li>
      </ul>
    </div>
  </div>
  <div id="content">
<div style="width:400px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
  <form id="form1" name="abc" method="post" action="addmem.php" onsubmit="return validateForm()">
 <div style=" font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px; width:390px;"> 
 
 
 <div style="float:left;"><strong>Members Registration of Wings Cafe </strong></div>

 
 
 </div>
  <table width="368" align="center">
  <tr>
    <td colspan="2"><div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;"><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?></div></td>
  </tr>
  	  <tr>
  <td width="120" valign="top"><div align="right">Student Num:</div></td>
        <td width="236"><input type="text" name="studentnum">
              <span class="style2"></span></td>
      </tr>
	  <tr>
  <td width="120" valign="top"><div align="right">Firstname:</div></td>
        <td width="236"><input type="text" name="name">
              <span class="style2"></span></td>
      </tr>
              <tr>
                <td valign="top"><div align="right">Lastname:</div></td>
                <td><input type="text" name="surname">
                  <span class="style2"></span></td>
              </tr>
			 
              <tr>
                <td valign="top"><div align="right">Email:</div></td>
                <td><input type="text" name="email">
                  <span class="style2"></span></td>
              </tr>
			  <tr>
                <td valign="top"><div align="right">Password:</div></td>
                <td><input type="password" name="password">
                  <span class="style2"></span></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">Retype Password:</div></td>
                <td><input type="password" name="ambot">
                  <span class="style2"></span></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">Contact Number:</div></td>
                <td><input name="contacts" type="text" id="contacts" size="18">
                      <span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg"></span><span class="style2"></span></td>
        </tr>
              
 <tr>
                <td valign="top">&nbsp;</td>
        <td><input type="submit" value="Save"> <label>
                  <input type="reset" name="Reset" value="Clear" />
                </label></td>
      </tr>
</table>
    
  </form>
  <div id="container_end"> </div>
</div>
<div id="footer">
    	<div class="top"></div>
        <div class="middle">
   Copyright © Coffee House 2019</div>
        <div class="button"></div>
</div>
<div>
</div>
</body>

</html>
</div>
</body>
</html>		