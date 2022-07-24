<?php
session_start();

require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
	$error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
	
}//if

require_once('database.php');
$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$sucess="connected sucess";
$result = dbQuery($dbConn,$sql);

?>

<html>
<head><title>login</title>
<link href="style1.css" rel="stylesheet" type="text/css">

<script language="javascript">
<!--
function memloginvalidate()
{
   if(document.form1.txtusername.value == "")
     {
        alert("Please enter admin UserName.");
        document.form1.txtusername.focus();
        return false;
     }
   if(document.form1.txtpassword.value == "")
     {
        alert("Please enter admin Password.");
        document.form1.txtpassword.focus();
        return false;
     }
   }

//-->
</script>

</head>
<body>
<header><img src="images/main.jpg" width=900 height=200>
</header>
<div class="menu"><ul><li><a href="index.php">Home</a></li></ul></div>

<div class="content">
<center>
<form name="form1" id="form1" method="post" onSubmit="return memloginvalidate()">
<table>
<tr><th colspan=2 style="font-family:verdana; color:blue; font-size:13px;padding:10 0 10 0;">Administrator Login Area</th></tr>
<tr> <td colspan="3" height="10">
								<font color="#FF0000" style="font-size:12px;">
								<?php echo $error; ?>
								</font></td></tr>
<tr><td style="font-family:verdana;  font-size:13px;padding:5 0 5 0;"><strong/>Username:</td><td><input name="txtusername" class="forminput" id="txtusername" maxlength="20" type="text" placeholder="Enter username" style="width:100%;border:none;border-bottom:1px solid gray;font-size:13px;"></td></td></tr>
<tr><td style="font-family:verdana;  font-size:13px;padding:5 0 5 0;"><strong/>Password:</td><td><input name="txtpassword" class="forminput" id="txtpassword" maxlength="20" type="password" placeholder="Enter password" style="width:100%;border:none;border-bottom:1px solid gray;font-size:13px;"></td></tr>
<tr><td style="font-family:verdana;  font-size:13px;padding:5 0 5 0;"><strong/>Office</td><td>
								<select name="OfficeName" >
			<?php 
			while($data = dbFetchAssoc($result)){
			?>
			<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
			<?php 
			}//while
			?>
			</select>
								</td>
			
								
</tr>
<tr> <th colspan=2><input name="Submit" value="Login Now" type="submit" style="padding:5px 10px;font-weight:bold;"></th>
</tr>


</table>
</form>
</center>
<img src="images/india.jpg" style="margin-left:10px;"><img src="images/india.jpg"><img src="images/india.jpg">
<div class="footer"></div>
<div class="footer1"></div>
<div class="footer2"></div>



</div>



</body>
</html>