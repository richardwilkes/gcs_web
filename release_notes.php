<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GURPS Character Sheet - Release Notes</title>
		<?php include 'parts/head.php'; ?>
	</head>
	<body>
		<?php include 'parts/page_header.php'; ?>
		<div id="main">
			<?php include 'parts/menu.php'; ?>
			<div id="right_column">
				<div id="release_notes">
					<h1>Release Notes</h1>
					<h2>Version <span class="version">4.2</span><span class="release_date">December 29, 2015</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>Implemented <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-15">GCS-15</a>: Add option to display skill default used.</li>
						<li>Implemented <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-50">GCS-50</a>: Support manual switching of defaults as per B173. Contributed by Sebástien Wilhelmi.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Drag-rearrangement of tabs on Linux was not working.</li>
						<li>Fix for <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-51">GCS-51</a>: Skill editor drops skill points to 0 when a language that uses '.' for a numeric grouping separator is used.</li>
						<li>Fix for <a href="https://gurpscharactersheet.atlassian.net/browse/GCS-29">GCS-29</a>: Too much precision in randomized height & weight.</li>
						<li>Updated the URLs for filing bug reports and feature requests to point to the new Jira server I'm using.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Added data files for Reign of Steel: Will to Live. Contributed by Иван Абдулин.</li
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
					<h2>Version <span class="version">4.1.1</span><span class="release_date">July 4, 2015</span></h2>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>A crash on Ubuntu 15.04 caused by that OS setting an environment variable which was injecting bad code into all Java-based apps has been fixed by forcibly removing that particular environment variable if it is present.</li>
						<li>Notes in templates now wrap at a reasonable width.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Fixed missing defaults in the Artist skills.</li>
						<li>Removed forced line wrapping in notes of various races.</li>
					</ul>
					<h2>Version <span class="version">4.1</span><span class="release_date">April 19, 2015</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>New localization: Spanish.</li>
						<li>The user can now force GCS to use a specific language in its user interface by setting an environment variable named <b>GCS_LANGUAGE</b> to an appropriate language code.
							As of this point in time, GCS has translations for German (<b>GCS_LANGAUGE=de</b>), Russian (<b>GCS_LANGUAGE=ru</b>), and Spanish (<b>GCS_LANGUAGE=es</b>) in addition to
							its native American English. Using a value that is unrecognized will result in American English being used. By default (i.e. if this environment variable is not set), GCS
							attempts to use the default language for the system.</li>
						<li>Added the ability to control which direction rounding occurs for the point cost of advantages &amp; disadvantages. The default is round up, which is the GURPS default for
							most things. However, there are some things, like Reputation, which explicitly state they should be rounded down. This new setting allows that.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Don't permit the metric rules preference to affect non-metric calculation and display of Basic Lift and Encumbrance.</li>
						<li>Fixed saving of Technique difficulty, which was broken by an earlier update for localization.</li>
						<li>If a character has multiple races, they are now added together for cost purposes, rather than just using the cost for the last one listed.</li>
						<li>Striking Strength is now properly accounted for when determining whether a penalty applies for not meeting the minimum required strength for a weapon.</li>
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
					<h2>Version <span class="version">4.0.2</span><span class="release_date">January 4, 2015</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>Updated localization: German.</li>
						<li>New localization: Russian.</li>
						<li>Added a preference to allow the use of the GURPS metric conversion rules from B9. This is primarily for display purposes at this point.
							While data entry has been allowed in varied units for quite some time now, it is still preferred that the data be entered to exactly
							match the rulebooks (i.e. imperial units, not metric) if you intend to share data files.</li>
						<li>Added a preference to allow the sheet to show total character points with or without the unspent points included.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Fixed resolution of skill levels from defaults to match what Sean Punch (aka Kromm) stated was the
							intended resolution mechanism.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Removed TL from the Naturalist skill.</li>
						<li>Fixed the defaults for Mechanic.</li>
						<li>Additions to the data files from Horror, along with miscellaneous fixes in the existing Horror entries.</li>
						<li>Fixed Ultra Tech Reflec and Monocrys armor.</li>
						<li>Added additional varieties of suppressors from High Tech.</li>
						<li>Fixed an incorrect cost for the Vague modifier that existed in some advantages.</li>
						<li>Fixed a missing skill bonus for the Flexibility advantage.</li>
						<li>Added some missing equipment from the Basic Set.</li>
						<li>Fixed many misspellings in the data files.</li>
						<li>Added the mutual exclusion that Combat Reflexes and Enhanced Time Sense have.</li>
						<li>More complete version of Enhanced Time Sense.</li>
					</ul>
					<h2>Version <span class="version">4.0.1</span><span class="release_date">June 13, 2014</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>Partially localized for German, courtesy of Sebi. More to come in future releases.</li>
						<li>Option/Alt-Right Arrow now expands the selected nodes and all of their children in the Library
							Explorer.</li>
						<li>Added a button for the removal of attacks in the editor panel.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Fixed an issue that was causing odd behavior when a window other than the main GCS window
							was focused and then the main GCS window was re-focused.</li>
						<li>Fix for SourceForge Bug #94: Changed the prerequisites in some data files to require the
							specialization of "Submachine Gun" and not "SMG", since that's what the Guns skill uses.</li>
					</ul>
					<h3>Miscellaneous Changes</h3>
					<ul>
						<li>Revised the version checking so that older versions can now notice versions 4.0+ being available.</li>
						<li>The height, weight and age fields no longer show anything when a zero is entered.</li>
						<li>The Modifiers list in the item editor now uses the standard platform fonts rather than the fonts
							set for the character sheet.</li>
						<li>Switched the abbreviation for Metric Tons to just 't' (from 'mt').</li>
						<li>Added 32-bit versions of GCS for Windows and Linux. (These were back-ported for 4.0 as well)</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Added some monsters/animals from the Basic Set and Magic. Contributed by Peter Th&#246;nell.</li>
					</ul>
					<h2>Version <span class="version">4.0</span><span class="release_date">May 29, 2014</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>Added native launchers for each platform and embedded an appropriate Java Runtime Environment
							so that GCS will always have the version it needs to run.</li>
						<li>Implemented a docking interface for all of the files. This replaces the old window-based
							file management.</li>
						<li>Replaced the Data menu with the Library Explorer.</li>
						<li>Switched back to a version numbering scheme more familiar to most people, i.e.
							&lt;major&gt;.&lt;minor&gt;.&lt;bugfix&gt;. This has the unfortunate side-effect of not
							allowing older versions to notice there is a new version available for this transition.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Fix for SourceForge Bug #80: Issues with localized numbers not being saved and restored correctly
							when the system locale wasn&#039;t compatible with US settings.</li>
						<li>Fix for SourceForge Bug #78: Equipment prereq doesn&#039;t store weight values &gt;= 1000.</li>
						<li>Fix for SourceForge Bug #79: Optional multiplicative modifiers aren&#039;t calculated correctly.</li>
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
					<h2>Version <span class="version">2011.01.02.1054</span><span class="release_date">January 2, 2011</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>Implemented support for measurement units other than the GURPS standard feet/inches and pounds.
							User-entered values (including those entered into equipment, for example) can be in any of the
							supported units. The program will not convert these values – it leaves them as entered. However,
							anywhere the program calculates values from these, a preference controls what unit is used for
							the end result. Because of the bias of the rules for imperial units, using metric isn&#039;t a
							clean proposition using this feature, but it is possible now. This covers:
							<ul>
								<li>SourceForge Feature #103: Allow Height &amp; Weight in metric units.</li>
								<li>SourceForge Feature #95: Support metric units.</li>
								<li>SourceForge Feature #82: Display weight in tons.</li>
								<li>SourceForge Feature #63: Add metric support for height field.</li>
							</ul>
						</li>
						<li>Implemented SourceForge Feature #115: Expanded the valid range for the size modifier.</li>
						<li>Implemented SourceForge Feature #112: Preference to turn off automatic naming.</li>
						<li>Added support for SourceForge Feature #100: Advantage containers show point subtotal. The
							&#039;Group&#039; container used to be treated specially for point display purposes. Removed
							this so they all now display a summary of points of their contained items.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Fix for SourceForge Bug #11: Relative skill levels do not reflect Talent. Changed the code to apply
							all skill bonuses to the relative skill level calculation. Since this effectively reduces the
							calculation to Skill Level - Stat (but without encumbrance), I don&#039;t see why RSL is even needed
							if this is indeed the way it is intended to be done. However, since 99% of the published examples do
							it this way and Kromm has weighed in that this is the way it is intended, I&#039;ve made the change,
							silly though it may be.</li>
						<li>Fix for SourceForge Bug #70: Error in zero point calculation.</li>
						<li>Put the modifier list in a scroll panel so that it will be usable even on small monitors.</li>
						<li>Fix for SourceForge Bug #63: Text obeys system colors; background doesn&#039;t. I now force the
							character sheet text and backgrounds to have the colors they were intended to have, regardless of
							the current system theme. This still leaves the interface a bit jarring in some places, but
							everything should now be readable if you muck with the standard system colors.</li>
						<li>Changed the Windows batch file for gcs to extract the path name so that launching didn&#039;t
							depend on being in the correct directory. Not sure this works for all versions of Windows.
							Feedback would be appreciated.</li>
						<li>Fix for SourceForge Bug #73: Points being mis-calculated with some combinations of modifiers.
							Applied a patch from Matt Fowles plus some additional fixes of my own.</li>
					</ul>
					<h3>Miscellaneous Changes</h3>
					<ul>
						<li>Updated the HTML template layout to use points rather than pixels and forced a width that
							will fit on both Letter and A4 paper.</li>
						<li>Revised the splash screen and about box code to allow the informational data to be rendered
							at runtime.</li>
						<li>Switched to using reflection to deal with the Mac-specific portions of the app to eliminate
							the dependency on AppleJavaExtensions.jar.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Added libraries for Action, High Tech &amp; Ultra Tech contributed by Zachary Spector.</li>
						<li>Cleaned up some traits with variants.</li>
						<li>Fix for SourceForge Bug #74: Errors in the Dungeon Fantasy data file.</li>
						<li>Fix for SourceForge Bug #71: Hide spell prereq incorrect.</li>
						<li>Fix various typos.</li>
						<li>Fix many techniques that were marked as being Average when they should have been marked
							as being Hard.</li>
						<li>Lots of miscellaneous corrections contributed by many different people.</li>
					</ul>
					<p class="footnote">Release notes for earlier versions have been removed.</p>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>