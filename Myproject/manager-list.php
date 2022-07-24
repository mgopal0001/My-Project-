<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$sql = "SELECT *
		FROM tbl_courier_officers";
$result = dbQuery($dbConn,$sql);		

?>
<!DOCTYPE html>
<html><head>
<title>Admin</title>
<link href="style.css" type="text/css" rel="stylesheet">
<style type="text/css">
.newtext
{
	font-family:verdana;
	font-size:13px;
	font-weight:bold;
	color:blue;
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
<div class="content">
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">

<?php include("header.php"); ?>
	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF">
	<script language="JavaScript">
var checkflag = "false";

function check(field) {
if (checkflag == "false")
 {
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;	
	}
	}
	checkflag = "true";
}
else
{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
}

}
function confirmDel(field,msg)
{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}
	
	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
}
</script>
<table border="0" align="center" width="80%">
    <tbody><tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left"><div class="Partext1" align="center" style="font-family:verdana;font-size:13px;color:blue;"><strong>View All Manager Details </strong></div></td>
    </tr>
  </tbody></table>

 
  <table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">
      <td class="newtext" bgcolor="#EDEDED" width="20%">Officer Name </td>
      <td class="newtext" bgcolor="#EDEDED" width="20%">Address</td>
	  <td class="newtext" bgcolor="#EDEDED" width="20%">Email</td>
      <td class="newtext" bgcolor="#EDEDED" width="15%">Phone Numner</td>
      <td class="newtext" bgcolor="#EDEDED" width="25%">Office Name </td>
    
    </tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" style="height:20px;">
	
      <td class="gentxt"><?php echo $officer_name; ?></td>
      <td class="gentxt"><?php echo $address; ?></td>
      <td class="gentxt"><?php echo $email; ?></td>
      <td class="gentxt"><?php echo $ph_no; ?></td>
      <td class="gentxt"><?php echo $office; ?></td>
	  
    </tr>
    <?php
	}//while
	?>
	  </tbody></table>
  <br>
	
    </td>
  </tr>

</tbody></table>
<center><img src="images/india.jpg">
<div class="footer"></div>
<div class="footer1"></div>
<div class="footer2"></div>


</body></html>