<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GURPS Character Sheet - FAQ</title>
		<?php include 'parts/head.php'; ?>
	</head>
	<body>
		<?php include 'parts/page_header.php'; ?>
		<div id="main">
			<?php include 'parts/menu.php'; ?>
			<div id="right_column">
				<h1>Frequently Asked Questions</h1>

				<h3>Can I submit new/revised data files?</h3>
				<p>Absolutely! Almost all of the current data content of GCS was provided by helpful
					individuals other than me. If you have completely new content, please create a new
					library for it and send the resulting file. If, on the other hand, you're modifying
					one of the existing data files, please be sure to update to the latest version from the
					git repository first, make your changes, then submit a patch file of the differences.
					In either case, please create a
					<a href="https://gurpscharactersheet.atlassian.net/secure/CreateIssue!default.jspa">request</a>
					for the work and attach the new file or patch file to that.</p>

				<h3>What page reference abbreviations are being used in the data files?</h3>
				<p>The current list of page reference abbreviations can be found here: <a href="/page_references.php">https://gurpscharactersheet.com/page_references</a>

				<h3>What development environment was used?</h3>
				<p>I am currently using Eclipse 4.6 for Java development. As new versions of Eclipse come out,
					I generally upgrade to them. Should you check out the source code, you'll find that the
					project settings have already been configured to what I prefer. I do all development on
					a MacBook Pro, using Parallels Desktop or VMWare when I need to run Linux or Windows. I
					also have actual Linux and Windows boxes available to me, but have found them to be
					unneeded. The <a href="https://github.com/richardwilkes/gcs/blob/master/README.md">Development Setup</a>
					page describes how to setup the development environment for GCS.</p>
		
				<h3>Do you require any particular formatting to be used?</h3>
				<p>Yes. As mentioned here, I've already pre-configured the settings I use within Eclipse.
					Prior to submitting source code, please make sure you have run both the Organize Imports
					and Format commands across the source you've modified. This should not be necessary if
					you're using the most recent version of Eclipse and the preferences I provide, as they
					are set to automatically do both of these steps for you when saving the file.</p>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
