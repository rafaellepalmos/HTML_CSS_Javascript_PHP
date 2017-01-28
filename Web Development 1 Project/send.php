
<?php


/*$toAdress = "<rafaelle.palmos@students.stamford.edu>";*/
$toAdress = "<rafaelle.palmos@students.stamford.edu>";



$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$phone = $_REQUEST['phone'] ;
$subject = $_REQUEST['subject'] ;
$message = $_REQUEST['message'] ;


/* ---------------------------------------------------- */
/* Error Message, if not all required Fields are filled */
/* ---------------------------------------------------- */
$error = "<body> <p>&nbsp;</p><p>&nbsp;</p> <p align=center><font face=Verdana color=#FF0000><i><b>Error!</b></i></font></p><p align=center><font face=Verdana size=2 color=#800080>Please complete all fields before submit, thank you.</font></p><p align=center><font face=Verdana size=2><b><a href=JavaScript:history.back()><span style=text-decoration:none font-color:#000000>Try Again</span></a></b></font></p>";

/* ---------------------------------------------------- */
/* Message, that will be show after successfull sending */
/* ---------------------------------------------------- */
$success = "<body> <p>&nbsp;</p><p>&nbsp;</p> <p align=center><font face=Verdana color=#00d09c><i><b>Thank you</b></i></font></p><p align=center><font face=Verdana size=2 color=#800080>Your message is sent!</font></p><p align=center><font face=Verdana size=2><b><a href=JavaScript:history.back()><span style=text-decoration: none font-color:#000>Go Back</span></a></b></font></p>";

/* ----------------------------- */
/* The Message that will be send */
/* ----------------------------- */
$message = "<body bgcolor=#ffffff>
<table border=0 cellpadding=0 cellspacing=0 bordercolor=#FFFFFF width=100%>
	<tr border=0 ><td width=100%>	<hr></td></tr>
			<tr>
				<td width=100% align=center>
						<font face=Verdana size=4 color=#000000 style=text-decoration: none>
							Message from RP 25-50.net
						</font>
				</td>
			</tr>
	<tr><td width=100% align=center><hr width=95%></td></tr>
</table>


<table border=0 cellpadding=0 cellspacing=0 width=100%>


	<tr><td><div align=center><table border=0 width=80% id=table1 cellspacing=1>
					
	<tr><td width=12% bgcolor=#FFFFFF><b><font face=Verdana size=2>Name:</font></b></td>
		<td width=87% bgcolor=#FFFFFF><font size=2 face=Verdana>$name</font></td></tr>

	<tr><td width=12% bgcolor=#FFFFFF><b><font face=Verdana size=2>Email:</font></b></td>
		<td width=87% bgcolor=#FFFFFF><font size=2 face=Verdana>$email</font></td></tr>

	<tr><td width=12% bgcolor=#FFFFFF><b><font face=Verdana size=2>Phone:</font></b></td>
		<td width=87% bgcolor=#FFFFFF><font size=2 face=Verdana>$phone</font></td></tr>		

	<tr><td width=12% bgcolor=#FFFFFF><b><font face=Verdana size=2>Subject:</font></b></td>
		<td width=87% bgcolor=#FFFFFF><font size=2 face=Verdana>$subject</font></td></tr>
		
	<tr><td width=12% bgcolor=#FFFFFF valign=top align=left><b>
		<font face=Verdana size=2>Message:</font></b></td>
		<td width=87% bgcolor=#FFFFFF align=left valign=top><font size=2 face=Verdana>$message</font></td></tr>
	
	
	</table>
	</div></td></tr></table>
	<table border=0 cellpadding=0 cellspacing=0 width=100%>
		<tr><td width=100% align=center><hr width=95%></td></tr>
		<tr><td width=100%><hr></td></tr>
	</table>";

/* -------------------------------------------- */
/* Header that will be used e.g. send HTML-Mail */
/* -------------------------------------------- */
$Header = "MIME-Version: 1.0\r\n"; 
$Header = "Content-type: text/html; charset=iso-8859-1\r\n";

if ($name =="" || $email =="" || $phone =="" || $subject =="" || $message =="")
	{
	/*no*/	
	echo "$error";
	}
		else
			{
				mail("$toAdress","$fromName","$message","$Header");
    				echo "$success";
			}		
?>