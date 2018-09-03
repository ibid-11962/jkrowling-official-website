function openSite(lang)
{
	try
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
	}
	catch(e)
	{
		// redirect to the blocked page...
		top.location = lang + "/popupblocked.html";
		return;
	}

	// redirect to the thank you page...
	top.location = lang + "/thankyou.html";
}


function openAccessibleSite(screenreader)
{
	try
	{
		if (screenreader)
		{
			var pg = "?sr=y";
		}
		else
		{
			var pg = "";
		}
		// open the window...
		var win = window.open("accessible/en/" + pg, "accessiblesitewin", "width="+screen.availWidth+",height="+screen.availHeight+",top=0,left=0,resizable=yes,status=yes");
		
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
	catch(e)
	{
	}
}
