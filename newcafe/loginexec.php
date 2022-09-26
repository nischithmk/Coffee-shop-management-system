<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	include('connection.php');
	
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	function createRandomPassword() {



    $chars = "abcdefghijkmnopqrstuvwxyz023456789";

    srand((double)microtime()*1000000);

    $i = 0;

    $pass = '' ;



    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }



    return $pass;



}
$confirmation = createRandomPassword();
	
	
	$login = clean($_POST['user']);
	$password = clean($_POST['password']);
	
	//Create query
	$qry="SELECT * FROM members WHERE email='$login' AND password='$password'";
	$result=mysql_query($qry);

	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $confirmation;
			
			session_write_close();
			header("location: order.php");
			exit();

		}else {
			//Login failed
			$errmsg_arr[] = 'Invalid Email add or password';
			$errflag = true;
			if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: loginindex.php");
		exit();
	}
		}
	}else {
		die("Query failed");
	}
?>