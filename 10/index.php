<?php
function formel($var_form,$size,$maxlength) {
	if ($_POST[$var_form]==""){
    	print "<input type=\"text\" name=\"".$var_form."\" value=\"\" size=\"".$size."\" maxlength=\"".$maxlength."\">";
    	}
    else {
		$input=$_POST[$var_form];
		$input=stripslashes($input);
		$input=str_replace("\"","`",$input);
		$input=str_replace("\'","`",$input);
		$input=str_replace("\\","",$input);
		$input=str_replace("\\","",$input);
		print "<input type=\"text\" name=\"".$var_form."\" value=\"".$input."\" size=\"".$size."\" maxlength=\"".$maxlength."\">";
		}
    }
    
function hiddenel($var_form) {
	if ($_POST[$var_form]==""){
    	print "(empty)";
    	}
    else {
		$input=$_POST[$var_form];
		$input=str_replace("\"","`",$input);
		$input=str_replace("\'","`",$input);
		$input=str_replace("\\","",$input);
		$input=str_replace("\\","",$input);
		print "<input type=\"hidden\" name=\"".$var_form."\" value=\"".$input."\">".$input;
		}
    }

// Check form values
reset($_POST);
$focus=0;
if ($_POST['stage']=="1") {
	while (list ($key, $val) = each($_POST)) {
		if ((eregi("^f_", $key)) == FALSE) {
			if ($val=="") {
				$focus++;
				$ffield=$key;
				break;
				}
			else {
				if (($key == "zipcode") && ((eregi("([0-9]{5})", $val)) == FALSE)) {
					$focus++;
					$ffield=$key;
					break;
					}
				if (($key == "email") && ((eregi("([[:alnum:]\.\-]+)(\@[[:alnum:]\.\-]+\.+)", $val)) == FALSE)) {
					$focus++;
					$ffield=$key;
					break;
					}
				if (($key == "month") && ((ereg("^[0][1-9]|^[1][0-2]",$val)) == FALSE)) {
					$focus++;
					$ffield=$key;
					break;	
					}
				if (($key == "day") && ((ereg("^[1-2][0-9]|^[0][1-9]|^[3][0-1]",$val)) == FALSE)) {
					$focus++;
					$ffield=$key;
					break;
					}
				if (($key == "year") && ((ereg("^[2][0][0-9][0-9]|^[1][9][0-9][0-9]",$val)) == FALSE)) {
					$focus++;
					$ffield=$key;
					break;	
					}
				}
			}
		}
	}

$error_message = "Please fill out all required fields correctly";
?>
<html>
  <head>
    <title>The Art Institutes - Art Schools, Culinary Schools, Fashion Design</title>
	<meta name="description" content="The Art Institutes is America's Leader in creative education, offering postsecondary degrees in design, media arts, culinary, and fashion programs">
	<meta name="keywords" content="">
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="../css/default.css">
  </head>
<script language="JavaScript" TYPE="text/javascript">
function SwitchImg()
{ //start
  var rem, keep=0, store, obj, switcher=new Array, history=document.Data;
    for (rem=0; rem < (SwitchImg.arguments.length-2); rem+=3) {
    	store = SwitchImg.arguments[(navigator.appName == 'Netscape')?rem:rem+1];
    if ((store.indexOf('document.layers[')==0 && document.layers==null) ||
        (store.indexOf('document.all[')==0 && document.all==null))
         store = 'document'+store.substring(store.lastIndexOf('.'),store.length);
         obj = eval(store);
    if (obj != null) {
   	   switcher[keep++] = obj;
      switcher[keep++] = (history==null || history[keep-1]!=obj)?obj.src:history[keep];
      obj.src = SwitchImg.arguments[rem+2];
  } }
  document.Data = switcher;
} //end

function RestoreImg()
{ //start
  if (document.Data != null)
    for (var rem=0; rem<(document.Data.length-1); rem+=2)
      document.Data[rem].src=document.Data[rem+1];
} //end

{
alt0 = new Image();
alt0.src = "../images/dot.gif";

alt1 = new Image();
alt1.src = "images/navA01.gif";

alt2 = new Image();
alt2.src = "images/navA02.gif";

alt3 = new Image();
alt3.src = "images/navA03.gif";

alt4 = new Image();
alt4.src = "images/navA04.gif";

alt5 = new Image();
alt5.src = "images/navA05.gif";

alt6 = new Image();
alt6.src = "images/navA06.gif";

alt7 = new Image();
alt7.src = "images/navA07.gif";

graphic1= new Image();
graphic1.src = "images/right00.gif";
graphic1on = new Image();
graphic1on.src = "images/right01.gif";

graphic2= new Image();
graphic2.src = "images/right00.gif";
graphic2on = new Image();
graphic2on.src = "images/right02.gif";

graphic3= new Image();
graphic3.src = "images/right00.gif";
graphic3on = new Image();
graphic3on.src = "images/right03.gif";

graphic4= new Image();
graphic4.src = "images/right00.gif";
graphic4on = new Image();
graphic4on.src = "images/right04.gif";

graphic5= new Image();
graphic5.src = "images/right00.gif";
graphic5on = new Image();
graphic5on.src = "images/right05.gif";

graphic6= new Image();
graphic6.src = "images/right00.gif";
graphic6on = new Image();
graphic6on.src = "images/right06.gif";

graphic7= new Image();
graphic7.src = "images/right00.gif";
graphic7on = new Image();
graphic7on.src = "images/right07.gif";
}
function imageChange(imageID,imageName,imageID2,imageName2) {

{
document.images[imageID].src = eval(imageName + ".src");
document.images[imageID2].src = eval(imageName2 + ".src");
}
}

</script>
  <body bgcolor="#ffffff" topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
<?php
//while (list($key,$value) = each ($_POST)) { print $key." ".$value." <br>"; }
if (($_POST['stage']==1) && ($focus==0)) {
?>
	<form name="card_form" method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
	<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="290" valign="top"><img src="../images/logo.gif" width="316" height="66"></td>
		<td width="490" valign="top"><img src="../images/banner01.gif" width="464" height="66"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="2" background="images/nav01.gif" valign="top"><img src="../images/dot.gif" width="780" height="24" name="myimg1" border="0" usemap="#nav"></td>
		<map name="nav">
		<area shape=rect coords="710,0 780,24" href="../index.html" onMouseOut="RestoreImg()" onMouseOver="SwitchImg('document.myimg1','document.myimg1','../images/nav00.gif')">
		</map>
	  </tr>
	</table>
	<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="640" colspan="3" class="main10" valign="top"><img src="images/title02c.gif" width="640" height="20" border="0"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Name</b></td>
		<td width="20" class="main13" valign="top">&nbsp;</td>
		<td width="510" class="main12" valign="top"><?php hiddenel(name); ?></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Address</td>
		<td width="20" class="main13" valign="top">&nbsp;</td>
		<td width="510" class="main12" valign="top"><?php hiddenel(address); ?></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>City/State/Zip</b></td>
		<td width="20" class="main13" valign="top">&nbsp;</td>
		<td width="510" class="main12" valign="top"><?php hiddenel(city); ?>, <?php hiddenel(state); ?> <?php hiddenel(zipcode); ?></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Email Address</b></td>
		<td width="20" class="main13" valign="top">&nbsp;</td>
		<td width="510" class="main12" valign="top"><?php hiddenel(email); ?></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Phone</b></td>
		<td width="20" class="main13" valign="top">&nbsp;</td>
		<td width="510" class="main12" valign="top"><?php hiddenel(phone); ?></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Graduation Date</b></td>
		<td width="20" class="main13" valign="top">&nbsp;</td>
		<td width="510" class="main12" valign="top"><?php hiddenel(month); ?>/<?php hiddenel(day); ?>/<?php hiddenel(year); ?></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Program of interest</td>
		<td width="20" valign="top"><img src="../images/dot.gif" width="20" height="1"></td>
		<td width="510" class="main12" valign="top"><?php hiddenel(interest); ?></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Friend's name</b></td>
		<td width="20" class="main13" valign="top">&nbsp;</td>
		<td width="510" class="main12" valign="top"><?php hiddenel(f_name); ?>, <?php hiddenel(f_phone); ?>, <?php hiddenel(f_email); ?></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="6" valign="top"><img src="../images/dot.gif" width="1" height="20"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" valign="top"><img src="../images/dot.gif" width="110" height="1"></td>
		<td width="20" valign="top"><img src="../images/dot.gif" width="20" height="1"></td>
		<td width="510" class="main12" valign="top">
		  <input type="checkbox" name="mail"> Send me my complimentary business cards and information about the Art Institute of California-Los Angeles.<br><br>
		  <input type="checkbox" name="call"> By submitting my information, I invite the Assistant Director of Admissions to call me.
		  This information will not be resold and is solely for the purposes of the Art Institute of California-Los Angeles.</td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="5" valign="top"><img src="../images/dot.gif" width="1" height="40"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" valign="top"><input type="image" name="change" src="images/button_change.gif" width="108" height="37" border="0" value="finish"></td>
		<td width="20" valign="top"><img src="../images/dot.gif" width="20" height="1"></td>
		<td width="510" class="main12" valign="top"><input type="image" name="finish" src="images/button04.gif" width="124" height="37" border="0" value="finish"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="6" valign="top"><img src="../images/dot.gif" width="1" height="40"></td>
	  </tr>
	</table>
	<input type="hidden" name="stage" value="2">
	<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="780" bgcolor="000000" class="footer" valign="top">&copy;2004 Art Institute of California-Los Angeles. All rights reserved.
		  <A HREF='javascript:open_new_win("../privacy.html?intBack=1")' class="a1"><b>Privacy Statement</b></A> |
		  <A HREF="../download.html" class="a1"><b>Downloads</b></A>
		</td>
	  </tr>
	</table>
	</form>
<?php
//
// End of stage 2
//
	}
// Start of stage 3
elseif (($_POST['stage']==2) && (isset($_POST['finish_x']))) {
?>
		<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="290" valign="top"><img src="../images/logo.gif" width="316" height="66"></td>
		<td width="490" valign="top"><img src="../images/banner01.gif" width="464" height="66"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="2" background="images/nav01.gif" valign="top"><img src="../images/dot.gif" width="780" height="24" name="myimg1" border="0" usemap="#nav"></td>
		<map name="nav">
		<area shape=rect coords="710,0 780,24" href="../index.html" onMouseOut="RestoreImg()" onMouseOver="SwitchImg('document.myimg1','document.myimg1','../images/nav00.gif')">
		</map>
	  </tr>
	</table>
	<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="640" class="main10" valign="top"><img src="images/title03.gif" width="640" height="20" border="0"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="640" class="main12" valign="top"><b>The Art Institute of California-Los Angeles has received your request.</b><br><br>
		 <?php if (isset($_POST['mail'])) { print "<b>Your</b> ".$_POST['interest']." <b>business cards will arrive in 4-6 weeks.</b><br>"; } ?>
		  <img src="../images/dot.gif" width="640" height="30"><br>
		  <a href="http://www.aicala.artinstitutes.edu/" target="_blank"><img src="images/button03.gif" width="210" height="37" border="0"></a><br>
		  <img src="../images/dot.gif" width="1" height="150"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="3" valign="top"><img src="../images/dot.gif" width="1" height="40"></td>
	  </tr>
	</table>
	<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="780" bgcolor="000000" class="footer" valign="top">&copy;2004 Art Institute of California-Los Angeles. All rights reserved.
		  <A HREF='javascript:open_new_win("../privacy.html?intBack=1")' class="a1"><b>Privacy Statement</b></A> |
		  <A HREF="../download.html" class="a1"><b>Downloads</b></A>
		</td>
	  </tr>
	</table>
<?php
//	
// Store information in database
//
include('connect.inc');
$table="form";
$grad_date=$_POST['month']."/".$_POST['day']."/".$_POST['year'];
$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$interest=$_POST['interest'];
$f_name=$_POST['f_name'];
$f_email=$_POST['f_email'];
$f_phone=$_POST['f_phone'];
$tstamp=date("m/d/Y h:i A"); 
$sql_insert="insert into $table (name,address,city,state,zipcode,email,phone,grad_date,interest,f_name,f_email,f_phone,tstamp)
			values ('$name','$address','$city','$state','$zipcode','$email','$phone','$grad_date','$interest','$f_name','$f_email','$f_phone','$tstamp')";
$submit_app=mssql_query($sql_insert,$link);	
//
// End of stage 3
	}
//
// Start stage 1
//
elseif ((isset($_POST['interest'])) && ($_POST['interest']!="none")) {
?>
	<form name="card_form" method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
	<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="290" valign="top"><img src="../images/logo.gif" width="316" height="66"></td>
		<td width="490" valign="top"><img src="../images/banner01.gif" width="464" height="66"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="2" background="images/nav01.gif" valign="top"><img src="../images/dot.gif" width="780" height="24" name="myimg1" border="0" usemap="#nav"></td>
		<map name="nav">
		<area shape=rect coords="710,0 780,24" href="../index.html" onMouseOut="RestoreImg()" onMouseOver="SwitchImg('document.myimg1','document.myimg1','../images/nav00.gif')">
		</map>
	  </tr>
	</table>
	<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="640" colspan="4" class="main10" valign="top"><img src="images/title02.gif" width="640" height="20" border="0"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	   <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="640" colspan="3" class="main14" valign="top" align="center"><?php if ($focus>0) { print $error_message; } else { print "&nbsp;"; } ?></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Name</b></td>
		<td width="20" class="main13" valign="top">*</td>
		<td width="220" valign="top"><?php formel(name,30,40); ?></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Address</td>
		<td width="20" class="main13" valign="top">*</td>
		<td width="220" valign="top"><?php formel(address,30,40); ?></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>City</b></td>
		<td width="20" class="main13" valign="top">*</td>
		<td width="220" valign="top"><?php formel(city,30,40); ?></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>State</b></td>
		<td width="20" class="main13" valign="top">*</td>
		<td width="220" class="main12" valign="top"><?php formel(state,5,40); ?>&nbsp; &nbsp; &nbsp; &nbsp;
		  <b>Zip</b>&nbsp&nbsp; <font class="main13">*&nbsp;</font> &nbsp;<?php formel(zipcode,5,40); ?></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Email Address</b></td>
		<td width="20" class="main13" valign="top">*</td>
		<td width="220" valign="top"><?php formel(email,30,40); ?></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Phone</b></td>
		<td width="20" class="main13" valign="top">*</td>
		<td width="220" valign="top"><?php formel(phone,30,40); ?></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Graduation Date</b><br>MM/DD/YYYY</td>
		<td width="20" class="main13" valign="top">*</td>
		<td width="220" valign="top"><?php formel(month,2,2); ?>&nbsp;
		 <?php formel(day,2,2); ?>&nbsp;
		 <?php formel(year,4,4); ?></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Program of interest</td>
		<td width="20" valign="top"><img src="../images/dot.gif" width="20" height="1"></td>
		<td width="220" valign="top"><select align="top" class="rightmodule" NAME="interest">
		  <option selected><?php print $_POST['interest']; ?></option>
		  <option value="Culinary Arts/Management">Culinary Arts/Management</option>
		  <option value="Game Art & Design">Game Art & Design</option>
		  <option value="Graphic Design">Graphic Design</option>
		  <option value="Interior Design">Interior Design</option>
		  <option value="Media Arts and Animation">Media Arts and Animation</option>
		  <option value="Multimedia & Web Design">Multimedia & Web Design</option>
		  <option value="Video Production">Video Production</option>
		  </select></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="6" valign="top"><img src="../images/dot.gif" width="1" height="20"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" valign="top"><img src="../images/dot.gif" width="110" height="1"></td>
		<td width="20" valign="top"><img src="../images/dot.gif" width="20" height="1"></td>
		<td width="220" class="main12" valign="top"><b>Tell a friend</b></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Friend's name</b></td>
		<td width="20" valign="top"><img src="../images/dot.gif" width="20" height="1"></td>
		<td width="220" valign="top"><?php formel(f_name,30,40); ?></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Email</b></td>
		<td width="20" valign="top"><img src="../images/dot.gif" width="20" height="1"></td>
		<td width="220" valign="top"><?php formel(f_email,30,40); ?></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" class="main12" valign="top"><b>Phone</b></td>
		<td width="20" valign="top"><img src="../images/dot.gif" width="20" height="1"></td>
		<td width="220" valign="top"><?php formel(f_phone,30,40); ?></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="6" valign="top"><img src="../images/dot.gif" width="1" height="40"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="110" valign="top"><img src="../images/dot.gif" width="110" height="1"></td>
		<td width="20" valign="top"><img src="../images/dot.gif" width="20" height="1"></td>
		<td width="220" class="main12" valign="top"><input type="image" name="submit" src="images/button04.gif" width="124" height="37" border="0" value=""></td>
		<td width="290" valign="top"><img src="../images/dot.gif" width="290" height="1"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="6" valign="top"><img src="../images/dot.gif" width="1" height="40"></td>
	  </tr>
	</table>
	<input type="hidden" name="stage" value="1">
	<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="780" bgcolor="000000" class="footer" valign="top">&copy;2004 Art Institute of California-Los Angeles. All rights reserved.
		  <A HREF='javascript:open_new_win("../privacy.html?intBack=1")' class="a1"><b>Privacy Statement</b></A> |
		  <A HREF="../download.html" class="a1"><b>Downloads</b></A>
		</td>
	  </tr>
	</table>
	</form>
	<?php
	if ($focus>0) {
		print "<script>document.forms[0].elements['".$ffield."'].focus();</script>\n";
		}
//
// End of stage 1
//
	}
	
//
// Start stage 0
//
else {
?>
	<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="290" valign="top"><img src="../images/logo.gif" width="316" height="66"></td>
		<td width="490" valign="top"><img src="../images/banner01.gif" width="464" height="66"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="2" background="images/nav.gif" valign="top"><img src="../images/dot.gif" width="780" height="24" name="myimg1" border="0" usemap="#nav"></td>
		<map name="nav">
		<area shape=rect coords="710,0 780,24" href="../index.html" onMouseOut="RestoreImg()" onMouseOver="SwitchImg('document.myimg1','document.myimg1','../images/nav00.gif')">
		</map>
	  </tr>
	</table>
	<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="640" colspan="3" class="main10" valign="top"><img src="images/title01.gif" width="640" height="20" border="0"></td>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
		<td width="420" background="images/navA.gif" valign="top"><img src="../images/dot.gif" width="420" height="380" name="navA" border="0" usemap="#navA"></td>
		  <map name="navA">
		  <area shape=circle coords="30,30,26" href="#" onMouseOver="imageChange('navA','alt1','right','graphic1on')" onMouseOut="imageChange('navA','alt0','right','graphic1')">
		  <area shape=circle coords="90,30,26" href="#" onMouseOver="imageChange('navA','alt2','right','graphic2on')" onMouseOut="imageChange('navA','alt0','right','graphic2')">
		  <area shape=circle coords="150,30,26" href="#" onMouseOver="imageChange('navA','alt3','right','graphic3on')" onMouseOut="imageChange('navA','alt0','right','graphic3')">
		  <area shape=circle coords="210,30,26" href="#" onMouseOver="imageChange('navA','alt4','right','graphic4on')" onMouseOut="imageChange('navA','alt0','right','graphic4')">
		  <area shape=circle coords="270,30,26" href="#" onMouseOver="imageChange('navA','alt5','right','graphic5on')" onMouseOut="imageChange('navA','alt0','right','graphic5')">
		  <area shape=circle coords="330,30,26" href="#" onMouseOver="imageChange('navA','alt6','right','graphic6on')" onMouseOut="imageChange('navA','alt0','right','graphic6')">
		  <area shape=circle coords="390,30,26" href="#" onMouseOver="imageChange('navA','alt7','right','graphic7on')" onMouseOut="imageChange('navA','alt0','right','graphic7')">
		  <area shape=rect coords="9,59 50,83" href="#" onMouseOut="RestoreImg()" onMouseOver="SwitchImg('document.navA','document.navA','images/navA011.gif')">
		</map>
		</td>
		<td width="20" valign="top"><img src="../images/dot.gif" width="20" height="1"></td>
		<form action="<?php print $_SERVER['PHP_SELF'] ?>" method="post" name="nav">
		<td width="200" class="main14" valign="top"><img src="images/right00.gif" width="200" height="240" name="right" border="0"><br>
		  <?php if ($_POST['interest']=="none") { print "Please select a Program"; } else { print "<br>"; } ?>
		  <select align="top" class="rightmodule" NAME="interest" onChange="document.forms.nav.submit();">>
		  <option value="none">-- Programs</option>
		  <option value="Culinary Arts/Management">Culinary Arts/Management</option>
		  <option value="Game Art & Design">Game Art & Design</option>
		  <option value="Graphic Design">Graphic Design</option>
		  <option value="Interior Design">Interior Design</option>
		  <option value="Media Arts and Animation">Media Arts and Animation</option>
		  <option value="Multimedia & Web Design">Multimedia & Web Design</option>
		  <option value="Video Production">Video Production</option>
		  </select><br>
		  <img src="../images/dot.gif" width="1" height="10"><br>
		  <input type="image" name="submit" src="images/button01.gif" width="95" height="37" border="0" value="">
		</td>
		</form>
		<td width="70" valign="top"><img src="../images/dot.gif" width="70" height="1"></td>
	  </tr>
	  <tr>
		<td width="780" colspan="5" valign="top"><img src="../images/dot.gif" width="1" height="40"></td>
	  </tr>
	</table>
	<table width="780" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="780" bgcolor="000000" class="footer" valign="top">&copy;2004 Art Institute of California-Los Angeles. All rights reserved.
		  <A HREF='javascript:open_new_win("../privacy.html?intBack=1")' class="a1"><b>Privacy Statement</b></A> |
		  <A HREF="../download.html" class="a1"><b>Downloads</b></A>
		</td>
	  </tr>
	</table>
<?php
//
// End of stage 0
//
}
?>
</body>
</html>
