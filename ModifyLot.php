<script src="css_files/validations.js"></script>
<script src="css_files/common.js"></script>

<html>
<head>
<title>Modify Lot</title>

<link href="css_files/style.css"
	rel="stylesheet" type="text/css">
<script src="css_files/ua.js"></script>
<script src="css_files/ftiens4.js"></script>

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
<form name="lotFB" method="post" action="ModifyLot_S2.php">
	<input type="hidden" name="performActionId" value="Z">

		<input type="hidden" name="lotId" value="5">
	<td width="100%" colspan="2" valign="top" align="center"
		id="checktable">
	<table width="100%" border="0" cellspacing="2" cellpadding="0">
		<tr class="theader">
			<td align="left"></td>
			<td align="left"></td>
		</tr>
		<tr class="tinner">
			<td align="left">Lot Id:</td>
<?php
			print "<td align=\"left\"><input type=\"text\" name=\"lotId\" value=\"".$_REQUEST['lotId']."\"></td>";
?>			
			</tr>
			<tr class="tinner">
			<td align="left">Lot Name:</td>
<?php
			print "<td align=\"left\"><input type=\"text\" name=\"lotName\" value=\"".$_REQUEST['lotName']."\"></td>";
?>			
			</tr>
		
		<tr class="tinner">
			<td align="left">Description:</td>
			<td align="left"><input type="text" name="description" value=""></td>
		</tr>
		<tr class="tinner">
			<td align="left">Lot Status:</td>
			<td align="left">
		 
						<select name="status" class="dropMenu"><option value="1" selected="selected">Submitted</option>
<option value="2">Draft Submitted</option>
<option value="3">Completed</option>
<option value="4">Samples Receved</option>
<option value="5">Sample + Draft Receved</option></select>		
			</td>			
		</tr>
		
		
	
	</table>

	<table width="100%" border="0" cellspacing="2" cellpadding="0">
		<input type="button" name="submit1" value="Submit" onclick=" javascript:submitForm()" class="extraLargeButton1">
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