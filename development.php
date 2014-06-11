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
				<div id="dev_setup">
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
					<p>If you want to build a distribution package, you'll also need to:</p>
					<p>3. Download one (or all) of the JRE packages I've already prepared for use and place them into the
						<code>launcher</code> directory of the toolkit:</p>
					<ul>
						<li><a href="dev_artifacts/jre-mac.zip">JRE for Mac OS X</a></li>
						<li><a href="dev_artifacts/jre-windows.zip">JRE for 64-bit Windows</a></li>
						<li><a href="dev_artifacts/jre-windows-32.zip">JRE for 32-bit Windows</a></li>
						<li><a href="dev_artifacts/jre-linux.zip">JRE for 64-bit Linux</a></li>
						<li><a href="dev_artifacts/jre-linux-32.zip">JRE for 32-bit Linux</a></li>
					</ul>
					<p>4. Build a distribution package for your platform:</p>
					<div class="code">% cd gcs
% ant bundle</div>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>