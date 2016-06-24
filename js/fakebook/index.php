<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Fakebook</title>

	<link rel="stylesheet" type="text/css" href="normalize.css" />
	<link rel="stylesheet" type="text/css" href="styles.css" />

	<script type="text/javascript" src="resources/box.js/box.js"></script>
	<script type="text/javascript" src="resources/script.js"></script>
</head>

<body>

	<!-- Overlay to dim screen, and dialog for status updates -->
	<div id="overlay">
		<div id="dialog" class="dialog rounded">
			<p id="updatetitle">Status Update</p>
			<form>
				<textarea id="dialogText" class="rounded" onkeyup="keyUpHandler(event)"></textarea>
			</form>
			<p>Press enter to post</p>
		</div>
	</div>

	<!--## Header (the top bar of the page) -->
	<div id="header">
		<!--## Header Container, to vertically align the 3 header divs (logo, search, account) -->
		<div id="header-container">

			<!--## Logo image Pod -->
			<div id="logo">
				<img src="images/logo.png" alt="the network"/>
			</div>

			<!--## Search form Pod -->
			<div id="search">
				<form method="get" action="#">
					<input type="search" name="terms" class="rounded" placeholder="Search...." />
					<input type="submit" class="rounded" value=" Go! " />
				</form>
			</div>

			<!--## Account Menu Pod -->
			<div id="account" class="rounded">
				<div class="infoitem menu-link">Home</div>
				<div class="infoitem menu-link" onclick="showDialog('dialog');"><a>Post an Update</a></div>
				<img src="" id="acct" class="rounded"/>
			</div>
			<script type="text/javascript">
				init();
				printMiniAcctImage(getCurrentUserId(), 'acct');
			</script>

		</div>
	</div>


	<!-- Main Content (lower part of page) -->
	<div id="main-content">
		<!-- Profile Pod -->
		<div id="profile" class="rounded">
			<div id="profile-img-container"><img id="profile-img" src="" class="rounded" /></div><div id="username"></div>
		</div>
		<script type="text/javascript">
			printProfileInfo(getCurrentUserId(), 'profile-img', 'username');
		</script>

		<!-- Main pod for displaying all posts and comments -->
		<div id="page" class="rounded">
			<div id="posts">
			</div>
			<script type="text/javascript">
				printPosts('posts');
			</script>
		</div>
	</div>

	<div class="footer">
		<p>&copy;Spencer Bartz 2015</p>
		<p><a href="http://www.spencerbartz.com">spencerbartz.com</a></p>

	</div>

</body>
</html>