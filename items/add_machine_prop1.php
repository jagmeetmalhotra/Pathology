<?php

session_start();

session_register("mpc");
include("local_con.php");
$rs=mysql_query("select count(1) from cdri_machine_prop");


$ar=mysql_fetch_row($rs);
$mpc=$ar[0]+1;

?>

<html>


<script language=javascript>
function f1()
{
k=document.f.mc_id;
j=document.f.s1;
alert(j.value);
alert(k.value);
}
</script>

<body bgcolor=aquamarine>


<form action="add_machine_prop2.php" method=post>

<center>

<h3>MACHINE PROPERTIES SUBMIT FORM</h3><hr>
<?php
print "<h4>MACHINE PROPERTY NUMBER:".$mpc."</h4>";
?>

<table width=35%>


<tr><td>MACHINE IDENTIFICATION:</td>
<td><input type=text name=mc_id><font color=red>*</font></td></tr>
<tr><td>MACHINE NAME AND NUMBER:</td>

<td><select option name=s1 >

<option>Select Any</option>

<?php
$res1=mysql_query("select distinct m_no,m_name from cdri_machine_type order by m_no");

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
<tr><td>MACHINE PROPERTY 1:</td><td><input type=text name=mc_prop1></td></tr>

<tr><td>MACHINE PROPERTY 2:</td><td><input type=text name=mc_prop2></td></tr>

<tr><td>MACHINE PROPERTY 3:</td><td><input type=text name=mc_prop3></td></tr>

<tr><td>MACHINE PROPERTY 4:</td><td><input type=text name=mc_prop4></td></tr>

<tr><td>MACHINE PROPERTY 5:</td><td><input type=text name=mc_prop5></td></tr>

<tr><td>MACHINE PROPERTY 6:</td><td><input type=text name=mc_prop6></td></tr>

<tr><td>MACHINE PROPERTY 7:</td><td><input type=text name=mc_prop7></td></tr>

<tr><td>MACHINE PROPERTY 8:</td><td><input type=text name=mc_prop8></td></tr>

<tr><td>MACHINE PROPERTY 9:</td><td><input type=text name=mc_prop9></td></tr>

<tr><td>MACHINE PROPERTY 10:</td><td><input type=text name=mc_prop10></td></tr>
</table>

<br><br><center><input type=submit value=Submit>

<input type=reset value=Clear></center>
</form></body></html>




