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
					<h2>Version <span class="version">4.0.0</span><span class="release_date">Not released yet</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>Added native launchers for each platform and embedded an appropriate Java Runtime Environment
							so that GCS will always have the version it needs to run.</li>
						<li>Implemented a docking interface for all of the files. This replaces the old window-based
							file management.</li>
						<li>Replaced the Data menu with the Library Explorer.</li>
						<li>Switched back to a version numbering scheme more familiar to most people, i.e.
							&lt;major&gt;.&lt;minor&gt;.&lt;bugfix&gt;.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/80">Bug #80</a>: Issues with localized
							numbers not being saved and restored correctly when the system locale wasn&#039;t compatible
							with US settings.</li>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/78">Bug #78</a>: Equipment prereq
							doesn&#039;t store weight values &gt;= 1000.</li>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/79">Bug #79</a>: Optional
							multiplicative modifiers aren&#039;t calculated correctly.</li>
					</ul>
					<h3>Miscellaneous Changes</h3>
					<ul>
						<li>Updated the code base to require Java 8.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>As part of the change to use a docking interface, split the library files (.glb) back out
							into their separate library parts: Advantages (.adq), Skills (.skl), Spells (.spl), and
							Equipment (.eqp). You can still load the old .glb files, but untitled library documents of
							the appropriate type will be created when you do so, allowing you to save them out
							individually.</li>
						<li>Added (anti)talents from Power Ups 3, including reaction bonuses and alternate benefits.
							Contributed by Kevin Michael Smith.</li>
						<li>Updated the Action library with the latest from Zachary Spector.</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
