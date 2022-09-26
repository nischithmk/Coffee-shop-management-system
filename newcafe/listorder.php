<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<table width="500" border="5" cellpadding="5" cellspacing="2">
  <tr >
    <td width="200"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;Products</div></td>
	<td width="90"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;Price</div></td>
    <td width="50"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;Quantity</div></td>
  </tr>
  
<?php
	if (isset($_GET['id']))
	{		   
								include('connection.php');
							
								$id=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM orderditems where transactioncode ='$id'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {  
  
  
  echo '<tr>';
    echo '<td><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;'.$row3['name'].'    '.'</div></td>';
	echo '<td>'.'M'.$row3['price'].'.00'.'</td>';
    echo '<td>'.$row3['quantity'].'</td>';
  echo '</tr>';


  }
  }
  ?>
</table><br>

<?php
	if (isset($_GET['id']))
	{		   
								include('connection.php');
							
								$id=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM orderditems where transactioncode ='$id'");
								$row3 = mysql_fetch_array($result3);
								$var=$row3['customer'];
								$result4 = mysql_query("SELECT * FROM members where id ='$var'");
								$row4 = mysql_fetch_array($result4);
						
  }
  ?>




<br />

