<?php 
require_once('library.php');


?>
<link href="style.css" type="text/css" rel="stylesheet">
<div class="menu">
<ul>
<li><a href="add-courier.php">Add Shipment</a></li>
<li><a href="courier-list.php">Update Shipment</a></li>
<li><a href="search-edit.php">Search & Edit</a></li>
<li><a href="delivered-list.php">Delivered List</a></li>
<li><a href="datewise-list.php">Datewise List</a></li>
</ul>
<style>
.headtext13
{
	font-family:verdana;
	color:blue;
	font-size:13px;
	font-weight:bold;
	
}


</style>






</div>
<?php
if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
?><div class="content">
<table border="0" cellpadding="0" cellspacing="0" width="900">
  <tbody><tr style="height:25px;">
    <td bgcolor="#E2E2E2" width="4">&nbsp;</td>
    <td bgcolor="#E2E2E2" width="240" style="font-family:verdana;font-size:13px;">&nbsp;<img src="images/arrow_right.gif"><b>Admin Menu</b></td>
    <td bgcolor="#E2E2E2" width="130"><div align="center"><a href="offices-list.php" class="headtext13">Office Details</a></div></td>
    <td bgcolor="#E2E2E2" width="10">|</td>
	
    <td bgcolor="#E2E2E2" width="100"><div align="center"><a href="add-office.php" class="headtext13">Add New Office</a></div></td>
    <td bgcolor="#E2E2E2" width="10">|</td>
	<td bgcolor="#E2E2E2" width="162"><div align="center"><a href="manager-list.php" class="headtext13">Manager Details</a> </div></td>
    <td bgcolor="#E2E2E2" width="7">|</td>
    <td bgcolor="#E2E2E2" width="125"><div align="center"><a href="add-new-officer.php" class="headtext13">Add New Manager</a></div></td>
  </tr>
</tbody>
</table>
<?php 
}
?>
<?php
	
	
	
	?>

<center>
<table border="0" cellpadding="0" cellspacing="0" width="900" >
  <tbody><tr style="height:25px;">
    <td bgcolor="#99CCFF" width="4">&nbsp;</td>
	<td bgcolor="#99CCFF" width="350"><?php


?></td>
    <td bgcolor="#99CCFF" width="130"><div align="center"><a href="admin.php" class="headtext13"></a></div></td>
    <td bgcolor="#99CCFF" width="10"></td>
    <td bgcolor="#99CCFF" width="162"><div align="center"><a href="index.php" class="headtext13">Home</a> </div></td>
    <td bgcolor="#99CCFF" width="7">|</td>
    <td bgcolor="#99CCFF" width="125"><div align="center"><a href="login.php" class="headtext13">Logout</a></div></td>
	
  </tr>
</tbody>
</table>

</div>