<?php

session_start();

session_register("tpc");
include("local_con.php");

//$s_id=strtolower($s_id);

//$s_name=strtolower($s_name);
print "<html><body bgcolor=aquamarine>";



$ts=split(":",$t1);
$ms=split(":",$m1);
$ss=split(":",$s1);

$q="insert into cdri_test_prop values($tpc,$ts[0],$ms[0],$ss[0],'$t_id','$t_prop1','$t_prop2','$t_prop3','$t_prop4','$t_prop5','$t_prop6','$t_prop7','$t_prop8','$t_prop9','$t_prop10','y')";

mysql_query($q,$dbh);


$res=mysql_query("select tp_no,t_no,m_no,s_no,t_id from cdri_test_prop");

print "<center><h3>Total Combination Of Test In Database Are</h3></center><br><br>";
print "<body bgcolor=aquamarine><center><table border=3 width=50%><tr><th> FULL TEST NUMBER</th><th>TEST NAME</th><th>MACHINE NAME</th><th>SOLVENT NAME</th> <th>TEST IDENTIFICATION</th></tr> ";
while($ar=mysql_fetch_row($res))
{
$res1=mysql_query("select t_name from cdri_test where t_no=$ar[1]");
$res2=mysql_query("select m_name from cdri_machine_type where m_no=$ar[2]");
$res3=mysql_query("select s_name from cdri_solvent_type where s_no=$ar[3]");
$ar1=mysql_fetch_row($res1);
$ar2=mysql_fetch_row($res2);
$ar3=mysql_fetch_row($res3);
print "<tr>";
print "<td>".$ar[0]."</td>";
print "<td>".$ar1[0]."</td>";
print "<td>".$ar2[0]."</td>";
print "<td>".$ar3[0]."</td>";
print "<td>".$ar[4]."</td>";
print "</tr>";
}
print "</table></center>";

mysql_close($dbh);

print "<center><h4>Test Properties successfully inserted</h4></body></html>";

?>
