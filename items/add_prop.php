<!-- form action="<?print $PHP_SELF?>" -->
<html>

<?php

if($s!=null && $s!=SELECT)

{
 if($s=="TEST PROPERTY")
 {
 header("Location:add_test_prop1.php");    
           
        exit;
   
 }

 else if($s=="MACHINE PROPERTY")
 {
header("Location:add_machine_prop1.php");    
           
        exit;
   
 }
else if($s=="SOLVENT PROPERTY")
 {
header("Location:add_solvent_prop1.php");    
           
        exit;
   
 }
}
else if($s==SELECT && $s!=null)
{

header("Location:add_prop.php");    
           
        exit;
   
}



?>

<body bgcolor=aquamarine>

<form action="<?php print $PHP_SELF ?>" name=f method=post>

<center><h3>ADD PROPERTY OF REPOSITORY</h3>


<table border=0>

<tr>
<td>
<Select option name=s>
<option selected>SELECT</option>

<option>TEST PROPERTY</option><option>MACHINE PROPERTY</option><option>SOLVENT PROPERTY</option>
</Select></td></tr>

<tr></tr><tr></tr><tr><td></td><td></td><input type=submit value=submit></td>

</tr>
</center>
</font></body></html>
