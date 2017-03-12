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
						<li>Partial implementation of <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-25">GCS-25</a>: Skills &amp; spells can now be based off of 10 rather than a stat.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-151">GCS-151</a>: Add self-control roll option of N/A.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Unidentified keys will now have the key name emitted as part of the error message when exporting a text template. Previously, most cases would emit a "%s" instead.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-143">GCS-143</a>: The 'Use GURPS Metric Rules' option isn't honored correctly when calculating the total weight of container.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-152">GCS-152</a>: Size modifier incorrectly affecting ST pricing with KYOS rules enabled.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Added the Gray Necromancer from Pyramid 3-50.</li>
						<li>Added spells from Pyramid 3-50.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-149">GCS-149</a>: Skill Dancing should default to DX-5.</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
