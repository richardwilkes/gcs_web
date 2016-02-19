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
						<li></li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Fix for <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-77">GCS-77</a>: GCS self-sets as default program for .PDFs with no user input.
							GCS no longer registers itself as the owner for PDF documents.</li>
						<li>Fix for <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-78">GCS-78</a>: When navigating windows, selected entries are greyed out.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Added Dungeon Fantasy 2 monsters. Contributed by <a href="mailto:ryan@ryansanden.com">Ryan Sanden</a>.</li>
						<li>Added spells from Bio-Tech contributed in <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-84">GCS-84</a>.</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
