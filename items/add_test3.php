?>

<script language=javascript>

function f1(form)

{

form.action = "add_test1.php";

form.submit();

}

</script>


<form action="<?print $PHP_SELF?>" method=post name=fr1>

<!-- <form action="combo1.php" method=post> -->

<table>
<tr>
<td>MACHINE</td>
<td><select name=s1>

<option selected>Select Any</option>

<?php

for($x=1;$x<=$nr1;$x++)

{

$ar=mysql_fetch_row($res1);

print "<option";

print ($ar[0]==$s1)? " SELECTED": "";

print "> $ar[0]";

print "</option>";

}


?>

></select>
</td>
<td>SOLVENT</td><td><select name=s2>

<option selected>Select Any</option>

<?php




for($x1=1;$x1<=$nr2;$x1++)

{

$ar1=mysql_fetch_row($res2);

print "<option";
print ($ar1[0]==$s2)? " SELECTED": "";
print ">$ar1[0]";

print "</option">;

}

print"</select></td>";


print "</tr></table>";

print "
<input type=submit value=Submit>

";
?>








