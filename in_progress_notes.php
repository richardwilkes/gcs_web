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
						<li>Implemented <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-15">GCS-15</a>: Add option to display skill default used.</li>
						<li>Implemented <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-50">GCS-50</a>: Support manual switching of defaults as per B173. Contributed by Sebástien Wilhelmi.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Fix for <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-51">GCS-51</a>: Skill editor drops skill points to 0 when a language that uses '.' for a numeric grouping separator is used.</li>
						<li>Fix for <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-29">GCS-29</a>: Too much precision in randomized height & weight.</li>
						<li>Updated the URLs for filing bug reports and feature requests to point to the new Jira server I'm using.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Added <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-41">GCS-41</a>: GURPS Instant Armor. Contributed by William Morris.</li>
						<li>Fix for <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-43">GCS-43</a>: Decreased Basic Speed missing from Basic Advantages. Contributed by William Morris.</li>
						<li>Fix for <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-42">GCS-42</a>: Weapon Bond missing from Dungeon Fantasy Advantages. Contributed by William Morris.</li>
						<li>Added equipment from Low Tech. Contributed by William Morris.</li>
						<li>Fix for <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-30">GCS-30</a>: Dungeon fantasy containers don't have the correct weight limits for what they can hold.
							Additional fixes were made for various other incorrect entries as well. Contributed by William Morris.</li>
						<li>Added advantages and spells from GURPS Magic - Plant Spells. Contributed by Klara.</li>
						<li>Added a template to simulate the background of having gone through the German public school system. Contributed by Christian.</li>
						<li>Added a compilation of Low Tech equipment. Contributed by James B. Byrne.</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
