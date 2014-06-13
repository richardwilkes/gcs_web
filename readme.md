## Release Notes for Version 4.0.1 - June 13, 2014

### Features Added

- Partially localized for German, courtesy of Sebi. More to come in future releases.
- Option/Alt-Right Arrow now expands the selected nodes and all of their children in
  the Library Explorer.
- Added a button for the removal of attacks in the editor panel.

### Bugs Fixed

- Fixed an issue that was causing odd behavior when a window other than the main GCS
  window was focused and then the main GCS window was re-focused.
- Fix for [Bug #94](http://sourceforge.net/p/gcs-java/bugs/94): Changed the
  prerequisites in some data files to require the specialization of "Submachine Gun"
  and not "SMG", since that's what the Guns skill uses.

### Miscellaneous Changes

- Revised the version checking so that older versions can now notice versions 4.0+
  being available.
- The height, weight and age fields no longer show anything when a zero is entered.
- The Modifiers list in the item editor now uses the standard platform fonts rather
  than the fonts set for the character sheet.
- Switched the abbreviation for Metric Tons to just 't' (from 'mt').
- Added 32-bit versions of GCS for Windows and Linux. (These were back-ported for
  4.0 as well)

### Data File Changes

- Added some monsters/animals from the Basic Set and Magic. Contributed by Peter
  Th&#246;nell.

## Release Notes for Version 4.0 - May 29, 2014

### Features Added

- Added native launchers for each platform and embedded an appropriate Java
  Runtime Environment so that GCS will always have the version it needs to run.
- Implemented a docking interface for all of the files. This replaces the old
  window-based file management.
- Replaced the Data menu with the Library Explorer.
- Switched back to a version numbering scheme more familiar to most people,
  i.e. <major>.<minor>.<bugfix>. This has the unfortunate side-effect of not
  allowing older versions to notice there is a new version available for this
  transition.

### Bugs Fixed

- Fix for [Bug #80](http://sourceforge.net/p/gcs-java/bugs/80): Issues with
  localized numbers not being saved and restored correctly when the system
  locale wasn't compatible with US settings.
- Fix for [Bug #78](http://sourceforge.net/p/gcs-java/bugs/78): Equipment
  prereq doesn't store weight values >= 1000.
- Fix for [Bug #79](http://sourceforge.net/p/gcs-java/bugs/79): Optional
  multiplicative modifiers aren't calculated correctly.

### Miscellaneous Changes

- Updated the code base to require Java 8.

### Data File Changes

- As part of the change to use a docking interface, split the library files
  (.glb) back out into their separate library parts: Advantages (.adq), Skills
  (.skl), Spells (.spl), and Equipment (.eqp). You can still load the old .glb
  files, but untitled library documents of the appropriate type will be created
  when you do so, allowing you to save them out individually.
- Added (anti)talents from Power Ups 3, including reaction bonuses and
  alternate benefits. Contributed by Kevin Michael Smith.
- Updated the Action library with the latest from Zachary Spector.
