<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
	<head> 
		<meta name="description" content="MyEpisodes is your personal TV assistant with alot of loved features including episodes checklist, rss feeds, automatic state view, calendar, irc bots and more. You'll love this website as you will travel through its features. "> 
		<meta name="keywords" content="SeriesWatch, Series Watch, MyEpisodes, My Episodes, TvTome, TV.com, TV, tv, assistant, series, irc, tracker, efnet, love, calendar, my episodes, tvtome, iceman, hostile"> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
		<script language="javascript" type="text/javascript" src="/clientscripts/scripts.js"></script> 
 
				
		<title>MyEpisodes.com: SeriesWatch</title> 
		<link rel="stylesheet" href="/myepisodes.css" type="text/css"> 
		<link rel="shortcut icon" href="/favicon.ico" /> 
				
		<script language="javascript" type="text/javascript"> 
				
			function MenuText(sectionName)
			{
				if (sectionName == 'myshows')
				{
					getElmById('menuText').innerHTML = '<a href="/shows.php?type=manage">Change My Shows List</a> :: <a href="/views.php">Episodes List</a> :: <a href="/myshows.php">All-In-One!</a> :: <a href="/cal.php">Calendar</a> :: <a href="/views.php?type=quickcheck">Quick Check</a> :: <a href="/life_wasted.php">Time I\'ve wasted</a> :: <a href="/shows.php">All Shows</a> :: <a href="/search.php">Search Shows</a>';
				}
				else if (sectionName == 'system')
				{
					getElmById('menuText').innerHTML = '<a href="/bug.php">Bug System</a> :: <a href="/stats.php?type=site">Monthly Stats</a> :: <a href="/stats.php?type=general">Today\'s Stats</a> :: <a href="/stats.php?type=today">Airing Today</a> :: <a href="/stats.php?type=topshows">Best Shows</a>';
				}
				else if (sectionName == 'profile')
				{
					getElmById('menuText').innerHTML = '<a href="/cp.php">Control Panel</a> :: <a href="/rsshelp.php">RSS Feeds</a> :: <a href="/mysig.php">My Signature</a> :: <a href="/forum/viewtopic.php?t=19">Request a Feature</a>';
				}
				else if (sectionName == 'personal')
				{
									}
			}
		</script> 
	</head> 
	<body> 
		<table align="center"> 
		<tr> 
			<td width="50%" style="vertical-align: top;"> 
			</td> 
			<td width="760px" style="vertical-align: top;"> 
	<div id="divContainer"> 
		<div id="divAboveMenu"> 
			<div id="tag"> 
				<a href="login.php">Change Login</a> /
<a href="/login.php?action=Logout"><strong>kyze</strong> (Logout)</a>				<br> 
				<br> 
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="float: left; margin: 0; padding: 0;"><input type="hidden" name="cmd" value="_s-xclick"><input type="image" src="/img/donateUSD.jpg" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!"><input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----"></form> 
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin: 0; padding: 0;"><input type="hidden" name="cmd" value="_s-xclick"><input type="image" src="/img/donateEUR.jpg" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!"><input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----"></form> 
			</div> 
			<div style="clear: right; float: right; margin-top: 5px; margin-right: 3px;"> 
			</div> 
			<a href="/frontpage.php"><img src="/img/myepisodes_logo.jpg" alt="logo" border="0"></a> 
		</div> 
		<div id="divMenu"> 
		<ul id="navlist"> 
			<li class="mmli"> 
				<a href="/frontpage.php"><img border="0" src="/img/menu_top_home.jpg"></a> 
			</li> 
			<li class="mmli" onclick="javascript:MenuText('myshows');"> 
				<img border="0" src="/img/menu_top_myshows.jpg"> 
			</li> 
			<li class="mmli" onclick="javascript:MenuText('profile');"> 
				<img border="0" src="/img/menu_top_profile.jpg"> 
			</li> 
					<li class="mmli" onclick="javascript:MenuText('system');"> 
				<img border="0" src="/img/menu_top_system.jpg"> 
			</li> 
			<li class="mmli"> 
				<a href="/forum/"><img border="0" src="/img/menu_top_forum.jpg"></a> 
			</li> 
			<li class="mmli"> 
				<a href="/donate.php"><img border="0" src="/img/menu_top_donate.jpg"></a> 
			</li> 
		</ul></div> 
		<div id="menuText"> 
		</div> 
		<script language="javascript"> 
			MenuText('myshows');
		</script> 
		<br> 
<img src="img/header_series_watch.jpg"><br><br> 
	<form method="POST"> 
		<table style="border: 1px black solid;" cellspacing="0" cellpadding="6"> 
			<tr class="header" align="center"> 
				<td style="border-bottom: solid 1px black;"> 
					Acquire
				</td> 
				<td style="border-bottom: solid 1px black;"> 
					Watch
				</td> 
				<td style="border-bottom: solid 1px black;"> 
					Coming
				</td> 
				<td style="border-bottom: solid 1px black;"> 
					N/A
				</td> 
				<td style="border-bottom: solid 1px black;"> 
					Ignored
				</td> 
				<td style="border-bottom: solid 1px black;"> 
					Show Selected
				</td> 
			</tr> 
			<tr align="center"> 
				<td> 
					<input type="checkbox" name="status_filter[]" value="1" checked> 
				</td> 
				<td> 
					<input type="checkbox" name="status_filter[]" value="2" checked> 
				</td> 
				<td> 
					<input type="checkbox" name="status_filter[]" value="4" checked> 
				</td> 
				<td> 
					<input type="checkbox" name="status_filter[]" value="8" checked> 
				</td> 
				<td> 
					<input type="checkbox" name="status_filter[]" value="16" > 
				</td> 
				<td> 
					<input type="submit" name="action" value="Filter"> 
				</td> 
			</tr> 
		</table> 
	</form> 
	<br> 
	
		<table align="center" style="border: solid 1px black;" cellpadding="7" cellspacing="0" width="100%"> 
			<tr align="center" class="header"> 
				<td style="border-bottom: solid 1px black;"> 
					/
				</td> 
				<td style="border-bottom: solid 1px black;"> 
					Series Name
				</td> 
				<td style="border-bottom: solid 1px black;"> 
					Last Watched
				</td> 
				<td style="border-bottom: solid 1px black;"> 
					Todo
				</td> 
				<td style="border-bottom: solid 1px black;"> 
					Relevant Episode
				</td> 
				<td style="border-bottom: solid 1px black;"> 
					Operations
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=86&status=0"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Greys_Anatomy" target="_blank" class="shows">Grey's Anatomy</A> 
				</td> 
				<td> 
					<B> 
S06E17					</B> 
				</td> 
				<td> 
					<img src="img/icon_acquire.gif">				</td> 
				<td> 
					<B>S07E06 - 28-Oct-2010</B><br><A href="http://www.tvrage.com/Greys_Anatomy/episodes/1064984395/07x06" target="_blank"> These Arms of Mine</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=86&season=7&episode=6&seen=0" style="font-size: xx-small;">ACQUIRED</A> / <A href="myshows.php?action=Update&showid=86&season=7&episode=6&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Grey\'s Anatomy?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=86')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=86" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=86" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=6668&status=0"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-25704" target="_blank" class="shows">Outsourced</A> 
				</td> 
				<td> 
					<B> 
S01E05					</B> 
				</td> 
				<td> 
					<img src="img/icon_acquire.gif">				</td> 
				<td> 
					<B>S01E06 - 28-Oct-2010</B><br><A href="http://www.tvrage.com/Outsourced/episodes/1064987417/01x06" target="_blank"> Bolloween</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=6668&season=1&episode=6&seen=0" style="font-size: xx-small;">ACQUIRED</A> / <A href="myshows.php?action=Update&showid=6668&season=1&episode=6&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Outsourced?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=6668')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=6668" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=6668" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=2219&status=0"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Private_Practice" target="_blank" class="shows">Private Practice</A> 
				</td> 
				<td> 
					<B> 
S03E14					</B> 
				</td> 
				<td> 
					<img src="img/icon_acquire.gif">				</td> 
				<td> 
					<B>S04E06 - 28-Oct-2010</B><br><A href="http://www.tvrage.com/Private_Practice/episodes/1064985567/04x06" target="_blank"> All In The Family</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=2219&season=4&episode=6&seen=0" style="font-size: xx-small;">ACQUIRED</A> / <A href="myshows.php?action=Update&showid=2219&season=4&episode=6&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Private Practice?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=2219')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=2219" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=2219" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=1115&status=0"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/The_Big_Bang_Theory" target="_blank" class="shows">The Big Bang Theory</A> 
				</td> 
				<td> 
					<B> 
S04E05					</B> 
				</td> 
				<td> 
					<img src="img/icon_acquire.gif">				</td> 
				<td> 
					<B>S04E06 - 28-Oct-2010</B><br><A href="http://www.tvrage.com/The_Big_Bang_Theory/episodes/1064985563/04x06" target="_blank"> The Irish Pub Formulation</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=1115&season=4&episode=6&seen=0" style="font-size: xx-small;">ACQUIRED</A> / <A href="myshows.php?action=Update&showid=1115&season=4&episode=6&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: The Big Bang Theory?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=1115')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=1115" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=1115" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=834&status=0"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/The_Office" target="_blank" class="shows">The Office</A> 
				</td> 
				<td> 
					<B> 
S07E05					</B> 
				</td> 
				<td> 
					<img src="img/icon_acquire.gif">				</td> 
				<td> 
					<B>S07E06 - 28-Oct-2010</B><br><A href="http://www.tvrage.com/The_Office/episodes/1064985565/07x06" target="_blank"> Costume Contest</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=834&season=7&episode=6&seen=0" style="font-size: xx-small;">ACQUIRED</A> / <A href="myshows.php?action=Update&showid=834&season=7&episode=6&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: The Office?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=834')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=834" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=834" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=3370&status=0"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-18682" target="_blank" class="shows">Sanctuary (US)</A> 
				</td> 
				<td> 
					<B> 
S01E13					</B> 
				</td> 
				<td> 
					<img src="img/icon_acquire.gif">				</td> 
				<td> 
					<B>S03E03 - 29-Oct-2010</B><br><A href="http://www.tvrage.com/Sanctuary/episodes/1064985572/03x03" target="_blank"> Bank Job</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=3370&season=3&episode=3&seen=0" style="font-size: xx-small;">ACQUIRED</A> / <A href="myshows.php?action=Update&showid=3370&season=3&episode=3&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Sanctuary (US)?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=3370')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=3370" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=3370" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=323&status=0"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Supernatural" target="_blank" class="shows">Supernatural</A> 
				</td> 
				<td> 
					<B> 
S06E01					</B> 
				</td> 
				<td> 
					<img src="img/icon_acquire.gif">				</td> 
				<td> 
					<B>S06E06 - 29-Oct-2010</B><br><A href="http://www.tvrage.com/Supernatural/episodes/1064978455/06x06" target="_blank"> You Can't Handle the Truth</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=323&season=6&episode=6&seen=0" style="font-size: xx-small;">ACQUIRED</A> / <A href="myshows.php?action=Update&showid=323&season=6&episode=6&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Supernatural?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=323')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=323" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=323" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=325&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Criminal_Minds" target="_blank" class="shows">Criminal Minds</A> 
				</td> 
				<td> 
					<B> 
S01E12					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S01E13 - 18-Jan-2006</B><br><A href="http://www.tvrage.com/Criminal_Minds/episodes/314912/01x13" target="_blank"> Poison</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=325&season=1&episode=13&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Criminal Minds?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=325')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=325" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=325" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=3&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/24" target="_blank" class="shows">24</A> 
				</td> 
				<td> 
					<B> 
S05E07					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S05E08 - 13-Feb-2006</B><br><A href="http://www.tvrage.com/24/episodes/310709/05x08" target="_blank"> Day 5: 2:00 P.M.-3:00 P.M.</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=3&season=5&episode=8&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: 24?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=3')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=3" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=3" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=3731&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-18175" target="_blank" class="shows">Wallander</A> 
				</td> 
				<td> 
					<B> 
-					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S01E01 - 30-Nov-2008</B><br><A href="http://www.tvrage.com/shows/id-18175/episodes/737722/01x01" target="_blank"> Sidetracked</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=3731&season=1&episode=1&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Wallander?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=3731')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=3731" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=3731" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=3920&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-19267" target="_blank" class="shows">Castle (2009)</A> 
				</td> 
				<td> 
					<B> 
-					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S01E01 - 09-Mar-2009</B><br><A href="http://www.tvrage.com/Castle/episodes/703445/01x01" target="_blank"> Flowers for Your Grave</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=3920&season=1&episode=1&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Castle (2009)?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=3920')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=3920" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=3920" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=3370&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-18682" target="_blank" class="shows">Sanctuary (US)</A> 
				</td> 
				<td> 
					<B> 
S01E13					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S02E01 - 09-Oct-2009</B><br><A href="http://www.tvrage.com/Sanctuary/episodes/784504/02x01" target="_blank"> End of Nights (1)</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=3370&season=2&episode=1&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Sanctuary (US)?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=3370')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=3370" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=3370" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=3213&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-18434" target="_blank" class="shows">Being Human (UK)</A> 
				</td> 
				<td> 
					<B> 
S01E06					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S02E01 - 10-Jan-2010</B><br><A href="http://www.tvrage.com/shows/id-18434/episodes/1064882888/02x01" target="_blank"> Series 2, Episode 1</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=3213&season=2&episode=1&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Being Human (UK)?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=3213')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=3213" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=3213" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=2219&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Private_Practice" target="_blank" class="shows">Private Practice</A> 
				</td> 
				<td> 
					<B> 
S03E14					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S03E15 - 18-Feb-2010</B><br><A href="http://www.tvrage.com/Private_Practice/episodes/1064899226/03x15" target="_blank"> 'Til Death Do Us Part</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=2219&season=3&episode=15&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Private Practice?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=2219')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=2219" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=2219" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=86&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Greys_Anatomy" target="_blank" class="shows">Grey's Anatomy</A> 
				</td> 
				<td> 
					<B> 
S06E17					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S06E18 - 25-Mar-2010</B><br><A href="http://www.tvrage.com/Greys_Anatomy/episodes/1064909225/06x18" target="_blank"> Suicide is Painless</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=86&season=6&episode=18&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Grey\'s Anatomy?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=86')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=86" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=86" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=1004&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Psych" target="_blank" class="shows">Psych</A> 
				</td> 
				<td> 
					<B> 
S04E16					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S05E01 - 14-Jul-2010</B><br><A href="http://www.tvrage.com/Psych/episodes/1064910596/05x01" target="_blank"> Romeo and Juliet and Juliet</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=1004&season=5&episode=1&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Psych?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=1004')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=1004" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=1004" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=6018&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-24787" target="_blank" class="shows">The Pillars Of The Earth</A> 
				</td> 
				<td> 
					<B> 
-					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S01E01 - 23-Jul-2010</B><br><A href="http://www.tvrage.com/The_Pillars_Of_The_Earth/episodes/1064939147/01x01" target="_blank"> Anarchy</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=6018&season=1&episode=1&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: The Pillars Of The Earth?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=6018')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=6018" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=6018" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=42&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Futurama" target="_blank" class="shows">Futurama</A> 
				</td> 
				<td> 
					<B> 
S06E11					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S06E12 - 02-Sep-2010</B><br><A href="http://www.tvrage.com/Futurama/episodes/1064943030/06x12" target="_blank"> The Mutants Are Revolting</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=42&season=6&episode=12&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Futurama?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=42')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=42" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=42" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=2298&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Gossip_Girl" target="_blank" class="shows">Gossip Girl</A> 
				</td> 
				<td> 
					<B> 
S03E22					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S04E01 - 13-Sep-2010</B><br><A href="http://www.tvrage.com/Gossip_Girl/episodes/1064950958/04x01" target="_blank"> Belles de Jour</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=2298&season=4&episode=1&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Gossip Girl?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=2298')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=2298" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=2298" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=6042&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-24837" target="_blank" class="shows">Undercovers</A> 
				</td> 
				<td> 
					<B> 
-					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S01E01 - 22-Sep-2010</B><br><A href="http://www.tvrage.com/Undercovers/episodes/1064933982/01x01" target="_blank"> Pilot</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=6042&season=1&episode=1&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Undercovers?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=6042')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=6042" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=6042" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=32&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Desperate_Housewives" target="_blank" class="shows">Desperate Housewives</A> 
				</td> 
				<td> 
					<B> 
S06E23					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S07E01 - 26-Sep-2010</B><br><A href="http://www.tvrage.com/Desperate_Housewives/episodes/1064949416/07x01" target="_blank"> Remember Paul</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=32&season=7&episode=1&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Desperate Housewives?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=32')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=32" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=32" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=323&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Supernatural" target="_blank" class="shows">Supernatural</A> 
				</td> 
				<td> 
					<B> 
S06E01					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S06E02 - 01-Oct-2010</B><br><A href="http://www.tvrage.com/Supernatural/episodes/1064969305/06x02" target="_blank"> Two and a Half Men</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=323&season=6&episode=2&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Supernatural?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=323')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=323" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=323" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=985&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-11011" target="_blank" class="shows">Caprica</A> 
				</td> 
				<td> 
					<B> 
S01E09					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S01E10 - 05-Oct-2010</B><br><A href="http://www.tvrage.com/Caprica/episodes/1064916389/01x10" target="_blank"> Unvanquished</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=985&season=1&episode=10&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Caprica?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=985')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=985" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=985" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=2267&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Chuck" target="_blank" class="shows">Chuck</A> 
				</td> 
				<td> 
					<B> 
S04E04					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S04E05 - 18-Oct-2010</B><br><A href="http://www.tvrage.com/Chuck/episodes/1064976553/04x05" target="_blank"> Chuck Versus the Couch Lock</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=2267&season=4&episode=5&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Chuck?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=2267')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=2267" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=2267" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=1123&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/Dexter" target="_blank" class="shows">Dexter</A> 
				</td> 
				<td> 
					<B> 
S05E04					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S05E05 - 24-Oct-2010</B><br><A href="http://www.tvrage.com/Dexter/episodes/1064949420/05x05" target="_blank"> First Blood</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=1123&season=5&episode=5&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Dexter?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=1123')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=1123" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=1123" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=334&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/How_I_Met_Your_Mother" target="_blank" class="shows">How I Met Your Mother</A> 
				</td> 
				<td> 
					<B> 
S06E05					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S06E06 - 25-Oct-2010</B><br><A href="http://www.tvrage.com/How_I_Met_Your_Mother/episodes/1064984708/06x06" target="_blank"> Baby Talk</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=334&season=6&episode=6&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: How I Met Your Mother?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=334')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=334" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=334" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=6657&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-25703" target="_blank" class="shows">The Event</A> 
				</td> 
				<td> 
					<B> 
S01E05					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S01E06 - 25-Oct-2010</B><br><A href="http://www.tvrage.com/The_Event/episodes/1064984424/01x06" target="_blank"> Loyalty</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=6657&season=1&episode=6&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: The Event?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=6657')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=6657" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=6657" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=4687&status=1"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-21704" target="_blank" class="shows">Glee</A> 
				</td> 
				<td> 
					<B> 
S02E04					</B> 
				</td> 
				<td> 
					<img src="img/icon_watch.gif">				</td> 
				<td> 
					<B>S02E05 - 26-Oct-2010</B><br><A href="http://www.tvrage.com/Glee/episodes/1064972545/02x05" target="_blank"> The Rocky Horror Glee Show</A> 
				</td> 
				<td> 
					<A href="myshows.php?action=Update&showid=4687&season=2&episode=5&seen=1" style="font-size: xx-small;">SEEN</A><br>					<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Glee?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=4687')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=4687" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=4687" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=6141&status=2"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-25056" target="_blank" class="shows">The Walking Dead</A> 
				</td> 
				<td> 
					<B> 
-					</B> 
				</td> 
				<td> 
					<img src="img/icon_coming.gif">				</td> 
				<td> 
					<B>S01E01 - 31-Oct-2010</B><br><A href="http://www.tvrage.com/The_Walking_Dead/episodes/1064920135/01x01" target="_blank"> Days Gone Bye</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: The Walking Dead?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=6141')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=6141" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=6141" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=3199&status=2"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-18388" target="_blank" class="shows">Fringe</A> 
				</td> 
				<td> 
					<B> 
S03E04					</B> 
				</td> 
				<td> 
					<img src="img/icon_coming.gif">				</td> 
				<td> 
					<B>S03E05 - 04-Nov-2010</B><br><A href="http://www.tvrage.com/Fringe/episodes/1064985286/03x05" target="_blank"> Amber 31422</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Fringe?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=3199')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=3199" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=3199" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=57&status=2"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/House" target="_blank" class="shows">House</A> 
				</td> 
				<td> 
					<B> 
S07E05					</B> 
				</td> 
				<td> 
					<img src="img/icon_coming.gif">				</td> 
				<td> 
					<B>S07E06 - 08-Nov-2010</B><br><A href="http://www.tvrage.com/House/episodes/1064984425/07x06" target="_blank"> Office Politics</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: House?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=57')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=57" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=57" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=5233&status=2"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-22814" target="_blank" class="shows">V (2009)</A> 
				</td> 
				<td> 
					<B> 
S01E12					</B> 
				</td> 
				<td> 
					<img src="img/icon_coming.gif">				</td> 
				<td> 
					<B>S02E01 - 04-Jan-2011</B><br><A href="http://www.tvrage.com/V_2009/episodes/1064980651/02x01" target="_blank"> TBA</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: V (2009)?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=5233')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=5233" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=5233" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=3&status=3"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/24" target="_blank" class="shows">24</A> 
				</td> 
				<td> 
					<B> 
S05E07					</B> 
				</td> 
				<td> 
					<img src="img/icon_unknown.gif">				</td> 
				<td> 
					<B>S05E07 - no date</B><br><A href="http://www.tvrage.com/24" target="_blank"> 24 -- Guide</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: 24?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=3')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=3" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=3" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=3213&status=3"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-18434" target="_blank" class="shows">Being Human (UK)</A> 
				</td> 
				<td> 
					<B> 
S01E06					</B> 
				</td> 
				<td> 
					<img src="img/icon_unknown.gif">				</td> 
				<td> 
					<B>S01E06 - no date</B><br><A href="http://www.tvrage.com/shows/id-18434" target="_blank"> Being Human (UK) -- Guide</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Being Human (UK)?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=3213')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=3213" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=3213" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=985&status=3"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-11011" target="_blank" class="shows">Caprica</A> 
				</td> 
				<td> 
					<B> 
S01E09					</B> 
				</td> 
				<td> 
					<img src="img/icon_unknown.gif">				</td> 
				<td> 
					<B>S01E09 - no date</B><br><A href="http://www.tvrage.com/shows/id-11011" target="_blank"> Caprica -- Guide</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Caprica?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=985')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=985" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=985" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=819&status=3"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/The_IT_Crowd" target="_blank" class="shows">The IT Crowd</A> 
				</td> 
				<td> 
					<B> 
S04E06					</B> 
				</td> 
				<td> 
					<img src="img/icon_unknown.gif">				</td> 
				<td> 
					<B>S04E06 - no date</B><br><A href="http://www.tvrage.com/The_IT_Crowd" target="_blank"> The IT Crowd -- Guide</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: The IT Crowd?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=819')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=819" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=819" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=1635&status=3"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-12662" target="_blank" class="shows">True Blood</A> 
				</td> 
				<td> 
					<B> 
S03E12					</B> 
				</td> 
				<td> 
					<img src="img/icon_unknown.gif">				</td> 
				<td> 
					<B>S03E12 - no date</B><br><A href="http://www.tvrage.com/shows/id-12662" target="_blank"> True Blood -- Guide</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: True Blood?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=1635')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=1635" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=1635" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=6018&status=3"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-24787" target="_blank" class="shows">The Pillars Of The Earth</A> 
				</td> 
				<td> 
					<B> 
-					</B> 
				</td> 
				<td> 
					<img src="img/icon_unknown.gif">				</td> 
				<td> 
					<B>S00E00 - no date</B><br><A href="http://www.tvrage.com/shows/id-24787" target="_blank"> The Pillars Of The Earth -- Guide</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: The Pillars Of The Earth?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=6018')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=6018" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=6018" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=6042&status=3"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-24837" target="_blank" class="shows">Undercovers</A> 
				</td> 
				<td> 
					<B> 
-					</B> 
				</td> 
				<td> 
					<img src="img/icon_unknown.gif">				</td> 
				<td> 
					<B>S00E00 - no date</B><br><A href="http://www.tvrage.com/shows/id-24837" target="_blank"> Undercovers -- Guide</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Undercovers?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=6042')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=6042" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=6042" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
			<tr align="center" style="background-color: "> 
				<td> 
					<A href="myshows.php?action=expand&showid=3731&status=3"><IMG border="0" src="img/icon_plus.gif" style="cursor: pointer;"></A> 
				</td> 
				<td> 
					<A href="http://www.tvrage.com/shows/id-18175" target="_blank" class="shows">Wallander</A> 
				</td> 
				<td> 
					<B> 
-					</B> 
				</td> 
				<td> 
					<img src="img/icon_unknown.gif">				</td> 
				<td> 
					<B>S00E00 - no date</B><br><A href="http://www.tvrage.com/shows/id-18175" target="_blank"> Wallander -- Guide</A> 
				</td> 
				<td> 
										<A href="JavaScript:GotoConfirm('Are you sure you want to delete: Wallander?\n\nAll your episode-records for this show will be lost.','myshows.php?action=Remove&showid=3731')" style="font-size: xx-small;">REMOVE</A><br> 
					<A href="myshows.php?action=Ignore&Ignore=1&showid=3731" style="font-size: xx-small;">Ignore</A> - <A href="myshows.php?action=Split&Split=1&showid=3731" style="font-size: xx-small;">Disallow Split</A> <A href="forum/viewtopic.php?t=66">[?]</A><br> 
				</td> 
			</tr> 
		</table><br> 
		<br> 
		<div align="center" style="font-size: xx-small; font-family: Verdana,Arial,Helvetica,Geneva,Swiss,Sans-Serif; clear: both;"> 
			&copy; 2000-2006 <a href="mailto:contact@myepisodes.com">MyEpisodes</a>. All rights reserved. Design &copy; <a href="mailto:xxmwxx@spymac.com"><u>MW</u></a>.<br> 
			
Page loaded in 0.403950 seconds		</div> 
	</div> 
			</td> 
			<td width="50%"> 
			</td> 
		</tr> 
	</table> 
	<!-- Start of StatCounter Code --> 
	<script type="text/javascript" language="javascript"> 
	var sc_project=1884872;
	var sc_invisible=1;
	var sc_partition=17;
	var sc_security="2efc6f6b";
	</script> 
 
	<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img  src="http://c18.statcounter.com/counter.php?sc_project=1884872&amp;java=0&amp;security=2efc6f6b&amp;invisible=1" alt="web log free" border="0"></a> </noscript> 
	<!-- End of StatCounter Code --> 
	</BODY> 
</HTML>