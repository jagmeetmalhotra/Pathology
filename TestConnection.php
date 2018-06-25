<?PHP
include("local_con.php");
$cd="select now() from dual" ;
$output=mysql_query($cd,$dbh);
while($ar=mysql_fetch_row($output))
  {
print $ar[0];
  }
?>