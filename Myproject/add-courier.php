<?php 
session_start();

$msg =  $_SESSION['city'];
require_once('library.php');
isUser();
$rand = get_rand_id(8);
require_once('database.php');
$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($dbConn,$sql);
?>
<html>
<head>
<title>Add courier</title>
<link href="style1.css" type="text/css" rel="stylesheet">
<style type="text/css">

.TrackMediumBlue
{
	font-family:verdana;
	font-size:13px;
	float:left;
	

}
.TrackNormalBlue
{
	font-family:verdana;
	font-size:13px;
}
.headtext13
{
	color:blue;
}
	
</style>
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






</head>
<body>
<header>
<img src="images/main.jpg" width=900 height=200>

</header>
<?php include("header.php"); ?>




</div>
<?php
if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
?><div class="content">

<?php 
}
?>
	

<div class="content">
<table border="0" align="center" width="100%">
    <tbody>
	<tr>
      <td class="Partext1" bgcolor="F9F5F5" align="center"><span class="headtext13" style="font-family:verdana;font-weight:bold; font-size:13px;">Add Shipment </span></td>
    </tr>
    
  </tbody>
  </table>
  
<!---- Making form ----->
<form action="process.php?action=add-cons" method="post" name="frmShipment" >
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
                <div class="headtext13" align="left"><strong>Shipper info : </strong></div>
            </div></td>
			<td class="TrackNormalBlue" align="right" valign="top"></td>
			<td><input name="Coffice" id="Coffice" maxlength="50" size="30" type="TEXT" value="<?php echo $msg; ?>" readonly="readonly"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="left" width="138">Shipper Name   :</td>
            <td>&nbsp;</td>
            <td>
			<input name="Shippername"  maxlength="100" size="40" type="TEXT">
                </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone   :</td>
            <td>&nbsp;</td>
            <td><input name="Shipperphone" id="Shipperphone" maxlength="13" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Address   :</td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="Shipperaddress" cols="27" rows="2" id="Shipperaddress"></textarea>
              *</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong>Receiver  info : </strong></div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Receiver Name : </td>
            <td>&nbsp;</td>
            <td><input name="Receivername" id="Receivername" maxlength="100" size="40" type="TEXT">
                <span class="REDLink">*</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone : </td>
            <td>&nbsp;</td>
            <td><input name="Receiverphone" id="Receiverphone" maxlength="13" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right"> Address: : </td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="Receiveraddress" cols="27" rows="2" id="Receiveraddress"></textarea>
              *</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong>Shipment   info : </strong></div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Consignment No  : </td>
            <td width="13">&nbsp;</td>
            <td width="477"><input name="ConsignmentNo"  value="<?php echo strtoupper($rand); ?>" id="ConsignmentNo"  readonly="true" maxlength="13" size="40"  type="TEXT">
                <span class="REDLink">*</span> </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Type of Shipment  :</td>
            <td>&nbsp;</td>
            <td><select id="Shiptype" name="Shiptype">
                <option value="Documents" selected="selected">Documents</option>
                <option value="Parcel">Parcel</option>
                <option value="Sentiments">Sentiments</option>
            </select>
			</td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Weight : </td>
            <td>&nbsp;</td>
            <td><input id="Weight" size="10" maxlength="10" name="Weight">
              (kg)</td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Invoice no  :</td>
            <td>&nbsp;</td>
            <td><input name="Invoiceno" id="Invoiceno" size="40" maxlength="20" onKeyUp="check_phone('Invoiceno')" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Qnty  :</td>
            <td>&nbsp;</td>
            <td><input name="Qnty" id="Qnty" maxlength="10" size="20" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Booking Mode :</td>
            <td>&nbsp;</td>
            <td><select name="Bookingmode" id="Bookingmode">
                <option selected="selected" value="Paid">Paid</option>
                <option value="ToPay">ToPay</option>
                <option value="TBB">TBB</option>
            </select></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Total freight : </td>
            <td>&nbsp;</td>
            <td><input id="Totalfreight" size="10" maxlength="13" name="Totalfreight"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Mode : </td>
            <td>&nbsp;</td>
            <td><select name="Mode" id="Mode">
                <option selected="selected" value="Air">Air</option>
                <option value="Road">Road</option>
                <option value="Train">Train</option>
				<option value="Sea">Sea</option>
            </select></td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right"><span class="TrackMediumBlue">Dept time : </span></td>
            <td>&nbsp;</td>
            <td><input name="Depttime" id="Depttime" maxlength="50" size="20" type="Time"></td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="left">Destination Office:</td>
            <td>&nbsp;</td>
            <td><select name="OfficeName" id="Destination">
			<?php 
			while($data = dbFetchAssoc($result)){
			?>
			<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
			<?php 
			}//while
			?>
			</select>
                <span class="REDLink">*</span> </td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="left">Pickup Date  :</td>
            <td>&nbsp;</td>
            <td><input name="Packupdate" id="Packupdate" type="date">
                <span class="REDLink">*</span> </td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="left" valign="top">Pickup Time  :</td>
            <td>&nbsp;</td>
            <td><input name="Pickuptime" id="Pickuptime" maxlength="50" size="20" type="time"></td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="left" valign="top">Status :</td>
            <td>&nbsp;</td>
            <td><select name="status" id="status">
                <option selected="selected" value="Placed">Placed</option>
            </select></td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="left" valign="top">Comments :</td>
			
            <td>&nbsp;</td>
            <td><textarea name="Comments" cols="40" rows="4" id="Comments"></textarea></td>
			<td class="TrackNormalBlue" align="right" valign="top"></td>
			<td><input name="Soffice" id="Soffice" maxlength="50" size="30" type="TEXT" value="<?php echo $msg; ?>"readonly="readonly"></td>
			
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="Submit" type="submit" onClick="MM_validateForm('Shippername','','R','Shipperphone','','R','Receivername','','R','Receiverphone','','R','ConsignmentNo','','R','Weight','','R','Invoiceno','','R','Qnty','','RisNum','Totalfreight','','R','Pickuptime','','R','Shipperaddress','','R','Comments','','R','Weight','','RisNum','Totalfreight','','R');return document.MM_returnValue" value="Add Courier"></td>
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
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody>
</tbody></table>
</td>
  </tr>
</tbody></table>





<center/>

<img src="images/india.jpg" width=200>


<div class="footer"></div>
<div class="footer1"></div>
<div class="footer2"></div>






</div>
</body>
</html>
