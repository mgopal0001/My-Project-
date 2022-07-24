<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$sql = "SELECT *
		FROM tbl_offices";
$result = dbQuery($dbConn,$sql);		

?>
<html><head>

<title>Admin</title>

<link href="style.css" rel="stylesheet" type="text/css">
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
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left"><div class="Partext1" align="center"><strong>View All Office Details </strong></div></td>
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
      <td class="newtext" bgcolor="#EDEDED" width="20%">Office Name </td>
      <td class="newtext" bgcolor="#EDEDED" width="20%">Address</td>
	  <td class="newtext" bgcolor="#EDEDED" width="10%">City</td>
      <td class="newtext" bgcolor="#EDEDED" width="15%">Phone Numner</td>
      <td class="newtext" bgcolor="#EDEDED" width="20%">Office Timing</td>
      <td class="newtext" bgcolor="#EDEDED" width="15%">Contact Person</td>
    </tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" style="height:20px;">
	
      <td class="gentxt"><?php echo $off_name; ?></td>
      <td class="gentxt"><?php echo $address; ?></td>
      <td class="gentxt"><?php echo $city; ?></td>
      <td class="gentxt"><?php echo $ph_no; ?></td>
      <td class="gentxt"><?php echo $office_time; ?></td>
	  <td class="gentxt"><?php echo $contact_person; ?></td>
    </tr>
    <?php
	}//while
	?>
	  </tbody></table>
  <br>
	
    </td>
  </tr>
  
</tbody></table>
<center><img src="images/india.jpg"></center>
<div class="footer"></div>
<div class="footer1"></div>
<div class="footer2"></div>
</div>
</body></html>