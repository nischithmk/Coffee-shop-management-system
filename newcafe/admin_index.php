<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta name="keywords" />

<meta name="description" />

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
  </scr

  <!--sa validate from-->
<script type="text/javascript">
function validateForm()
{

var y=document.forms["login"]["email"].value;
var a=document.forms["login"]["password"].value;
if ((y==null || y==""))
  {
  alert("you must enter your username");
  return false;
  }
  if ((a==null || a==""))
  {
  alert("you must enter your password");
  return false;
  }
 

}
</script>

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
  </div>>
  <div id="content">
<div style="width:400px; margin:0 auto; position:relative; border:5px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px;">
  <form id="form1" name="login" method="post" action="admin.php" onsubmit="return validateForm()">
  <div style=" font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
<div style="float:left;"><strong>Administrator Login!</strong></div>
 
 
 </div>
  <table width="350" align="center" style ="color:black;">
  <tr>
    <td colspan="5">
	<div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:20px;"></div>
	</td>
  </tr>
  <tr>
    <td width="92"><div align="right">UserName</div></td>
    <td width="178"><input type="text" name="email" /></td>
  </tr>
  <tr>
    <td><div align="right">Password:</div></td>
    <td>
      <input type="password" name="password" />
    </td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="login" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
   </div> 
 

</body>
</html>