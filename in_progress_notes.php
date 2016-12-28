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
						<li>GCS now tries to auto-detect when macOS has performed App Translocation on it and inform the user what steps need to be taken to prevent this behavior.
							The real answer here is to pay for whatever is necessary to sign GCS, but I'm currently unwilling to pay for that yearly expense.</li>
						<li>Improved template support for non-HTML uses and adjusted the UI to reflect that it is actually text export and not just HTML export.</li>
						<li>Added menu items and command keys for adding/subtracting enough points to move selected skills &amp; spells to the next/previous level.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Changed Basic Lift calculation for KYOS rules to match table values.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-142">GCS-142</a>: Fix saving of techniques when a language other than English is in use.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Added the Necromancer template, and equipment, advantages, and spells to accommodate it.</li>
						<li>Added the missing skill penalties for Disturbing Voice.</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
