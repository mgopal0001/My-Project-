<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);		

?>
<!DOCTYPE >
<html><head>

<title>Admin</title>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<style type="text/css">
.headtext13
{
	font-family:verdana;
	font-size:13px;
	font-weight:bold;
	color:blue;
}
.TrackMediumBlue
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
<?php include("header.php"); ?>

	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF">
	
	
<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 
  <tbody><tr> 
    <td id="ds_calclass"> </td> 
  </tr> 
</tbody></table> 
 <br/>
  <table border="0" align="center" width="100%">
    <tbody>
	<tr>
      <td class="Partext1" bgcolor="F9F5F5" align="center"><span class="headtext13">Add New Office Manager </span></td>
    </tr>
    
  </tbody>
  </table>
<form action="process.php?action=add-manager" method="post" name="frmShipment" > 
<div class="gentxt" align="right">
<table border="0" cellpadding="1" cellspacing="1" align="center" width="83%">
<tbody><tr>
<td width="60%">&nbsp;</td>
<td width="40%"><div align="right"></div></td>
</tr>
</tbody></table>
</div>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
  <tbody><tr>
    <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
    <td background="images/boxtopBG.gif" width="734"></td>
    <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
  </tr>
  <tr>
    <td background="images/boxleftBG.gif"></td>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
      <tbody><tr>
        <td colspan="2" height="4"></td>
      </tr>
      <tr>
        <td height="18">&nbsp;</td>
      </tr>
      <tr>
        <td><table class="Partext1" cellpadding="2" cellspacing="2" align="center" width="100%">
          <tbody><tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="gentxt" align="right">
                <div class="headtext13" align="left"><strong>Office Manager  info : </strong></div>
            </div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right" width="138">Manager  Name   :</td>
            <td width="13">&nbsp;</td>
            <td width="477">
			<input name="ManagerName" type="TEXT" id="ManagerName" size="40"  maxlength="100">                </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Password   :</td>
            <td>&nbsp;</td>
            <td><input name="Password" id="Password" maxlength="20" size="40" type="password"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Address   :</td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="Address" cols="27" rows="2" id="Address"></textarea>
              *</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Email :</td>
            <td>&nbsp;</td>
            <td><input name="Email" id="Email" maxlength="40" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone No. : </td>
            <td>&nbsp;</td>
            <td><input name="PhoneNo" id="PhoneNo" maxlength="30" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Office Name : </td>
            <td>&nbsp;</td>
            <td>
			<select name="OfficeName">
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
          
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
          <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="Submit" type="submit" onClick="MM_validateForm('ManagerName','','R','Password','','R','Email','','RisEmail','PhoneNo','','R','Address','','R');return document.MM_returnValue" value="Add New Office Manager"></td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
    <td background="images/boxrightBG.gif"></td>
  </tr>
  <tr>
    <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
    <td background="images/boxbtmBG.gif" width="734"></td>
    <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
  </tr>
</tbody></table>
<br>
</form> 

	</td>
  </tr>
  
</tbody></table>
<center><img src="images/india.jpg">
<div class="footer"></div>
<div class="footer1"></div>
<div class="footer2"></div>


</div>


</body></html>