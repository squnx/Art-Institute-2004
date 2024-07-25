<HTML>
<HEAD>
  <TITLE>Email Form v1.1 - Powered by: (http://www.phpscriptcenter.com/emailform.php)</TITLE>
</HEAD>
<BODY BGCOLOR="#ffffff">
<!--

Powered by: Email Form Version 1.1 (http://www.phpscriptcenter.com/emailform.php)

-->
<?php


// your name
$yourname = "Your Name";

// your email
$youremail = "Your Email";

// Default Send Page
$yourdefaultsend = "http://www.phpscriptcenter.com/sent.php";

////////////////////////////////////////////////////////////////////////////
//                      DO NOT EDIT BELOW THIS LINE                       //
////////////////////////////////////////////////////////////////////////////



if($submitform) {

$dcheck = explode(",",$require);
while(list($check) = each($dcheck)) {
if(!$$dcheck[$check]) {
$error .= "Missing $dcheck[$check]<BR>";
}
}

if($error) {
?>
<P><CENTER><TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0">
  <TR>
    <TD WIDTH="100%" BGCOLOR="#004080">
    <TABLE WIDTH="394" BORDER="0" CELLSPACING="1" CELLPADDING="2">
      <TR>
        <TD WIDTH="26%" BGCOLOR="#004080">
        <P><B><FONT COLOR="#ffffff" SIZE="-1" FACE="Verdana">Error</FONT></B></TD>
      </TR>
	  <TR>
        <TD WIDTH="26%" BGCOLOR="#ffffff">
        <FONT COLOR="#000000" SIZE="-1" FACE="Verdana"><?php echo $error; ?></FONT></TD> 
      </TR>
    </TABLE></TD>
  </TR>
</TABLE></CENTER>
<P><CENTER>&nbsp;</CENTER></P>
<P><CENTER><FONT SIZE="-2" FACE="Verdana"><B>Powered by:</B> <A HREF="http://www.phpscriptcenter.com/emailform.php">Email Form</A> Version 1.1</FONT></CENTER></P>
</BODY></HTML>
<?php
exit();
}

if ($fromname) {
$yeshow = "\nFrom, $fromname\n";
}

mail($toemail,"$subject","

$message

$yeshow

","From: $fromname <$fromemail>");

header("Location: $sendpage");
exit();

} else {

?>
<FORM ACTION="emailform.php" METHOD="POST">
<P><CENTER><TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0">
  <TR>
    <TD WIDTH="100%" BGCOLOR="#004080">
    <TABLE WIDTH="394" BORDER="0" CELLSPACING="1" CELLPADDING="2">
      <TR>
        <TD COLSPAN="2" BGCOLOR="#004080">
        <B><FONT COLOR="#ffffff" SIZE="-1" FACE="Verdana">Contact Form</FONT></B></TD>

      </TR>
	        <TR>
        <TD WIDTH="48%" BGCOLOR="#ffffff">
        <B><FONT COLOR="#000000" SIZE="-1" FACE="Verdana">Your Name:</FONT></B></TD>
        <TD WIDTH="52%" BGCOLOR="#ffffff">
        <INPUT NAME="fromname" TYPE="text" SIZE="25">
</TD>
      </TR>
      <TR>
        <TD WIDTH="48%" BGCOLOR="#ffffff">
        <B><FONT COLOR="#000000" SIZE="-1" FACE="Verdana">Your Email:</FONT></B></TD>
        <TD WIDTH="52%" BGCOLOR="#ffffff">
        <INPUT NAME="fromemail" TYPE="text" SIZE="25">
</TD>
      </TR>
      <TR>
        <TD COLSPAN="2" BGCOLOR="#ffffff">
        <B><FONT COLOR="#000000" SIZE="-1" FACE="Verdana">Message:<BR><INPUT
        TYPE="hidden" NAME="subject" VALUE="Contact Form">
		<INPUT TYPE="hidden" NAME="toemail" VALUE="<?php echo $youremail; ?>">
		<INPUT TYPE="hidden" NAME="toname" VALUE="<?php echo $yourname; ?>">
		<INPUT TYPE="hidden" NAME="require" VALUE="fromname,fromemail,message">
		<INPUT TYPE="hidden" NAME="sendpage" VALUE="<?php echo $yourdefaultsend; ?>">
		<TEXTAREA NAME="message" ROWS="5" COLS="45"></TEXTAREA></FONT></B></TD>
      </TR>
    </TABLE></TD>
  </TR>
</TABLE></CENTER></P>

<P><CENTER><INPUT NAME="submitform" TYPE="submit" VALUE="Submit"></CENTER></FORM></P>
<P><CENTER>&nbsp;</CENTER></P>
<P><CENTER><FONT SIZE="-2" FACE="Verdana"><B>Powered by:</B> <A HREF="http://www.phpscriptcenter.com/emailform.php">Email Form</A> Version 1.1</FONT></CENTER></P>
</BODY></HTML>
<?php
exit();

}

?>