<?php

session_start();

session_register("spc");
include("local_con.php");

//$s_id=strtolower($s_id);

//$s_name=strtolower($s_name);
print "<html><body bgcolor=aquamarine>";


$sp=split(":",$s1);
$q="insert into cdri_solvent_prop values($spc,$sp[0],'$s_id','$s_prop1','$s_prop2','$s_prop3','$s_prop4','$s_prop5','$s_prop6','$s_prop7','$s_prop8','$s_prop9','$s_prop10','y')";

mysql_query($q,$dbh);


/*$res=mysql_query("select * from cdri_solvent_type");
$nr=mysql_num_rows($res);

print "<center><h3>Total Type Of solvent In Database Are</h3></center><br><br>";
print "<body bgcolor=aquamarine><center><table border=3 width=50%><tr><th>solvent NUMBER</th><th>solvent NAME</th></tr> ";
while($ar=mysql_fetch_row($res))
{
 print "<tr>";
 print "<td>".$ar[0]."</td>";
 print "<td>".$ar[1]."</td>";
 print "</tr>";
}
print "</table></center>";*/

//$q1="insert into cdri_solvent_prop values($pc,'$s_prop1','$s_prop2','$s_prop3','$s_prop4','$s_prop5','$s_prop6','$s_prop7','$s_prop8','$s_prop9','$s_prop10')";
//mysql_query($q1,$dbh);



mysql_close($dbh);

print "<center><h4>Product successfully inserted</h4></body></html>";
?>
