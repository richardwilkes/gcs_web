<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GURPS Character Sheet - In Progress Release Notes</title>
		<?php include 'parts/head.php'; ?>
	</head>
	<body>
		<?php include 'parts/page_header.php'; ?>
		<div id="main">
			<?php include 'parts/menu.php'; ?>
			<div id="right_column">
				<div id="release_notes">
					<h1>In Progress Release Notes</h1>
					<h2>Version <span class="version">&lt;in development&gt;</span><span class="release_date">Not released yet</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>Implemented <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-26">GCS-26</a>: Add link to PDFs.
							As part of this change, GCS now supports opening PDF files. Also as part of this change, the various export
							menu options have been removed. Instead, choose Save As... and then select the file type you'd like to use
							when saving the file.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li></li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Sanitized the page references throughout the data files. Many thanks to <b>Ryan Sanden</b> for all the work necessary to make this happen.</li>
						<li>Minor cleanup.</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
