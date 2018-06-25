<!-- form action="<?print $PHP_SELF?>" -->
<html>

<?php

if($s!=null && $s!=SELECT)

{
 if($s=="TEST TYPE")
 {
 header("Location:add_test_type1.php");    
           
        exit;
   
 }

 else if($s=="MACHINE TYPE")
 {
header("Location:add_machine_type1.php");    
           
        exit;
   
 }
else if($s=="SOLVENT TYPE")
 {
header("Location:add_solvent_type1.php");    
           
        exit;
   
 }
}
else if($s==SELECT && $s!=null)
{

header("Location:add_repositry.php");    
           
        exit;
   
}



?>

<body bgcolor=aquamarine>

<form action="<?php print $PHP_SELF ?>" name=f method=post>

<center><h3>ADD REPOSITORY FORM</h3>


<table border=0>

<tr>
<td>
<Select option name=s>
<option selected>SELECT</option>

<option>TEST TYPE</option><option>MACHINE TYPE</option><option>SOLVENT TYPE</option>
</Select></td></tr>

<tr></tr><tr></tr><tr><td></td><td></td><input type=submit value=submit></td>

</tr>
</center>
</font></body></html>
