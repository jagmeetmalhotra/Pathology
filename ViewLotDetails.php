<html>
<head>
<title>View Lot Details</title>

<link href="css_files/style.css"
	rel="stylesheet" type="text/css">
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%"
	height="100%">
	<tr>
		<!-- LHS Nav code starts here -->
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


function back()
{
	document.lotFB.performActionId.value = 'Z';
	document.lotFB.submit();
}


</script>
<form name="lotFB" method="post" action="viewLot.php">
		<input type="hidden" name="performActionId" value="Z">
		
	 <td width = "100%" colspan = "2" valign = "top" align = "center" id="checktable">
	<table width="100%" border="0" cellspacing="2" cellpadding="0">
	
		<tr class="tinner">
			<?php
			include("local_con.php");
			$i_lotId=$_REQUEST['lotId'];
			$i_lotName=$_REQUEST['lotName'];
			$get_lot="select LOT.LOT_ID,LOT.LOT_NAME,USERS.USER_NAME,LOT.CREATEDDATE,
						LOT_STATUS.STATUS,LOT.DESCRIPTION
						FROM LOT, USERS, LOT_STATUS
						WHERE LOT.USER_ID=USERS.USER_ID
						AND LOT.LOT_STATUS = LOT_STATUS.ID AND lot.LOT_ID AND LOT.LOT_ID = '$i_lotId'";
			$result_get_lot=mysql_query($get_lot,$dbh);
			$nr=mysql_num_rows($result_get_lot);
			if($nr>0)
			{
				while($ar=mysql_fetch_row($result_get_lot))
				{
					print "<td align=\"left\" width=10%>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lot Name</td>";
					print "<td align=\"left\" width=10%>".$ar[1]."</td>";
					print "<td align=\"left\" width=10%>Lot Id</td>";
					print "<td align=\"left\" width=10%>".$ar[0]."</td>";
					print "<td align=\"left\" width=10%>User Name</td>";
					print "<td align=\"left\" width=10%>".$ar[2]."</td>";
					print "<td align=\"left\" width=10%>Create Date</td>";
					print "<td align=\"left\" width=10%>".$ar[3]."</td>";
					print "<td align=\"left\" width=10%>Lot Status</td>";
					print "<td align=\"left\" width=10%>".$ar[4]."</td>";
				}
			}
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
			print "<td align=\"left\"><textarea rows=4 cols=50 name=lotCommunication>".$o_lotData."</textarea></td>";
			
			?>
			</tr>
	<OL>
		<tr class="theader">
			<td align="left" width=10%>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sample Name</td>
			<td align="left" width=10%>Quantity</td>
			<td align="left" width=10%>Solubility</td>
			<td align="left" width=10%>Any Other Information</td>
				<td align="left" width=10%>Facility</td>
			<td align="left" width=10%>Instrument</td>
				<td align="left" width=10%>Price</td>
				<td align="left" width=10%>Total Price</td>
				<td align="left" width=10%>Tax</td>
				<td align="left" width=10%>Total Price With Tax</td>
		</tr>
	<?php	
	/*
	<tr class="tinner">
	<td align="left"><LI>dfdsf</td>
	<td align="left">12 </td>
	<td align="left">dfdg </td>
	<td align="left">dfsgfsdg </td>

	<td align="left" colspan=3>
	<table width="100%" border="0" cellspacing="2" cellpadding="0">

	<tr class="tinner">


	<td align="left" width=33%> MASS </td>
	<td align="left" width=33%> FAB</td>
	<td align="left" width=33%>  1500.0 </td>
	</tr>

	</table>

	</td>


	<td align="left">1500.0 </td>
	<td align="left">188.55 </td>
	<td align="left">1688.55 </td>
	</tr>

	<tr class="theader">
	<td align="left" width=10%></td>
	<td align="left" width=10%></td>
	<td align="left" width=10%></td>
	<td align="left" width=10%></td>
	<td align="left" width=10%></td>
	<td align="left" width=10%></td>
	<td align="left" width=10%></td>
	<td align="left">1500.0 </td>
	<td align="left">188.55 </td>
	<td align="left">1688.55 </td>

	</tr>
	*/
	?>
	</OL>
	</table>
		<table width="100%" border="0" cellspacing="2" cellpadding="0">
	<OL>
		<tr class="theader">
			<td align="left" width=10%>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Draft Detail:</td>
		</tr>	
<?php
$i_lotId=1;
$query_stmt="SELECT DRAFT_ID, DRAFT_NUMBER, BANK_NAME, DRAFT_VALUE, DISPATCH_DATE FROM DRAFT_DETAIL WHERE LOT_ID='$i_lotId'";
$result_query_stmt=mysql_query($query_stmt,$dbh);
$nr=mysql_num_rows($result_query_stmt);
if($nr>0)
{
	while($ar=mysql_fetch_row($result_query_stmt))
	{
		print "<tr class=\"tinner\">";
		print "<td align=\"left\">PREVIOUS DRAFT DEATILS</td>";
		print "</tr>";
		print "<tr class=\"tinner\">";
		print "<td align=\"left\">Draft System ID:</td><td>".$ar[0]."</td>";
		print "</tr>";
		print "<tr class=\"tinner\">";
		print "<td align=\"left\">Draft Number:</td><td>".$ar[1]."</td>";
		print "</tr>";
		print "<tr class=\"tinner\">";
		print "<td align=\"left\">Bank Name:</td><td>".$ar[2]."</td>";
		print "</tr>";
		print "<tr class=\"tinner\">";
		print "<td align=\"left\">Draft Value:</td><td>".$ar[3]."</td>";
		print "</tr>";
		print "<tr class=\"tinner\">";
		print "<td align=\"left\">Dispatch Value:</td><td>".$ar[4]."</td>";
		print "</tr>";
	}
}
mysql_close($dbh) ;
?>		
		
</OL>			
	</table>	
	<table width="100%" border="0" cellspacing="2" cellpadding="0">

<input type="button" name="submit1" value="Back" onclick=" javascript:back()" class="extraLargeButton1">
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