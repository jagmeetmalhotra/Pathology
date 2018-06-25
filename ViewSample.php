<html>
<head>
<title>View Sample</title>

<link href="css_files/style.css"
	rel="stylesheet" type="text/css">
</head>
<noscript>
</noscript>
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

		function viewLot(id)
        {
		document.lotFB.performActionId.value = 'V';
        document.lotFB.lotId.value = id;
        document.lotFB.submit();
        }
        function searchLot()
        {
		document.lotFB.performActionId.value = 'S';
		document.lotFB.submit();
        }
      	function insertDraft(id)
        {
		document.lotFB.performActionId.value = 'D';
		document.lotFB.lotId.value = id;
		document.lotFB.submit();
        }
        function modifyDraft(id)
        {
		document.lotFB.performActionId.value = 'K';
		document.lotFB.lotId.value = id;
		document.lotFB.submit();
        }
         function modifyLot(id)
        {
		document.lotFB.performActionId.value = 'M';
		document.lotFB.lotId.value = id;
		document.lotFB.submit();
        }
</script>
<form name="lotFB" method="post" action="ViewSample.php">
		<input type="hidden" name="performActionId" value="Z">

		<input type="hidden" name="lotId" value="-1">
	 <td width = "100%" colspan = "2" valign = "top" align = "center" id="checktable">

<table width="100%" border="0" cellspacing="2" cellpadding="0">

	<tr class="theader">

			<td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lot Name</td>
			<td align="left"><input type="text" name="lotName" value=""></td>
			<td align="left">Lot Status</td>
			<td align="left">

<select name="status" class="dropMenu"><option value="1">Submitted</option>
<option value="2">Draft Submitted</option>
<option value="3">Completed</option>
<option value="4">Samples Receved</option>
<option value="5">Sample + Draft Receved</option>
<option value="-1" selected="selected">ALL</option></select>
			</td>
			<td align="left">User Name</td>
			<td align="left"><input type="text" name="userName" value=""></td>
				<td>
		<input type="button" name="submit1" value="Submit" onclick=" javascript:searchLot()" class="extraLargeButton1">
			</td>
		</tr>

		<tr class="theader">

			<td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lot Name</td>

			<td align="left">User Name</td>

			<td align="left">Created Date</td>
			<td align="left">Lot Status</td>
			<td align="left">Description</td>
			<td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View</td>
			<td align="left">Insert Draft</td>

			<td align="left">Modify</td>

		</tr>
<?php
include("local_con.php");
$i_lotName=$_REQUEST['lotName'];
$i_status=$_REQUEST['status'];
$i_userName=$_REQUEST['userName'];
$get_lot="select LOT.LOT_NAME,USERS.USER_NAME,LOT.CREATEDDATE,
LOT_STATUS.STATUS,LOT.DESCRIPTION
FROM LOT, USERS, LOT_STATUS
WHERE LOT.USER_ID=USERS.USER_ID
AND LOT.LOT_STATUS = LOT_STATUS.ID AND lot.LOT_ID ";
if($i_lotName!='') 
{
$get_lot=$get_lot." AND LOT.LOT_NAME LIKE '$i_lotName'";
}
if($i_status!='' AND $i_status!=-1) 
{
$get_lot=$get_lot." AND LOT.LOT_STATUS=$i_status";
}
if($i_userName!='') 
{
$get_lot=$get_lot." AND USERS.USER_NAME LIKE '$i_userName'";
}

$result_get_lot=mysql_query($get_lot,$dbh);
$nr=mysql_num_rows($result_get_lot);
if($nr>0)
{
 while($ar=mysql_fetch_row($result_get_lot))
  {
   print "<tr class=\"tinner\">";
   print "<td align=left><LI>".$ar[0]."</td>";
   print "<td align=left>".$ar[1]."</td>";
   print "<td align=left>".$ar[2]."</td>";
   print "<td align=left>".$ar[3]."</td>";
   print "<td align=left>".$ar[4]."</td>";
   echo "<td align=\"left\">";
   echo "<a href = \"javaScript:viewLot('5')\">";
   echo "<img src = \"images/view.gif\" title = View width = 17 height = 17 border = 0>";
   echo "</a> </td>";
   echo "<td align=\"left\">";
   echo "<a href = \"javaScript:modifyDraft('5')\">";
   echo "<img src = \"images/delete.gif\" title = \"Insert draft detail\" width = 17 height = 17 border = 0>";
   echo "</a></td>";
   echo "<td align=\"left\">";
   echo "<a href = \"javaScript:modifyLot('5')\">";
   echo "<img src = \"images/delete.gif\" title = Edit width = 17 height = 17 border = 0>";
   echo "</a></td>";
   echo "		</tr>"	;
   print "</tr>";
  }
}
mysql_close($dbh);
?>
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