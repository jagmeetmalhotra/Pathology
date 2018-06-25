<?php

session_start();

session_register("pc");


include("local_con.php");
?>

<html>

<Script Language="JavaScript">



function finalCheck()	
{
	
var boolokay=false;
	
if(check1(document.f.mc_name))
	

	
<!-- if(check2(document.f.mc_id)) -->
	
 
    

if(check3(document.f.mc_desc))
       
  
       
 boolokay=true;
        
 

 if(boolokay)
	
 alert("Thank u for filling this form");

 else
	
 return false;
	
} 
 


function check1(k)
{
	
if(k.value.length==0) 
{
	
 alert("Sorry solvent name can't be empty");
	
 k.focus();
	
 return false;
	
}
        
else	
{
	
 return true;
	
}

}









function check3(k) 
{
	
if(k.value.length==0) 
{

alert("Sorry solvent description can't be empty");
	
return false;
	
}
       
else
{

return true;

}

}






</Script>


<body bgcolor=aquamarine>


<form name=f action=add_solvent_type2.php method=post onSubmit="return finalCheck()";>


<center>


<?php



$rs=mysql_query("select * from cdri_solvent_type");

$x=0;

while($ar=mysql_fetch_row($rs))

{
 
$z=$ar[0];
  
 if ($z>$x)
     
 $mm=$z;
   
 else
      
 $mm=$x;  
 
$x=$ar[0];   

}

$pc=$mm+1;

 

print "<h3>SOLVENT INSERTION FORM</h3><hr>";

print "<h4>SOLVENT NUMBER:".$pc."</h4>";

?>

<table width=35%>

<tr><td>SOLVENT NAME:</td>
<td><input type=text name=mc_name><font color=red>*</font></td></tr>

<tr>
<td>SOLVENT DESCRIPTION:</td><td><textarea rows=5 cols=22 name=mc_desc></textarea><font color=red>*</font></td>
</tr>


<?php /* <tr><td>SOLVENT IDENTIFICATION:</td>
<td><input type=text name=mc_id><font color=red>*</font></td></tr>

<tr>
<td>SOLVENT DESCRIPTION:</td><td><textarea rows=5 cols=22 name=mc_desc></textarea><font color=red>*</font></td>
</tr>

<tr><td>SOLVENT PROPERTY 1:</td><td><input type=text name=mc_prop1></td></tr>

<tr><td>SOLVENT PROPERTY 2:</td><td><input type=text name=mc_prop2></td></tr>

<tr><td>SOLVENT PROPERTY 3:</td><td><input type=text name=mc_prop3></td></tr>

<tr><td>SOLVENT PROPERTY 4:</td><td><input type=text name=mc_prop4></td></tr>

<tr><td>SOLVENT PROPERTY 5:</td><td><input type=text name=mc_prop5></td></tr>

<tr><td>SOLVENT PROPERTY 6:</td><td><input type=text name=mc_prop6></td></tr>

<tr><td>SOLVENT PROPERTY 7:</td><td><input type=text name=mc_prop7></td></tr>

<tr><td>SOLVENT PROPERTY 8:</td><td><input type=text name=mc_prop8></td></tr>

<tr><td>SOLVENT PROPERTY 9:</td><td><input type=text name=mc_prop9></td></tr>

<tr><td>SOLVENT PROPERTY 10:</td><td><input type=text name=mc_prop10></td></tr>

<tr><td></td></tr> 
function check2(k) 
{
	
 if(k.value.length==0) 
 {
	
  alert("Sorry solvent identification number can't be empty");
	
  k.focus();
	
  return false;
	
  }
        
  else	
 {
	
  return true;
	
 }

}




*/
?>
 </table><br><br>
<center><input type=submit value=INSERT>
<input type=reset value=CLEAR></center>
</center>
</form>
</body>
</html>
