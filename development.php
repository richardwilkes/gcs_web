<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GURPS Character Sheet - Development Setup</title>
		<?php include 'parts/head.php'; ?>
	</head>
	<body>
		<?php include 'parts/page_header.php'; ?>
		<div id="main">
			<?php include 'parts/menu.php'; ?>
			<div id="right_column">
				<h1>Development Setup</h1>
				<p>GCS is composed of three source projects that I maintain:</p>
				<ul>
					<li><a href="git://code.trollworks.com/apple_stubs.git">git://code.trollworks.com/apple_stubs.git</a></li>
					<li><a href="git://code.trollworks.com/gcs.git">git://code.trollworks.com/gcs.git</a></li>
					<li><a href="git://code.trollworks.com/toolkit.git">git://code.trollworks.com/toolkit.git</a></li>
				</ul>
				<p>The code is compiled with <a href="http://www.oracle.com/technetwork/java/javase/downloads/index.html">Java 8</a>.
					<a href="http://ant.apache.org">Ant</a> is used to build the product and produce the distribution bundles,
					however, I use the latest <a href="http://www.eclipse.org/downloads/index-developer.php">Eclipse</a> release
					for daily development.</p>
				<h2>Building from the command line</h2>
				<p>1. Clone the source repositories:</p>
				<div class="code">% git clone git://code.trollworks.com/apple_stubs.git
% git clone git://code.trollworks.com/gcs.git
% git clone git://code.trollworks.com/toolkit.git</div>
				<p>2. Compile the code:</p>
				<div class="code">% cd apple_stubs
% ant
% cd ../toolkit
% ant annotations
% ant
% cd ../gcs
% ant</div>
				<p>3. Build a distribution package for your platform:</p>
				<div class="code">% cd gcs
% ant bundle</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>