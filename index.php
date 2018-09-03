<?php $website_version = (file_exists("config.ini"))?(parse_ini_file("config.ini")["website_version"]):"4"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
<title>J.K.Rowling Official Site - Harry Potter and more</title>
<meta name="DESCRIPTION" content="Jump aboard the Hogwart Express to come on a fantastic adventure at the official JK Rowling Website. See what's on my desk.  Read all about me, JK Rowling, and what inspired and still inspires the Harry Potter series.  Read the very latest news. See what the latest rumours are and get all the gossip. There are hidden pieces of Potterania hidden all around the site.  Finding these gains you rewards to store in your scrapbook.  Get answers to your Frequently Asked Questions. The non-Flash area aims to deliver all the information to W3C AA priority standards. ">
<meta name="KEYWORDS" content="JK Rowling, Harry Potter, the philosophers stone, the chamber of secrets, the goblet of fire, hogwarts school of witchcraft, W3C AA priority standard,Prisoner of Azkaban, Goblet of Fire, Order of the Phoenix, The Sorcerers Stone, half blood prince">
<meta name="author" content="Site design and technology by Lightmaker.com">
<!-- http://www.lightmaker.com -->
<!-- tel: +44 (0)1892 615015 -->
<!-- code copyright Lightmaker 2011 -->
<meta http-equiv="pragma" content="no-cache">
<meta name="language" content="English">
<meta name="charset" content="ISO-8859-1">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="expires" content="Never">
<meta name="robots" content="Index, Follow">
<meta name="revisit-after" content="7 Days">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="icon" href="favicon.ico">

	<?php if ($website_version < 2){ ?>

<link rel="stylesheet" href="_include/css/style.css" type="text/css">
<script Language="JavaScript" src="_include/js/common.js"></script>
<script Language="JavaScript">

function openSite(lang)
{
	// open the window...
	var win = window.open(lang + "/", lang + "sitewin", "width="+screen.availWidth+",height="+screen.availHeight+",top=0,left=0,resizable=yes,status=yes");

	//resize this window...
	if (document.all) 
	{
		win.resizeTo(screen.availWidth,screen.availHeight);
	}
	else if (document.layers||document.getElementById) 
	{
		if (win.outerHeight<screen.availHeight||win.outerWidth<screen.availWidth)
		{
			win.outerHeight = screen.availHeight;
			win.outerWidth = screen.availWidth;
		}	
	}

	// redirect to the thank you page...
	top.location = lang + "/thankyou.html";
}

</script>
</head>
<body bgcolor="#DEEBCE" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" background="images/tile.jpg">
<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
<tr>
<td align="center" valign="middle"><table cellpadding="0" cellspacing="0" border="0">
<tr>
<td align="center"><a href="textonly/en">Text Only Version</a></td>
</tr>
<tr>
		<?php if ($website_version == 0) { ?>
<td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="780" height="520" align="top">
<param name="movie" value="f7b3qash/language_select_0.swf">
<param name="quality" value="high">
<param name="menu" value="false">
<param name="wmode" value="transparent">
<embed src="f7b3qash/language_select_0.swf" menu="false" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="780" height="520" align="top">
</embed>
</object></td>
		<?php } else {?>
<td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="780" height="406" align="top">
<param name="movie" value="f7b3qash/language_select_1.swf">
<param name="quality" value="high">
<param name="menu" value="false">
<param name="wmode" value="transparent">
<embed src="f7b3qash/language_select_1.swf" menu="false" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="780" height="406" align="top">
</embed>
</object></td>
</tr>
<tr>
<td align="center">All rights reserved JK Rowling. Signature tm JK Rowling<br>Harry Potter and related names tm &amp; &copy; Warner Bros. Entertainment Inc. 2004<br><br><a href="http://www.lightmaker.com/" target="_blank">Site by Lightmaker</a></td>
		<?php } ?>
</tr>

</table></td>
</tr>
</table>
</body>
</html>

	<?php } else { ?>
	
<link rel="stylesheet" href="accessible/_include/css/style.css" type="text/css">
<script Language="JavaScript" type="text/javascript" src="_include/js/jkrowling.js"></script>
<script Language="JavaScript" type="text/javascript" src="_include/js/index.js"></script>
</head>
<body bgcolor="#DBE5CD" background="images/tile.jpg" style="color:#373737; margin:0px;">
<table cellpadding="0" cellspacing="0" border="0" style="width:100%; height:100%;">
<tr>
<td align="center" valign="middle"><table cellpadding="0" cellspacing="0" border="0" style="width:900px; height:570px;">
<tr>
<td height="50" valign="bottom" align="center"><img src="images/logo.jpg" width="130" height="50" border="0" alt="J.K.Rowling Official Site"></td>
</tr>
<tr>
<td height="140"><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="900" height="140" align="top" title="J K Rowling Official Site">
<param name="movie" value="f7b3qash/accessibility_button.swf">
<param name="quality" value="high">
<param name="menu" value="false">
<embed src="f7b3qash/accessibility_button.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="900" height="140" align="top" menu="false">
</embed>
</object></noscript><script language="JavaScript" type="text/javascript">
<!--
writeswf("f7b3qash/accessibility_button.swf",900,140);
//-->
</script></td>
</tr>
<tr>
<td align="center" height="27"><table cellpadding="0" cellspacing="0" border="0" style="width:864px; height:27px;">
<tr>
<td width="144" align="center"><a href="textonly/en/">Text Only Version</a></td>
<td width="144" align="center"><a href="textonly/fr/">Version textuelle</a></td>
<td width="144" align="center"><a href="textonly/de/">Nur-Text-Version</a></td>
<td width="144" align="center"><a href="textonly/it/">Versione "solo testo"</a></td>
<td width="144" align="center"><a href="textonly/es/">Versión sólo texto</a></td>
<td width="144" align="center">&nbsp;</td>
</tr>
</table></td>
</tr>
<tr>
<td height="212"><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="900" height="212" align="top" title="J K Rowling Official Site">
<param name="movie" value="f7b3qash/language_menu.swf">
<param name="quality" value="high">
<param name="menu" value="false">
<embed src="f7b3qash/language_menu.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="900" height="212" align="top" menu="false">
</embed>
</object></noscript><script language="JavaScript" type="text/javascript">
<!--
writeswf("f7b3qash/language_menu.swf",900,212);
//-->
</script></td>
</tr>
<tr>
<td height="70" align="center" style="padding-top:3px;">&copy; 2006 Warner Bros. Ent.<br>
Harry Potter Publishing Rights &copy; J.K.R.<br>
<br>
Harry Potter characters, names and related indicia are trademarks of and &copy; Warner Bros. Ent.  All Rights Reserved.<br>
<br>
<a href="http://www.lightmaker.com/" target="_blank">Site by Lightmaker</a></td>
</tr>
</table></td>
</tr>
</table>
</body>
</html>
	<?php } ?>