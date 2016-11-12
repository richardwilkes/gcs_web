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
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-23">GCS-23</a>: When using the filter to search, skills now look at the contents of the specialization field as well as the name.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-55">GCS-55</a>: Support for Pyramid's "Knowing Your Own Strength" article.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-107">GCS-107</a>: The sheet, templates and lists can now be scaled while viewing them. I've only added a few discrete scales:
							100%, 150%, and 200%, which I think should be adequate. The rest of the UI does not scale (for example, the editor dialogs).</li>
						<li>Advantages (and disadvantages, quirks, perks, etc.) can now be toggled back and forth between an enabled and disabled state. When disabled, that advantage (and anything it contains) is
							treated as if it was not actually on the character sheet.</li>
						<li>Added support for incrementing and decrementing the tech level of selected items.</li>
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
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-121">GCS-121</a>: Transhuman Space templates updated to 4th Edition, contributed by Johan Winqvist.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-128">GCS-128</a>: Perks from Thaumatology - Magical Styles, contributed by R. William Morris.</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
