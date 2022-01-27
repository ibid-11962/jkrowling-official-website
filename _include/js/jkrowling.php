<?php
header('Content-Type: text/javascript');
?>
/***************************************

	Lightmaker.com
	JKRowling - Common Javascript
		
***************************************/

// Write swf
function writeswf(flashmovie,width,height,flashvars,transparent)
{
	document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="'+width+'" height="'+height+'" align="top">');
	document.write('<param name="movie" value="'+flashmovie+'">');
	document.write('<param name="quality" value="high">');
	document.write('<param name="menu" value="false">');
	if (typeof(flashvars)=="string")
	{
		flashvars+="&jsenabled=yes"
	}
	else
	{
		flashvars="jsenabled=yes";
	}

<?php $vista_gadget = (file_exists("../../config.ini"))?(parse_ini_file("../../config.ini")["vista_gadget"]):"0"; ?>
<?php if ($vista_gadget == 0) {?>	
	if (navigator.userAgent.toLowerCase().indexOf("windows nt 6.0")!=-1)
<?php } if ($vista_gadget != 2) {?>	
	{
		flashvars+="&vista=yes";
	}
<?php } if ($vista_gadget == 0) {?>	
<?php } ?>	
	document.write('<param name="flashvars" value="'+flashvars+'">');
	if (transparent==true)
	{
		document.write('<param name="wmode" value="transparent">');
	}
	document.write('<embed src="'+flashmovie+'" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="'+width+'" height="'+height+'" align="top" menu="false" flashvars="'+flashvars+'"');
	if (transparent==true)
	{
		document.write(' wmode="transparent"');
	}
	document.write('>');
	document.write('</embed>');
	document.write('</object>');
}

// Popup Window (Centred)
function popup(url,winname,w,h,feat)
{
	if (!(isNaN(w) || isNaN(h)))
	{
		var x=parseInt((screen.width-w)/2);
		var y=parseInt((screen.height-h)/2);
		if (x<0)	x=0;
		if (y<0)	y=0;
		
		if (feat!=null && feat!="")
		{
			feat=","+feat;
		}
		else
		{
			feat="";
		}
		feat="left="+x+",top="+y+",width="+w+",height="+h+feat;
	}
	window.open(url,winname,feat);
}

// Popup Window (FullScreen)
function popupFullScreen(url,winname,lang)
{
	// open the window...
	var win = window.open(url+"?lang="+lang, "winname", "width="+screen.availWidth+",height="+screen.availHeight+",top=0,left=0,resizable=yes,status=yes");

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
}

// Popup Trace Window
function popupTraceWindow()
{
}

// Cancel Event
function noselecta()
{
	return false;
}

// No right click menu
if (document.all)
{
	document.oncontextmenu=noselecta;
	document.onselectstart=noselecta;
}
