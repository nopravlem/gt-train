<?php
include 'dbinfo.php';
?>

<html>
<title>GT Train</title>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<body >
<center> 
<h1>GEORGIA TECH TRAIN</h1>

<img src="buzz.png" width="128" height="128">

<form action=\"\" method=\"POST\" id = "mainBlock"> 
<b><p class = "title">VIEW POPULAR ROUTE REPORT</p></b>
<table border="1" bordercolor="black">
	<tr>
		<td>Month</td>
		<td>Train Number</td>
		<td>Number of Reservations</td>
	</tr>
</table>

<p>
	<a href="./chooseFuncMang.php"><button type="button">Back</button></a>
</p>
</form> 

<br>

<?php

mysql_connect($host,$username,$password) or die("Unable to connect");
mysql_select_db($database) or die("Unable to select database");

?>

</center>
</body>
</html>