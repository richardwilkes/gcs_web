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
						<li>HTML export now writes out individual top-level notes using the @NOTES_LOOP_START/@NOTES_LOOP_END notation rather than the old @NOTES key.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-123">GCS-123</a>: Wrap top-level notes in the HTML export.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-124">GCS-124</a>: Incorrect difficulties for some Martial Arts Techniques.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-126">GCS-126</a>: Don't allow leveled advantages to be reduced below 0.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-128">GCS-128</a>: Perks from Thaumatology - Magical Styles, contributed by R. William Morris.</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
Fix for GCS-123 and start using the notes loop rather than the old way