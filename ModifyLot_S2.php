<html>
<head>
<title>Modify Lot</title>

<link href="css_files/style.css"
	rel="stylesheet" type="text/css">
</head>

<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%"
	height="100%">
	<tr>
<td width="144" rowspan="3" valign="top" class="bottomHeader" align="center">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>
	<table width="128"  border="0" cellspacing="0" cellpadding="0" class="borderTable" align="center">
		<tr>
			<td height="117" background="images/bgTopNavigation.jpg" >
				<table width="97%" height="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="12" height="61" valign="top" class="leftsidebar">&nbsp; </td>
						<td width="97%" height="61" class="leftsidebar" align="left">
							<font size="0"></font>
							<script>initializeDocument()</script>
						</td>
					</tr>
				</table>
				<table width="100%"  border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><img src="images/trans_spacer.gif" width="7" height="17"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</td>
		<!-- body code starts here -->
		





<script type="text/javascript">
    function submitForm()
        {
        document.lotFB.performActionId.value = 'U';
           document.lotFB.submit();
        }
    
       
</script>
<form name="lotFB" method="post" action="viewLot.php">
	<input type="hidden" name="performActionId" value="Z">
		
		<input type="hidden" name="lotId" value="5">
	<td width="100%" colspan="2" valign="top" align="center"
		id="checktable">
	<table width="100%" border="0" cellspacing="2" cellpadding="0">
		<tr class="theader">
			<td align="left"></td>
			<td align="left"></td>
		</tr>
<?php
include("local_con.php");
$i_lotId=$_REQUEST['lotId'];
$i_lotName=$_REQUEST['lotName'];
$i_description=$_REQUEST['description'];
$i_status=$_REQUEST['status'];
switch($i_status)
{
	case (1):$i_s_descript = "Submitted"; break;
	case (2):$i_s_descript = "Draft Submitted";break;
	case (3):$i_s_descript = "Completed";break;
	case (4):$i_s_descript = "Samples Received";break;
	case (5):$i_s_descript = "Sample + Draft Received";break;
}
/*$i_lotName='LOT-0001';
$i_description='Jagmeet Entered This';
$i_status=1;*/
if($i_description!='' and $i_status!='')
{
	$insert_stmt="INSERT INTO LOT_DESCRIPTION VALUES ('$lotId',now(),'$i_description')";
	$update_stmt="UPDATE LOT SET LOT_STATUS=$i_status,DESCRIPTION='$i_description' WHERE LOT_ID='$i_lotId'";
	$result1=mysql_query($insert_stmt,$dbh);
	$result2=mysql_query($update_stmt,$dbh);
	if($result1 AND $result2)
	{
		print "<tr class=\"tinner\">";
		print "<td align=\"left\">Record Successfully Updated.</td>";
		print "</tr>";
	}
	else
	{
		print "<tr class=\"tinner\">";
		print "<td align=\"left\">ERROR : No Record Updated.</td>";
		print "</tr>";
	}
}
elseif($i_status!='')
{
	$update_stmt="UPDATE LOT SET LOT_STATUS='$i_status' WHERE LOT_ID='$i_lotId')";
	$result=mysql_query($update_stmt,$dbh);
	if($result)
	{
		print "<tr class=\"tinner\">";
		print "<td align=\"left\">Record Successfully Updated.</td>";
		print "</tr>";
	}
	else
	{
		print "<tr class=\"tinner\">";
		print "<td align=\"left\">ERROR : No Record Updated.</td>";
		print "</tr>";
	}
}

?>
		<tr class="tinner">
			<td align="left">Lot Id:</td>
<?php
	print "<td align=\"left\"><input type=\"text\" name=\"lotId\" value=\"".$i_lotId."\"></td>";
?>
		</tr>

		<tr class="tinner">
			<td align="left">Lot Name:</td>
<?php
	print "<td align=\"left\"><input type=\"text\" name=\"lotName\" value=\"".$i_lotName."\"></td>";
?>
		</tr>
		
<tr class="tinner">
			<td align="left">Lot Status:</td>
<?php
	print "<td align=\"left\"><input type=\"text\" name=\"lotStatus\" value=\"".$i_s_descript."\"></td>";
?>
		</tr>		
		
		<tr class="tinner">
			<td align="left">Previous Communication:</td>
<?php
	$get_descript="Select DECRIPT_DATE,DESCRIPTION FROM LOT_DESCRIPTION WHERE LOT_Id='$i_lotId' ORDER BY DECRIPT_DATE DESC";
	$result_get_descript=mysql_query($get_descript,$dbh);
	$nr=mysql_num_rows($result_get_descript);
	if($nr>0)
	{
		while($ar=mysql_fetch_row($result_get_descript))
		{
			$o_lotData=$o_lotData.$ar[0].":".$ar[1]."\n";
		}
	}
	print "<td align=\"left\"><textarea rows=4 cols=100 name=lotCommunication>".$o_lotData."</textarea></td>";

	mysql_close($dbh) ;
?>
		</tr>
	</table>


	<table width="100%" border="0" cellspacing="2" cellpadding="0">
		<input type="button" name="submit1" value="Back To Main Page" onclick=" javascript:submitForm()" class="extraLargeButton1">
	</table>
	</td>
</form>
	<tr>
		<td colspan="2" valign="bottom"><!-- footer code starts here --> 



<script language="javascript">
	function top()
	{
	  document.location.href="#top";
	}
	</script>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="6" align="left" width="18"><img src="images/trans_spacer.gif" width="18" height="5"></td>
		<td align="right">
			<table width="100%" height="18"  border="0" cellpadding="0" cellspacing="0">
				<tr valign="top">
					<td width="92%" height="18">&nbsp;</td>
					<td width="4%" align="right"><span class="footer">Up</span></td>
					<td width="4%" align="center"><a href="javascript:top();"><img src="images/arrow_up.gif" width="12" height="11" border="0"></a>
					</td>
				</tr>
		</table>
		</td>
		<td rowspan="6" align="right" width="18"><img src="images/trans_spacer.gif" width="18" height="5">
		</td>
	</tr>
	<tr>
		<td><img src="images/genet_blank.gif" width="1" height="5" border="0" vspace="0" hspace="0"></td>
	</tr>
	<tr>
		<td><img src="images/genet_grey.gif" width="100%" height="1" border="0" vspace="0" hspace="0"></td>
	</tr>
	<tr>
		<td><img src="images/genet_blank.gif" width="1" height="7" border="0" vspace="0" hspace="0"></td>
	</tr>
	<tr>
		<td height="14" align="left" valign="top" class="footer">&copy; CDRI 2008</td>
	</tr>
	<tr>
		<td><img src="images/genet_blank.gif" width="1" height="15" border="0" vspace="0" hspace="0"></td>
	</tr>
</table>
</td>
	</tr></table>
</body>
</html>