<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GURPS Character Sheet</title>
		<?php include 'parts/head.php'; ?>
	</head>
	<body>
		<?php include 'parts/page_header.php'; ?>
		<div id="main">
			<?php include 'parts/menu.php'; ?>
			<div id="right_column">
				<h1>Welcome!</h1>
				<p>GURPS Character Sheet (GCS) is a stand-alone, interactive, character sheet editor that allows you to build
					characters for the <a href="http://www.sjgames.com/gurps">GURPS 4th Edition</a> roleplaying game system. This
					site is the home for GCS, which was written by Richard A. Wilkes.</p>

				<p>I am looking for volunteers to review the data files, find any mistakes or missing bits, make the necessary
					updates, and send them to me for inclusion in the next update. If you'd like to help out,
					<a href="mailto:rich@trollworks.com">contact me</a>.</p>

				<p><b>Bruce Stephenson</b> has volunteered to review and be the main point of contact for the <b>Basic Set</b> data files.</p>
				<p><b>Ryan Sanden</b> has volunteered to review and be the main point of contact for the <b>Fantasy</b> and <b>Dungeon Fantasy</b> data files.</p>
	
				<div class="box">
					<img id="logo" src="images/logo.gif" title="GURPS Character Sheet" />
					<div id="downloads">
						<h2>Download<br>Version 4.2</h2>
						<p><a href="/downloads/4.2.0/gcs-4.2.0-mac.zip" id="macintosh_download" title="Click to download the Macintosh version"></a>
							<a href="/downloads/4.2.0/gcs-4.2.0-windows.zip" id="windows_download" title="Click to download the 64-bit Windows version"></a>
							<a href="/downloads/4.2.0/gcs-4.2.0-windows-32.zip" id="windows32_download" title="Click to download the 32-bit Windows version"></a>
							<a href="/downloads/4.2.0/gcs-4.2.0-linux.zip" id="linux_download" title="Click to download the 64-bit Linux version"></a>
							<a href="/downloads/4.2.0/gcs-4.2.0-linux-32.zip" id="linux32_download" title="Click to download the 32-bit Linux version"></a>
							<br>Released December 29, 2015</p>
					</div>
				</div>

				<div id="note">
					<h1>Note!</h1>
					<p>I've noticed that downloading the GCS zip file on Windows 7+ using Chrome (and possibly other browsers) now shows a message stating
						the file "is not commonly downloaded and could be dangerous". Some research shows that this is due to the fact that I am now hosting the
						software directly on my server rather than on a hosting service like SourceForge and also because I do not digitally sign the executable,
						which costs money each year. If this bothers you, you are welcome to download the source and build it yourself.</p>
					<p>A similar issue exists on Mac OS X where I also do not digitally sign the application, so you will need to either "allow apps downloaded
						from anywhere" (inside the "Security &amp; Privacy" system preferences) &mdash; which I don't recommend &mdash; or right-click on the
						application and select "Open", which seems to override the default behavior you get when double-clicking. If you do this latter step once,
						it should remember and not bother you again. Just as with the Windows problem above, if this bothers you, you are welcome to download the
						source and build it yourself.</p>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>