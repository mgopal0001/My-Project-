<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();
$cid= (int)$_GET['cid'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cid = $cid";
$sql_1 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($dbConn,$sql);		
$result_1 = dbQuery($dbConn,$sql_1);
while($data = dbFetchAssoc($result)) {
extract($data);
?>

<html>
<head>
<title>Final Reciept</title>
<style>
.reciept
{
	width:550;
	height:auto;
	border:2px solid black;
	margin:auto;
}

.style1 {color: #FF0000}
.style3 {font-family: verdana;
font-size:13px;}
tr
{
	height:25px;
	

}

</style>



</head>
<body>

<div class="reciept">
<?php
include 'barcode128.php';
echo '<center><div style=" height: auto; width: auto;">';
echo '<p>'.bar128(stripcslashes($_POST['generate'])).'</p>';
echo '</div></center>';
?>

<table bgcolor="black" cellpadding="1" cellspacing="1" align="center" width="75%"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="left"><div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%"><div align="left" class="style3">Shipper Name  </div></td>

            <td width="45%"><div align="left" class="style3">

              <?php echo $ship_name; ?>
            </div></td>

          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Phone : </div></td>

            <td><div align="left" class="style3">

              <?php echo $phone; ?>
            </div></td>
          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Address : </div></td>

            <td><div align="left" class="style3">
			<?php echo $s_add; ?>
			</div></td>
          </tr>
        </tbody></table>

      </div></td>

      <td class="Partext1" bgcolor="#FFFFFF">
	  <div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%" class="style3"><div align="left">Receiver Name : </div></td>

            <td width="45%" class="style3"><div align="left"><?php echo $rev_name; ?></div></td>

          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Phone : </div></td>

            <td class="style3"><div align="left">
			<?php echo $r_phone; ?>
            </div></td>
          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Address : </div></td>

            <td class="style3"><div align="left">
			<?php echo $r_add; ?>
            </div></td>
          </tr>
        </tbody></table>
      </div></td>

    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td class="Partext1" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="left" width="336">Consignment No  : </td> 

      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><?php echo $cons_no; ?></font>&nbsp; 
 
	 </td>
	
	</tr> 
	
    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="left">Ship Type  :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $type; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="left">Weight :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $weight; ?>&nbsp;kg</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="left">Invoice no  :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $invice_no; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="left">Booking Mode :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $book_mode; ?>&nbsp;</td>
    </tr>

    

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="left">Mode  </td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $mode; ?></td>
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="left">Pickup Date/Time  </td> 
 <td class="style3" bgcolor="#FFFFFF">

        <?php echo $pick_date; ?> -<span class="gentxt">
<?php echo $pick_time; ?>
        </span> </td> 
    </tr> 
	
	<tr>

      <td class="style3" bgcolor="#FFFFFF" align="left"><b>Total Amount :</b> </td>

      <td class="style3" bgcolor="#FFFFFF"><b><?php echo $freight; ?>&nbsp;/-Rs.</td>
    </tr>
	
	
	
	</table>


<?php
}
?>












</div></body>

</html>