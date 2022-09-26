<?php
session_start();

include("connection.php");
$id = $_POST['email'];
$password = $_POST['password'];
$id = mysql_real_escape_string($id);
$password = mysql_real_escape_string($password);

$sql = "select * from users where email = '$id' and password = '$password'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
if($count ==1){
// session_regenerate_id();
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			session_write_close();
header("location:home_admin.php");

}
else{
echo "<h4 style='color:red;'>";
			
			
			echo "Please enter your correct login details!!!";
			echo "</h4>";
die(mysql_error());
			
}
?>

