<?php

include("local_con.php");
$rs=mysql_query("select * from cdri_machine_prop");

print $rs;

$x=0;

while($ar=mysql_fetch_row($rs))

{
 
print $ar[0];

$z=$ar[0];
  
 if ($z>$x)
     
 $mm=$z;
   
 else
      
 $mm=$x;  
 
$x=$ar[0];   

}

$pc=$mm+1;
?>

<html>

<body bgcolor=aquamarine>


<form action=\"add_machine_prop2.php\" method=post>

<center>

<h3>MACHINE PROPERTIES INSERTION FORM</h3><hr>
<h4>MACHINE PROPERTY NUMBER:".$pc."</h4>

<table width=35%>


<tr><td>MACHINE IDENTIFICATION:</td>

<td><select option name=s1>

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
</select></td>

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




