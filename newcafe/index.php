
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Coffee House</title>

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
  </div>
  <div id="header"> </div>
  <div id="content">
    <div id="content_left"> <img src="images/bgr.jpg" width="734" height="300" style="margin-left:-10px;" /></div>
    <div id="card"></div>
  </div>
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