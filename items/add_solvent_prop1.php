<?php

session_start();

session_register("spc");
include("local_con.php");
$rs=mysql_query("select count(1) from cdri_solvent_prop");


$ar=mysql_fetch_row($rs);
$spc=$ar[0]+1;

?>

<html>

<body bgcolor=aquamarine>


<form action="add_solvent_prop2.php" method=post>

<center>

<h3>SOLVENT PROPERTIES SUBMIT FORM</h3><hr>
<?php
print "<h4>SOLVENT PROPERTY NUMBER:".$spc."</h4>";
?>

<table width=35%>


<tr><td>SOLVENT IDENTIFICATION:</td>
<td><input type=text name=s_id><font color=red>*</font></td></tr>
<tr><td>SOLVENT NAME AND NUMBER:</td>

<td><select option name=s1 >

<option>Select Any</option>

<?php
$res1=mysql_query("select distinct s_no,s_name from cdri_solvent_type order by s_no");

$nr1=mysql_num_rows($res1);

print $nr2;
for($x=1;$x<=$nr1;$x++)

{

$ar=mysql_fetch_row($res1);

print "<option ".$ar[0].">";

print $ar[0]." : ".$ar[1];
print "</option>";

}

?>
</select><font color=red>*</font></td>

</tr>
<tr><td>SOLVENT PROPERTY 1:</td><td><input type=text name=S_prop1></td></tr>

<tr><td>SOLVENT PROPERTY 2:</td><td><input type=text name=s_prop2></td></tr>

<tr><td>SOLVENT PROPERTY 3:</td><td><input type=text name=s_prop3></td></tr>

<tr><td>SOLVENT PROPERTY 4:</td><td><input type=text name=s_prop4></td></tr>

<tr><td>SOLVENT PROPERTY 5:</td><td><input type=text name=s_prop5></td></tr>

<tr><td>SOLVENT PROPERTY 6:</td><td><input type=text name=s_prop6></td></tr>

<tr><td>SOLVENT PROPERTY 7:</td><td><input type=text name=s_prop7></td></tr>

<tr><td>SOLVENT PROPERTY 8:</td><td><input type=text name=s_prop8></td></tr>

<tr><td>SOLVENT PROPERTY 9:</td><td><input type=text name=s_prop9></td></tr>

<tr><td>SOLVENT PROPERTY 10:</td><td><input type=text name=s_prop10></td></tr>
</table>

<br><br><center><input type=submit value=Submit>

<input type=reset value=Clear></center>
</form></body></html>




