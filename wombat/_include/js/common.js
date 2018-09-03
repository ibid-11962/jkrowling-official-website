/***************************************

	Lightmaker.com
	JKRowling - Common Javascript
		
***************************************/

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
	popup("../f7b3qash/traceWindow.htm","traceWindow",400,600,"resizable");
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
