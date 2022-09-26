<?php
			if (isset($_GET['id']))
			{
	
	
			include('connection.php');
		
			$id=$_GET['id'];
			mysql_query("DELETE FROM orderditems WHERE id='$id'");
			header("location: order.php");
			exit();
			}
			?>
			
			
