<?php
session_start();
require_once('library.php');
isUser();
$msg = "<p id='welcome'>Welcome to ".  $_SESSION['city'];

?>
<html>
<head>
<style>
#welcome
{
	font-family:verdana;
	font-size:20px;
	color:blue;
}

</style>
<title>Courier Management System</title>
<link href="style1.css" type="text/css" rel="stylesheet">
</head>
<body>
<!---header bar----->
<header><img src="images/main.jpg" width=900 height=200>
</header>
<!----menu bar----->
<?php
include("header.php");
?>

<!---content---->
<div class="content">

<br><center><?php echo $msg;?></center><br><br>

<table bgcolor="#ECECEC" border="0" cellpadding="2" cellspacing="2" align="center" width="50%">
<tr><td style="font-family:verdana;">Courier Management System</td></tr>
<tr><td style=" background-color:white;"><a href="add-courier.php">Add Shipment</a> </td></tr>
<tr><td style=" background-color:white;"><a href="courier-list.php">List Shipment</a></td></tr>
<tr><td style=" background-color:white;"><a href="report.php">Report</a></td></tr>
<tr><td style=" background-color:white;"><a href="">logout</a></td></tr>
<tr><td style=" background-color:white;"><a href=""></a></td></tr>
</table>
<center>

<img src="images/india.jpg"></center>
<div class="footer"></div>
<div class="footer1"></div>
<div class="footer2"></div>

</div>
</body>
</html>

