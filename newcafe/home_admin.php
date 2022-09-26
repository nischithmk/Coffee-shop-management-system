<?php
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Coffee House</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/ble.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--sa poip up-->
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
<link rel="stylesheet" href="./febe/style.css" type="text/css" media="screen" charset="utf-8">
    
    <script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/application.js" type="text/javascript" charset="utf-8"></script>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<div id="container">
  <div id="header_section"> 
      <div style="float:right; width:50px; margin-right:20px; background-color:#cccccc; text-align:center;"><a href="admin_index.php">Logout</a></div>
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
<div style="width:300px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">
  <div style="height:40px; margin-bottom:10px;">
   <div style="float:left; margin-left:10px; margin-top:10px; color:black"><strong>Welcome</strong></div>
  </div>
  <div align="center"><a href="vieworders.php"><img src="images/84.png" border="0" style="padding:10px;" title="view all orders" /></a><br />
   </div>
</div>

</div>

<div>
</div>
</body>

</html>
