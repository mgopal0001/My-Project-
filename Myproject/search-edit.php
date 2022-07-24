<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();


?>

<!DOCTYPE html>
<html><head>

<title>Admin</title>
<style type="text/css">
table
{
	font-family:verdana;
	font-size:13px;
	font-weight:bold;
}
.gentxt
{
	font-family:verdana;
	font-size:13px;
}
</style>
</head>

<body>
<header><img src="images/main.jpg" width=900 height=200>
</header>


<?php include("header.php"); ?>
<div class="content">
<script language="javascript">
function validate()
  {
 if (document.form1.Consignment.value == "" )
		 {
			alert("Consignment No is required.");
			document.form1.Consignment.focus( );
			return false;
		}
	}
</script>

<form action="search-courier.php" method="post" name="form1" id="form1" onsubmit=" return validate()">
 <br><br><center><table>
<tr><b><td>Enter Consignment number:</td><td><input type="text" name="Consignment" > </td><td> <input type="submit" value="Search"></td>
</tr>


</table>
</form>
<center><img src="images/india.jpg"></center>
<div class="footer"></div>
<div class="footer1"></div>
<div class="footer2"></div>
</div>

</body></html>