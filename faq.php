<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GURPS Character Sheet - FAQ</title>
		<?php include 'parts/head.php'; ?>
	</head>
	<body>
		<?php include 'parts/page_header.php'; ?>
		<div id="main">
			<?php include 'parts/menu.php'; ?>
			<div id="right_column">
				<h1>Frequently Asked Questions</h1>

				<h3>Can I submit new/revised data files?</h3>
				<p>Absolutely! Almost all of the current data content of GCS was provided by helpful
					individuals other than me. If you have completely new content, please create a new
					library for it and send the resulting file. If, on the other hand, you're modifying
					one of the existing data files, please be sure to update to the latest version from the
					git repository first, make your changes, then submit a patch file of the differences.
					In either case, please create a
					<a href="https://gurpscharactersheet.atlassian.net/secure/CreateIssue!default.jspa">request</a>
					for the work and attach the new file or patch file to that.</p>

				<h3>What page reference abbreviations are being used in the data files?</h3>
				<p><table>
					<tr><td><b>ACT1:</b></td><td>Action 1: Heroes</td></tr>
					<tr><td><b>ACT3:</b></td><td>Action 3: Furious Fists</td></tr>
					<tr><td><b>B</b></td><td>Basic Set</td></tr>
					<tr><td><b>BS</b></td><td>Banestorm</td></tr>
					<tr><td><b>DF1:</b></td><td>Dungeon Fantasy 1: Adventurers</td></tr>
					<tr><td><b>DF3:</b></td><td>Dungeon Fantasy 3: The Next Level</td></tr>
					<tr><td><b>DF4:</b></td><td>Dungeon Fantasy 4: Sages</td></tr>
					<tr><td><b>DF8:</b></td><td>Dungeon Fantasy 8: Treasure Tables</td></tr>
					<tr><td><b>DF11:</b></td><td>Dungeon Fantasy 11: Power-Ups</td></tr>
					<tr><td><b>DF12:</b></td><td>Dungeon Fantasy 12: Ninja</td></tr>
					<tr><td><b>DF13:</b></td><td>Dungeon Fantasy 13: Loadouts</td></tr>
					<tr><td><b>DF14:</b></td><td>Dungeon Fantasy 14: Psi</td></tr>
					<tr><td><b>DFM1:</b></td><td>Dungeon Fantasy Monsters 1</td></tr>
					<tr><td><b>DR</b></td><td>Dragons</td></tr>
					<tr><td><b>F</b></td><td>Fantasy</td></tr>
					<tr><td><b>GUL</b></td><td>Gulliver Mini</td></tr>
					<tr><td><b>H</b></td><td>Horror</td></tr>
					<tr><td><b>HF</b></td><td>Historical Folks</td></tr>
					<tr><td><b>HT</b></td><td>High-Tech</td></tr>
					<tr><td><b>IW</b></td><td>Infinite Worlds</td></tr>
					<tr><td><b>LT</b></td><td>Low-Tech</td></tr>
					<tr><td><b>LTC1:</b></td><td>Low-Tech Companion 1: Philosophers and Kings</td></tr>
					<tr><td><b>LTIA</b></td><td>Low-Tech: Instant Armor</td></tr>
					<tr><td><b>M</b></td><td>Magic</td></tr>
					<tr><td><b>MPS</b></td><td>Magic: Plant Spells</td></tr>
					<tr><td><b>MA</b></td><td>Martial Arts</td></tr>
					<tr><td><b>MAFCCS</b></td><td>Martial Arts: Fairbairn Close Combat Systems</td></tr>
					<tr><td><b>MH1:</b></td><td>Monster Hunters 1: Champions</td></tr>
					<tr><td><b>MYST</b></td><td>Mysteries</td></tr>
					<tr><td><b>MYTH</b></td><td>Myth (3E)</td></tr>
					<tr><td><b>P</b></td><td>Powers</td></tr>
					<tr><td><b>PSI</b></td><td>Psionic Powers</td></tr>
					<tr><td><b>PU1:</b></td><td>Power-Ups 1: Imbuements</td></tr>
					<tr><td><b>PU2:</b></td><td>Power-Ups 2: Perks</td></tr>
					<tr><td><b>PU3:</b></td><td>Power-Ups 3: Talents</td></tr>
					<tr><td><b>PY#:</b></td><td>Pyramid issues (replace # with the issue number)</td></tr>
					<tr><td><b>RSWL</b></td><td>Reign of Steel: Will to Live</td></tr>
					<tr><td><b>SU</b></td><td>Supers</td></tr>
					<tr><td><b>TMS</b></td><td>Thaumatology - Magical Styles</td></tr>
					<tr><td><b>UT</b></td><td>Ultra-Tech</td></tr>
					<tr><td><b>VOR</b></td><td>Vorkosigan Saga</td></tr>
				</table></p>

				<h3>What development environment was used?</h3>
				<p>I am currently using Eclipse 4.6 for Java development. As new versions of Eclipse come out,
					I generally upgrade to them. Should you check out the source code, you'll find that the
					project settings have already been configured to what I prefer. I do all development on
					a MacBook Pro, using Parallels Desktop or VMWare when I need to run Linux or Windows. I
					also have actual Linux and Windows boxes available to me, but have found them to be
					unneeded. The <a href="https://github.com/richardwilkes/gcs/blob/master/README.md">Development Setup</a>
					page describes how to setup the development environment for GCS.</p>
		
				<h3>Do you require any particular formatting to be used?</h3>
				<p>Yes. As mentioned here, I've already pre-configured the settings I use within Eclipse.
					Prior to submitting source code, please make sure you have run both the Organize Imports
					and Format commands across the source you've modified. This should not be necessary if
					you're using the most recent version of Eclipse and the preferences I provide, as they
					are set to automatically do both of these steps for you when saving the file.</p>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>
