<?php
session_start();

include('connection.php');
$memid=$_POST['id'];
$qty=$_POST['quantity'];
$name=$_POST['name'];
$transcode=$_POST['transcode'];
$id=$_POST['butadd'];
//$ids=$_POST['ids'];

			$pprice = (int)$_REQUEST['price'];
			$pn = $_REQUEST['name'];
  $total= $pprice * $qty;
 
mysql_query("INSERT INTO orderditems (customer, quantity, price, total, name, transactioncode) VALUES('$memid', '$qty', '$pprice', '$total', '$pn', '$transcode')");

header("location: order.php");












?> 