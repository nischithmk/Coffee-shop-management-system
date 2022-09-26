
<?php
		// steps to closing a session
		// logging out

		//  Find the session
		session_start();
		
		//  Unset all the session variables
		$_SESSION = array();
		
		//  Destroy the session
		session_destroy();?>
		<script type="text/javascript">
				window.location = "index.php?logout=1";
			</script>
	<?php	
?>