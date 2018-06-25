<HTML><HEAD><TITLE>Registration</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<!--<SCRIPT src="Create Sample_files/validations.js"></SCRIPT>

<SCRIPT src="Create Sample_files/common.js"></SCRIPT>-->
<LINK href="css_files/style.css" type=text/css rel=stylesheet>

<!--<SCRIPT src="Create Sample_files/ua.js"></SCRIPT>

<SCRIPT src="Create Sample_files/ftiens4.js"></SCRIPT>

<SCRIPT language=javascript>
USETEXTLINKS = 1
STARTALLOPEN = 0
USEFRAMES = 0
USEICONS = 0
ICONPATH = '/SAIF/images/'
WRAPTEXT = 1
PERSERVESTATE = 1
foldersTree = gFld("", "")



var browserVer=parseInt(navigator.appVersion);
var browserName=navigator.appName;

</SCRIPT> -->
<body>
<center>
<h6>Registration Form</h6></center>
<NOSCRIPT>
<META content="MSHTML 6.00.2900.2180" name=GENERATOR></HEAD>

<CENTER>
<H5>"Hello How are u"</H5></CENTER></NOSCRIPT>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><!-- header code starts here -->
  <TBODY>
  <TR><!-- LHS Nav code starts here -->
    <TD class=bottomHeader vAlign=top align=middle width=144 rowSpan=3>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD>&nbsp;</TD></TR></TBODY></TABLE>
      <TABLE class=borderTable cellSpacing=0 cellPadding=0 width=128
      align=center border=0>
        <TBODY>
        <TR>
          <TD background="css_files/bgTopNavigation.jpg" height=117>
            <TABLE height="100%" cellSpacing=0 cellPadding=0 width="97%"
            border=0>
              <TBODY>
              <TR>
                <TD class=leftsidebar vAlign=top width=12 height=61>&nbsp; </TD>
                <TD class=leftsidebar align=left width="97%" height=61><FONT
                  size=0></FONT>
                 <img height=175 src="\inventory\final\CDRI WEBPAGE\Welcome to CDRI  Central Drug Research Institute_files\cmanzilh.jpg" width=115>

                </TD></TR></TBODY></TABLE>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD><IMG height=17 src="css_files/trans_spacer.gif"
                  width=7></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD><!-- body code starts here -->


<FORM name=userFB action="registration2.php" method=post>
<INPUT type=hidden
value=Z name=performActionId><TD id=checktable align="center" valign="top"
colspan="2" width="100%">
<META content="MSHTML 6.00.2900.3199" name=GENERATOR></HEAD>
<BODY>
<TABLE cellSpacing=2 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR class=theader>
    <TD align=left></TD>
    <TD align=left></TD></TR>
  <TR class=tinner>
    <TD align=left>Login Name:</TD>

  <TD align=left><INPUT name=loginName></TD></TR>
  <TR class=tinner>
    <TD align=left>Title:</TD>
    <TD><SELECT class=dropMenu name=title><OPTION value=1
        selected>Dr.</OPTION> <OPTION value=2>Mr.
        </OPTION> <OPTION value=3>
        Ms.</OPTION> <OPTION value=4>
        Mrs.</OPTION></SELECT></TD></TR>
  <TR class=tinner>
    <TD align=left>First Name:</TD>
    <TD align=left><INPUT name=firstName> </TD></TR>
  <TR class=tinner>
    <TD align=left>Last Name:</TD>
    <TD align=left><INPUT name=lastName></TD></TR>
    <TR class=tinner>
    <TD align=left>Date Of Birth:</TD>



<?php
//DATE CALCULATION

print "<td><select class=dropMenu name=day>";

print "<option value=1 selected>Day</option>";

for($i=1;$i<=31;$i++)
	{
print "<option>".$i."</option>";
}

print "</select>";


print "<select class=dropMenu name=month>";

print "<option  value=1 selected>Month</option>";


for($i=1;$i<=12;$i++)
{
print "<option>".$i."</option>";
}

print "</select>";


print "<select class=dropMenu name=year>";

print "<option value=1 selected>Year</option>";

for($i=1940;$i<=2000;$i++)
{
print "<option>".$i."</option>";
}

print "</select></td></tr>";

?>

  <TR class=tinner>
    <TD align=left>Password:</TD>
    <TD align=left><INPUT type=password name=password> </TD></TR>
  <TR class=tinner>
    <TD align=left>Confirm Password:</TD>
    <TD align=left><INPUT type=password name=confirmPassword></TD></TR>
  <TR class=tinner>
    <TD align=left>Phone Number:</TD>
    <TD align=left><INPUT name=phoneNumber> </TD></TR>
  <TR class=tinner>
    <TD align=left>Address1:</TD>
    <TD align=left><INPUT name=address1> </TD></TR>
  <TR class=tinner>
    <TD align=left>Address2:</TD>
    <TD align=left><INPUT name=address2></TD></TR>
  <TR class=tinner>
    <TD align=left>Position:</TD>
     <TD><SELECT class=dropMenu name=position><OPTION
        selected>Faculty</OPTION><OPTION>Research scholor
        </OPTION><OPTION>
        Administrator</OPTION> <OPTION>
        Others</OPTION></SELECT></TD></TR>
  <TR class=tinner>
    <TD align=left>Email:</TD>
    <TD align=left><INPUT name=email> </TD></TR>
  <TR class=tinner>
    <TD align=left>Alternate Email:</TD>
    <TD align=left><INPUT name=alternateEmail></TD></TR>
  <TR class=tinner>
    <TD align=left>User Type:</TD>
    <TD><SELECT class=dropMenu name=userType><OPTION value=2
        selected>Private Industries</OPTION><OPTION value=1>Educational
        Institutions</OPTION> <OPTION value=3>National Labs & Small Scale Industries</OPTION>
        </SELECT></TD></TR></TBODY></TABLE>

<TABLE cellSpacing=2 cellPadding=0 width="100%" border=0><INPUT class=extraLargeButton1 onclick=" javascript:submitForm()" type=button value=Submit name=submit1>

  <TBODY></TBODY></TABLE></TD></FORM>
<SCRIPT language=JavaScript>
	<!-- // create calendar object(s) just after form tag closed
		 // specify form element as the only parameter (document.forms['formname'].elements['inputname']);
		 // note: you can have as many calendar objects as you need for your application

		var cal2 = new calendar2(document.forms['userFB'].elements['dateOfBirth']);

		cal2.year_scroll = true;
		cal2.time_comp = false;

	//-->
</SCRIPT>


   <!--   <TABLE cellSpacing=2 cellPadding=0 width="100%" border=0><INPUT class=extraLargeButton1 type=button value=Submit name=submit1 onclick=" javascript:submitForm()" >

        <TBODY></TBODY></TABLE></TD></FORM>-->

<TR>
    <TD vAlign=bottom colSpan=2><!-- footer code starts here -->



      <SCRIPT language=javascript>
	function top()
	{
	  document.location.href="#top";
	}

function submitForm()
{
 if(finalCheck())
 document.userFB.submit();
}

function finalCheck()
{
	var boolokay=false;
        if(check4(document.userFB.loginName))
	if(check(document.userFB.firstName))
	if(check2(document.userFB.lastName))
	if(checkd(document.userFB.day))
	if(checkm(document.userFB.month))
	if(checky(document.userFB.year))
         if(chkp(document.userFB.password))

        if(chkp(document.userFB.confirmPassword))

        if(chk(document.userFB.password,document.userFB.confirmPassword))

        if(check1(document.userFB.phoneNumber))
        if(check3(document.userFB.address1))

        if(checkEmail(document.userFB.email))

        boolokay=true;

   if(boolokay)
     {


	return true;
      }
   else
	return false;
}


function checkd(k)
{


  if(k.value==1)
	{
	alert("Please enter valid day");
	k.focus();

	   return false;
	  }

	  else

	  {
		return true;
  }
}


function checkm(k)
{
    if(k.value==1)
	{
	alert("Please enter valid month");
	k.focus();

	   return false;
	  }

	  else

	  {
		return true;
  }
}

function checky(k)
{

  if(k.value==1)
	{
	alert("Please enter valid year");
	k.focus();

	   return false;
	  }

	  else

	  {
		return true;
  }
}



function chkp(k)
   <!--for password-->
{

 if(k.value.length==0)

 {
	alert("Sorry password field can't be empty");
	k.focus();
	return false;
 }

 else

 {
	return true;
 }
}



function chk(k1,k2)
   <!--for matching of password-->
{

  if(k1.value!=k2.value)

  {

   alert("PASSWORDS ARE NOT SAME");

   k1.focus();

   return false;
  }

  else

  {
	return true;
  }
}


function check4(k)
{
	if(k.value.length==0)
        {
	alert("Sorry login name can't be empty");
	k.focus();
	return false;
	}

        else
        {
	return true;
	}
}


function check(k)
{
	if(k.value.length==0)
        {
	alert("Sorry first name can't be empty");
	k.focus();
	return false;
	}

        else
        {
	return true;
	}
}




function check2(k)
{
	if(k.value.length==0) {
	alert("Sorry last name can't be empty");
	k.focus();
	return false;
	}

       else	{
	return true;
	}
}


function check3(k)
{
	if(k.value.length==0) {
	alert("Sorry Address1 field can't be empty");
	k.focus();
	return false;
	}
        else	{
	return true;
	}
}



function check1(k)
 {
	if(k.value.length==0)
        {
	alert("Sorry phone no. can't be empty");
	k.focus();
	return false;
	}

       else

        {

        if(isNaN(k.value))
	alert("Sorry phone number cannot be an alphabet");

        else if(k.value.length<8)

        alert("Sorry phone number is invalid");
        else
	return true;

        }

 }



function checkEmail(k)
{

   t=k.value;

   txt=k.value.length;

if(txt==0)

 {

       alert("Sorry E-mail field can't be empty");
	k.focus();
         return false;

 }

 else

 {

a2=t.indexOf("@");

 if(a2==-1)
          {
        alert("Plz enter the valid e-mail id");
	document.userFB.email.focus();
	return false;
	  }
        a2=a2+1;
        a3=txt-a2;
        a4=t.substr(a2,txt);
        //alert(a4);
        a5=a4.lastIndexOf(".")
        //alert(a5);
        if(a5==-1)
         {
        alert("Plz enter the valid e-mail id");
	document.userFB.email.focus();
	return false;
	 }
         else
        return true;
       }

   }





      </SCRIPT>

<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD align=left width=18 rowSpan=6><IMG height=5
            src="css-files/trans_spacer.gif" width=18></TD>
          <TD align=right>
            <TABLE height=18 cellSpacing=0 cellPadding=0 width="100%"
              border=0><TBODY>
              <TR vAlign=top>
                <TD width="92%" height=18>&nbsp;</TD>
                <TD align=right width="4%"><SPAN class=footer>Up</SPAN></TD>
                <TD align=middle width="4%"><A href="javascript:top();"><IMG
                  height=11 src="" width=12 border=0></A>
</TD></TR></TBODY></TABLE></TD>
          <TD align=right width=18 rowSpan=6><IMG height=5
            src="css_files/trans_spacer.gif" width=18> </TD></TR>
        <TR>
          <TD><IMG height=5 hspace=0 src="" width=1 border=0></TD></TR>
        <TR>
          <TD><IMG height=1 hspace=0 src="" width="100%" border=0></TD></TR>
        <TR>
          <TD><IMG height=7 hspace=0 src="" width=1 border=0></TD></TR>
        <TR>
          <TD class=footer vAlign=top align=left height=14>© CDRI 2008</TD></TR>
        <TR>
          <TD><IMG height=15 hspace=0 src="" width=1
      border=0></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></BODY></HTML>
