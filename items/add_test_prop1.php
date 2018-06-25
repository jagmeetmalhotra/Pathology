
<?php

session_start();

session_register("tpc");
include("local_con.php");
$rs=mysql_query("select count(1) from cdri_test_prop");


$ar=mysql_fetch_row($rs);
$tpc=$ar[0]+1;

?>

<html>

<body bgcolor=aquamarine>
<form action="add_test_prop2.php" method=post>
<center>
<h3>TEST PROPERTIES SUBMIT FORM</h3><hr>
<?php
print "<h4>TEST PROPERTY NUMBER:".$tpc."</h4>";
?>
<table width=35%>


<tr><td>TEST IDENTIFICATION:</td>
<td><input type=text name=t_id><font color=red>*</font></td></tr>

<tr><td>TEST NAME AND NUMBER:</td>

<td><select option name=t1 >

<option>Select Any</option>

<?php
$res1=mysql_query("select distinct t_no,t_name from cdri_test order by t_no");

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


<tr><td>MACHINE NAME AND NUMBER:</td>

<td><select option name=m1 >

<option>Select Any</option>

<?php
$res2=mysql_query("select distinct m_no,m_name from cdri_machine_type order by m_no");

$nr2=mysql_num_rows($res2);

print $nr2;
for($x=1;$x<=$nr2;$x++)

{

$ar2=mysql_fetch_row($res2);

print "<option ".$ar2[0].">";

print $ar2[0]." : ".$ar2[1];
print "</option>";

}

?>
</select><font color=red>*</font></td>

</tr>

<tr><td>SOLVENT NAME AND NUMBER:</td>

<td><select option name=s1 >

<option>Select Any</option>

<?php
$res3=mysql_query("select distinct s_no,s_name from cdri_solvent_type order by s_no");

$nr3=mysql_num_rows($res3);

print $nr3;
for($x=1;$x<=$nr3;$x++)

{

$ar3=mysql_fetch_row($res3);

print "<option ".$ar3[0].">";

print $ar3[0]." : ".$ar3[1];
print "</option>";

}

?>
</select><font color=red>*</font></td>

</tr>

<tr><td>TEST PROPERTY 1:</td><td><input type=text name=t_prop1></td></tr>

<tr><td>TEST PROPERTY 2:</td><td><input type=text name=t_prop2></td></tr>

<tr><td>TEST PROPERTY 3:</td><td><input type=text name=t_prop3></td></tr>

<tr><td>TEST PROPERTY 4:</td><td><input type=text name=t_prop4></td></tr>

<tr><td>TEST PROPERTY 5:</td><td><input type=text name=t_prop5></td></tr>

<tr><td>TEST PROPERTY 6:</td><td><input type=text name=t_prop6></td></tr>

<tr><td>TEST PROPERTY 7:</td><td><input type=text name=t_prop7></td></tr>

<tr><td>TEST PROPERTY 8:</td><td><input type=text name=t_prop8></td></tr>

<tr><td>TEST PROPERTY 9:</td><td><input type=text name=t_prop9></td></tr>

<tr><td>TEST PROPERTY 10:</td><td><input type=text name=t_prop10></td></tr>
</table>

<br><br><center><input type=submit value=Submit>

<input type=reset value=Clear></center>
</form></body></html>



















