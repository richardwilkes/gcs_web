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
						<li>New localization: Spanish.</li>
						<li>The user can now force GCS to use a specific language in its user interface by setting an environment variable named <b>GCS_LANGUAGE</b> to an appropriate language code.
							As of this point in time, GCS has translations for German (<b>GCS_LANGAUGE=de</b>), Russian (<b>GCS_LANGUAGE=ru</b>), and Spanish (<b>GCS_LANGUAGE=es</b>) in addition to
							its native American English. Using a value that is unrecognized will result in American English being used. By default (i.e. if this environment variable is not set), GCS
							attempts to use the default language for the system.</li>
						<li>Added the ability to control which direction rounding occurs for the point cost of advantages & disadvantages. The default is round up, which is the GURPS default for
							most things. However, there are some things, like Reputation, which explicitly state they should be rounded down. This new setting allows that.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Don't permit the metric rules preference to affect non-metric calculation and display of Basic Lift and Encumbrance.</li>
						<li>Fixed saving of Technique difficulty, which was broken by an earlier update for localization.</li>
						<li>If a character has multiple races, they are now added together for cost purposes, rather than just using the cost for the last one listed.</li>
					</ul>
					<h3>Miscellaneous Changes</h3>
					<ul>
						<li></li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Fixed the prerequisites for the skill Pharmacy/TL (Herbal) and the spells Geyser, Clean and Copy.</li>
						<li>Fixed the modifiers for the disadvantage Chronic Pain.</li>
						<li>Added the Tough Skin modifier to the advantage Damage Resistance.</li>
						<li>Fixed defaults for the skill Public Speaking.</li>
						<li>Marked the Reputation advantage as rounding down.</li>
						<li>Shields now list their attack usage as 'Shield Bash' rather than being blank.</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
