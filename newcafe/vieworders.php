<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Coffe House</title>
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

<link rel="stylesheet" href="./febe/style.css" type="text/css" media="screen" charset="utf-8">
    
    <script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/application.js" type="text/javascript" charset="utf-8"></script>
    <style type="text/css">
<!--
.style1 {font-size: 16}
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
    </style>
</head>

<body>
<div style="width:1500px; margin:0 auto; position:relative; border:10px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:50px; border-radius:10px; -webkit-box-shadow:0 0 50px rgba(0,0,0,1); -moz-box-shadow:0 0 50px rgba(0,0,0,1); box-shadow:0 0 18px rgba(0,0,0,1); margin-top:10%;">
<div style="background-color:#ff3300; height:40px; margin-bottom:10px;">
<div style="float:right; width:50px; margin-right:20px; background-color:#cccccc; text-align:center;"><a href="home_admin.php">back</a></div>
<div style="float:left; margin-left:10px; margin-top:10px;"><strong>Welcome</strong> <?php echo $_SESSION['SESS_FIRST_NAME'];?></div>
</div>

  <br /><br />
  
  <table cellpadding="7" cellspacing="2" id="resultTable" border="2">
          <thead>
            <tr bgcolor="#cccccc" style="margin-bottom:50px;">
              		<th>Student Num</th>
					<th>Amount Paid</th>
					<th>Code (click to view order)</th>
					<th>Date</th>
            </tr>
          </thead>
          <tbody>
         <?php
			   include('connection.php');
								
								

								
								$result3 = mysql_query("SELECT * FROM wings_orders");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								 echo '<tr>';
									echo '<td>'.$row3['cusid'].' '.'</td>';
									echo '<td>'.'M'.$row3['total'].'.00'.'</td>';
									echo '<td>'.'<a rel="facebox" href=listorder.php?id=' . $row3["transactioncode"] . '>' . $row3['transactioncode'].'</a></td>';
									echo '<td>'.$row3['transactiondate'].'</td>';
								 echo '</tr>';
							
								  }
			  
			  ?>
          </tbody>
  </table>
  
</div>
</body>
</html>
