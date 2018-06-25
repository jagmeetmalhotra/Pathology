<?PHP
include("local_con.php");

$loginName=$_REQUEST['loginName'];
$firstName=$_REQUEST['firstName'];
$lastName=$_REQUEST['lastName'];
$password=$_REQUEST['password'];
$phoneNumber=$_REQUEST['phoneNumber'];
$address1=$_REQUEST['address1'];
$address2=$_REQUEST['address2'];
$position=$_REQUEST['position'];
$email=$_REQUEST['email'];
$alternateEmail=$_REQUEST['alternateEmail'];
$dob=$_REQUEST['year']."-".$_REQUEST['month']."-".$_REQUEST['day'];
/*$insert_user="insert into users values(99,'$_REQUEST['loginName']','$_REQUEST['firstName']','$_REQUEST['password']','$_REQUEST['phoneNumber']',str_to_date('1980-02-29','%Y-%m-%d'),'$_REQUEST['address1']','$_REQUEST['address2']','$_REQUEST['position']','$_REQUEST['email']','$_REQUEST['alternateEmail']',1,54,date_format(now(),'%Y-%m-%d'),55,date_format(now(),'%Y-%m-%d'),1,0)";					 */
								 

$check_dup_user_name="select count(1) from users where user_name='$loginName'";
$result_dup_user_name=mysql_query($check_dup_user_name,$dbh);
$nr=mysql_num_rows($result_dup_user_name);
if($nr>0)
{
 while($ar=mysql_fetch_row($result_dup_user_name))
  {
   if($ar[0]==0)
   {
   	$insert_user="insert into users 
		(USER_NAME,FIRST_NAME,LAST_NAME,USER_PASSWORD,
		PHONE_NO,USER_DOB,ADDRESS1,ADDRESS2,
		POSITION,USER_EMAIL,ALTERNATE_EMAIL,FDELETED,
		CREATEDBY,CREATEDDATE,MODIFIEDBY,MODIFIEDDATE,USER_TYPE_ID,
		ADMIN_FLAG)
	values('$loginName','$firstName','$lastName','$password',
		'$phoneNumber',str_to_date('$dob','%Y-%m-%d'),
		'$address1','$address2','$position','$email','$alternateEmail',
		1,55,date_format(now(),'%Y-%m-%d'),
		55,date_format(now(),'%Y-%m-%d'),1,0)";	
		$result=mysql_query($insert_user,$dbh);
		print "Record Inserted";
		print "<BR>User name = $loginName";
		print "<BR>Password  = $password";
   }
   else 
   {
   	print "Duplicate User Name Exist. Please Re-enter Details";
   }
  	
  }
}

mysql_close($dbh) ;

?>
