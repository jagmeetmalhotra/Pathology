<?php

session_start();

session_register("pc");
?>


<html>
<?php

include("local_con.php");

$mc_id=strtolower($mc_id);

//$mc_name=($mc_name);



$q="insert into cdri_solvent_type values($pc,'$mc_name','$mc_desc','y')";

mysql_query($q,$dbh);



$res=mysql_query("select * from cdri_solvent_type");
$nr=mysql_num_rows($res);

print "<center><h3>Total Type Of SOLVENT In Database Are</h3></center><br><br>";
print "<body bgcolor=aquamarine><center><table border=3 width=50%><tr><th>SOLVENT NUMBER</th><th>SOLVENT NAME</th></tr> ";
while($ar=mysql_fetch_row($res))
{
 print "<tr>";
 print "<td>".$ar[0]."</td>";
 print "<td>".$ar[1]."</td>";
 print "</tr>";
}
print "</table></center>";


//$q1="insert into cdri_solvent_prop values($pc,'$mc_prop1','$mc_prop2','$mc_prop3','$mc_prop4','$mc_prop5','$mc_prop6','$mc_prop7','$mc_prop8','$mc_prop9','$mc_prop10')";
//mysql_query($q1,$dbh);



print "<center><h4>Product successfully inserted</h4></body></html>";
?>
