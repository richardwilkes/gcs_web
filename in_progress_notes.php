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
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-20">GCS-20</a>: A piece of equipment can now have a feature added to it that reduces the effective weight
							of its contained items by either an absolute quantity or a percentage. To make this work properly, a small change to the way the extended weight field is calculated and
							displayed was made. In the past, it would always show the weight of the container itself plus all of its contents. Now, it only shows the weight of its contents if those
							contents are actually being carried/equipped. This change allows something like the Pathfinder Bag of Holding Type I to be created by specifying a weight reduction of
							250 lbs as a feature and a maximum contained weight of 0 lbs (so that the Bag of Holding entry will turn red if the player places too much inside it).</li>
						<li>By default, GCS looks for its library of data files next to itself in its installation directory.
							You can now alter this behavior by setting the environment variable GCS_LIBRARY to point to some
							other location on disk instead.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-92">GCS-92</a>: No longer mark library files as changed when all that was modified was the sort order.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-102">GCS-103</a>: Fixed misspelling of 'spacecraft'.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-103">GCS-103</a>: Fixed cost and penalties associated with the Shyness disadvantage.</li>
						<li><a href="https://gurpscharactersheet.atlassian.net/browse/GCS-104">GCS-104</a>: Changed the prerequisite for Essential Food to include 6 Food spells rather than 5.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
