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
	
				<div class="box">
					<img id="logo" src="images/logo.gif" title="GURPS Character Sheet" />
					<div id="downloads">
						<h2>Download<br>Version 4.6</h2>
						<p><a href="/downloads/4.6.0/gcs-4.6.0-mac.zip" id="macintosh_download" title="Click to download the Macintosh version"></a>
							<a href="/downloads/4.6.0/gcs-4.6.0-windows.zip" id="windows_download" title="Click to download the 64-bit Windows version"></a>
							<a href="/downloads/4.6.0/gcs-4.6.0-windows-32.zip" id="windows32_download" title="Click to download the 32-bit Windows version"></a>
							<a href="/downloads/4.6.0/gcs-4.6.0-linux.zip" id="linux_download" title="Click to download the 64-bit Linux version"></a>
							<a href="/downloads/4.6.0/gcs-4.6.0-linux-32.zip" id="linux32_download" title="Click to download the 32-bit Linux version"></a>
							<br>Released November 12, 2016</p>
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
						source and build it yourself. Another issue related to this has come up where some people are launching GCS to find no library files being
						shown. This is due to Apple's app translocation process being applied to the GCS executable when it shouldn't be. To disable this, you will
						need to use the terminal to execute this: <code>xattr -d com.apple.quarantine &lt;full path to GURPS Character Sheet.app&gt;</code>. I've
						only had one report of this problem so far, so hopefully this step isn't needed for most people.</p>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>