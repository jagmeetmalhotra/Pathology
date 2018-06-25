<?php

session_start();

session_register("tc");
?>


<html>
<?php

include("local_con.php");

//$mc_id=strtolower($mc_id);

//$mc_name=($mc_name);



$q="insert into cdri_test values($tc,'$mc_name','$mc_desc','y')";

mysql_query($q,$dbh);



$res=mysql_query("select * from cdri_test");
$nr=mysql_num_rows($res);

print "<center><h3>Total Type Of Test In Database Are</h3></center><br><br>";
print "<body bgcolor=aquamarine><center><table border=3 width=50%><tr><th>TEST NUMBER</th><th>TEST NAME</th></tr> ";
while($ar=mysql_fetch_row($res))
{
 print "<tr>";
 print "<td>".$ar[0]."</td>";
 print "<td>".$ar[1]."</td>";
 print "</tr>";
}
print "</table></center>";


//$q1="insert into cdri_test_prop values($pc,'$mc_prop1','$mc_prop2','$mc_prop3','$mc_prop4','$mc_prop5','$mc_prop6','$mc_prop7','$mc_prop8','$mc_prop9','$mc_prop10')";
//mysql_query($q1,$dbh);



print "<center><h4>Test successfully inserted</h4></body></html>";
?>
