<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no" />

<!--
	
	This page is YET ANOTHER adaptation of Joe Maller's Bookmarklet Installation Guide:
	
	<http://joemaller.com/___>
	
	(Make sure to check the source comments on that page.)
	
	More about iTransmogrify here:
	
	<http://joemaller.com/2008/01/12/itransmogrify/>
	
-->

	<title>Share with Hoccer</title>

	<style type="text/css" media="screen">

		body {
			margin: 0;
			padding: 0;
			width: 320px;
			font-family: Helvetica, sans-serif;
			font-size: 17px;
			-webkit-text-size-adjust: none;
			background: #5c5c5b url(/images/bookmarklet/images/bookmarklet_bg.png) repeat-x fixed top;
			}
		#container {
			margin: 0;
			padding-bottom: 15px;
			/* background-color: #c5ccd3; */
			border: 1px solid #5c5c5b; /* workaround for a WebKit rendering bug */
			}
		h1 {
			font-size: 17px;
			text-shadow: #000 0px -1px 1px;
			color: #cccccc;
			margin: 15px 10px 8px 20px;
			padding: 0;
			}

		ul {
			margin: 0 10px;
			padding: 0;
			width: 296px;
			background-color: white;
			-webkit-border-radius: 8px;
			border: 1px solid #aaa;
			}
		li {
			font-weight: bold;
			list-style-type: none;
			border-bottom: 1px solid #d9d9d9;
			padding: 10px;
			}
		.secondary {
			font-weight: normal;
			}

		div.group {
			margin: 0 10px;
			padding: 0;
			width: 296px;
			background-color: white;
			-webkit-border-radius: 8px;
			border: 1px solid #aaa;
			}
		div.group p {
			margin: 0;
			font-weight: normal;
			padding: 10px;
			}
		div.figure {
			margin: 0;
			padding: 5px 10px;
			}
        div.footer {
			font-size: 14px;
			
			color: #cccccc;
			margin: 15px 10px 8px 20px;
			padding: 5px 10px;
			}
	</style>
	
	<script type="text/javascript" charset="utf-8">
		window.addEventListener("load", function(){window.scrollTo(0,1)});
	</script>

</head>
<body>
	<div id="container">
		<h1>Hoccer Bookmarklet</h1>
		<div class="group">
			<p>
				These instructions will help you create a bookmarklet to use Hoccer to share the currently open webpage with ease.</p>
		</div>
	
		<h1>Step 1: Bookmark This Page</h1>
		<div class="group">
			<p>
				Tap the plus button at the bottom of the screen, then select <strong>Add Bookmark</strong>.
			</p>
			<div class="figure">
				<img src="/images/bookmarklet/images/plus.jpg" alt="add bookmark"/>
			</div>
			<p>
				Name your bookmarklet something cool, like "Share with Hoccer", save it in your "Bookmarks" folder.  Then tap <strong>Save</strong>.
			</p>
			<div class="figure">
				<img src="/images/bookmarklet/images/save.jpg" alt="save bookmark" />
			</div>
		</div>

		<h1>Step 2: Edit The Bookmark</h1>
		<div class="group">
			<p>
				Tap the Bookmarks button at the bottom of the screen.
			</p>
			<div class="figure">
				<img src="/images/bookmarklet/images/bookmark.jpg" alt="open bookmarks"/>
			</div>
			<p>
				Find the bookmark you just saved (you probably called it "Share with Hoccer").  Tap <strong>Edit</strong>, then tap on the bookmark itself.
			</p>
			<p>
				You now need to modify the bookmark URL.  Tap the URL field (it begins with "http:"), then remove all the text <strong>before</strong> the word "javascript".
			</p>
			<div class="figure">
				<img src="/images/bookmarklet/images/edit.jpg" alt="edit bookmark start" />
			</div>
			<p>
				The final URL should look like this:
			</p>
			<div class="figure">
				<img src="/images/bookmarklet/images/done.jpg" alt="edit bookmark finish" />
			</div>
		</div>

		<h1>Step 3: Use The Bookmarklet</h1>
		<div class="group">
			<p>
				When you're surfing the web and want to share a link , just tap the bookmarks button, then tap "Share with Hoccer".  The current link will be sent to Hoccer and added to your compose view, ready for sharing.</p>
			<div class="figure">
				<img src="/images/bookmarklet/images/bookmark.jpg" alt="open bookmarks"/>
			</div>
			<p>
			</p>
		</div>
		<div class="footer">
		</div>
	</div>
	
	<!-- Piwik -->
   	<script type="text/javascript">
	var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.artcom.de/" : "http://stats.artcom.de/");
	document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
	</script><script type="text/javascript">
	try {
	var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
	piwikTracker.setDocumentTitle("iPhone Bookmarklet Instructions");
	piwikTracker.trackPageView();
	piwikTracker.enableLinkTracking();
	} catch( err ) {}
	</script><noscript><p><img src="http://stats.artcom.de/piwik.php?idsite=1" style="border:0" alt=""/></p></noscript>
    <!-- End Piwik Tag -->
    	
</body>
</html>